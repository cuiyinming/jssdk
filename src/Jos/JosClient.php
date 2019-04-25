<?php

namespace Jos;

class JosClient
{
    public $serverUrl = "http://gw.api.360buy.com/routerjson";

    public $accessToken;

    public $connectTimeout = 0;

    public $readTimeout = 0;

    public $appKey;

    public $appSecret;

    public $logPath;

    public $version = "2.0";

    public $format = "json";

    private $charset_utf8 = "UTF-8";

    private $json_param_key = "360buy_param_json";

    protected function generateSign($params)
    {
        ksort($params);
        $stringToBeSigned = $this->appSecret;
        foreach ($params as $k => $v) {
            if (!is_array($v) && "@" != substr($v, 0, 1)) {
                $stringToBeSigned .= "$k$v";
            }
        }
        unset($k, $v);
        $stringToBeSigned .= $this->appSecret;
        return strtoupper(md5($stringToBeSigned));
    }

    public function curl($url, $postFields = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FAILONERROR, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        if ($this->readTimeout) {
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
        }
        if ($this->connectTimeout) {
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
        }
        //https 请求
        if (strlen($url) > 5 && strtolower(substr($url, 0, 5)) == "https") {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        }

        if (is_array($postFields) && 0 < count($postFields)) {
            $postBodyString = "";
            $postMultipart = false;
            foreach ($postFields as $k => $v) {
                if (is_array($v)) {
                    continue;
                }
                if ("@" != substr($v, 0, 1))//判断是不是文件上传
                {
                    $postBodyString .= "$k=" . urlencode($v) . "&";
                } else//文件上传用multipart/form-data，否则用www-form-urlencoded
                {
                    $postMultipart = true;
                }
            }
            unset($k, $v);
            curl_setopt($ch, CURLOPT_POST, true);
            if ($postMultipart) {
                if (class_exists('\CURLFile')) {
                    curl_setopt($ch, CURLOPT_SAFE_UPLOAD, true);
                } else {
                    if (defined('CURLOPT_SAFE_UPLOAD')) {
                        curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
                    }
                }
                curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);
            } else {
                $header = array("content-type: application/x-www-form-urlencoded; charset=UTF-8");
                curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt($ch, CURLOPT_POSTFIELDS, substr($postBodyString, 0, -1));
            }
        }
        $reponse = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new \Exception(curl_error($ch), 0);
        } else {
            $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            if (200 !== $httpStatusCode) {
                throw new \Exception($reponse, $httpStatusCode);
            }
        }
        curl_close($ch);
        return $reponse;
    }

    protected function logCommunicationError($apiName, $requestUrl, $errorCode, $responseTxt)
    {
        $localIp = isset($_SERVER["SERVER_ADDR"]) ? $_SERVER["SERVER_ADDR"] : "CLI";
        $logger = new JosLogger;
        $logger->conf["log_file"] = rtrim($this->logPath, '\\/') . '/' . "logs/jd/jos_comm_err_" . $this->appKey . "_" . date("Y-m-d") . ".log";
        $logger->conf["separator"] = "^_^";
        $logData = array(
            date("Y-m-d H:i:s"),
            $apiName,
            $this->appKey,
            $localIp,
            PHP_OS,
            $this->version,
            $requestUrl,
            $errorCode,
            str_replace("\n", "", $responseTxt)
        );
        $logger->log($logData);
    }

    public function execute($request, $access_token = null)
    {
        //组装系统参数
        $sysParams["app_key"] = $this->appKey;
        $sysParams["v"] = $this->version;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = date("Y-m-d H:i:s");
        if (null != $access_token) {
            $sysParams["access_token"] = $access_token;
        }

        //获取业务参数
        $apiParams = $request->getApiParas();
        $sysParams[$this->json_param_key] = $apiParams;

        //签名
        $sysParams["sign"] = $this->generateSign($sysParams);
        //系统参数放入GET请求串
        $requestUrl = $this->serverUrl . "?";
        foreach ($sysParams as $sysParamKey => $sysParamValue) {
            $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
        }
        //发起HTTP请求
        try {
            $resp = $this->curl($requestUrl, $apiParams);
        } catch (\Exception $e) {
            $this->logCommunicationError($sysParams["method"], $requestUrl, "HTTP_ERROR_" . $e->getCode(), $e->getMessage());
            $result = [];
            $result['code'] = $e->getCode();
            $result['msg'] = $e->getMessage();
            return $result;
        }

        //解析JD返回结果
        $respWellFormed = false;
        if ("json" == $this->format) {
            $respObject = json_decode($resp, true);
            if (null !== $respObject) {
                $respWellFormed = true;
                foreach ($respObject as $propKey => $propValue) {
                    $respObject = $propValue;
                }
            }
        } else {
            if ("xml" == $this->format) {
                $respObject = @simplexml_load_string($resp);
                if (false !== $respObject) {
                    $respWellFormed = true;
                } else {
                    $respObject = json_decode(json_encode($respObject), true);
                }
            }
        }

        //返回的HTTP文本不是标准JSON或者XML，记下错误日志
        if (false === $respWellFormed) {
            $this->logCommunicationError($sysParams["method"], $requestUrl,
                "HTTP_RESPONSE_NOT_WELL_FORMED", $resp);
            $result = [];
            $result['code'] = 0;
            $result['msg'] = "HTTP_RESPONSE_NOT_WELL_FORMED";
            return $result;
        }

        //如果JD返回了错误码，记录到业务错误日志中
        if (isset($respObject['code'])) {
            $this->logCommunicationError($sysParams["method"], $requestUrl,
                $respObject['code'], json_encode($respObject));
        }
        return $respObject;
    }
}
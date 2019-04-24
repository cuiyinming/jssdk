<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class SellerPromotionSamclubCreateRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.seller.promotion.samclub.create";
    }

    public function getApiParas()
    {
        return json_encode($this->apiParas);
    }

    public function check()
    {

    }

    public function putOtherTextParam($key, $value)
    {
        $this->apiParas[$key] = $value;
        $this->$key           = $value;
    }

    private $appSecret;

    public function setAppSecret($appSecret)
    {
        $this->appSecret              = $appSecret;
        $this->apiParas["app_secret"] = $appSecret;
    }

    public function getAppSecret()
    {
        return $this->appSecret;
    }

    private $ip;

    public function setIp($ip)
    {
        $this->ip             = $ip;
        $this->apiParas["ip"] = $ip;
    }

    public function getIp()
    {
        return $this->ip;
    }

    private $hostName;

    public function setHostName($hostName)
    {
        $this->hostName              = $hostName;
        $this->apiParas["host_name"] = $hostName;
    }

    public function getHostName()
    {
        return $this->hostName;
    }

    private $deployAppName;

    public function setDeployAppName($deployAppName)
    {
        $this->deployAppName               = $deployAppName;
        $this->apiParas["deploy_app_name"] = $deployAppName;
    }

    public function getDeployAppName()
    {
        return $this->deployAppName;
    }

    private $deployAppId;

    public function setDeployAppId($deployAppId)
    {
        $this->deployAppId               = $deployAppId;
        $this->apiParas["deploy_app_id"] = $deployAppId;
    }

    public function getDeployAppId()
    {
        return $this->deployAppId;
    }

    private $requestId;

    public function setRequestId($requestId)
    {
        $this->requestId             = $requestId;
        $this->apiParas["requestId"] = $requestId;
    }

    public function getRequestId()
    {
        return $this->requestId;
    }

    private $skuId;

    public function setSkuId($skuId)
    {
        $this->skuId              = $skuId;
        $this->apiParas["sku_id"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    private $normalPrice;

    public function setNormalPrice($normalPrice)
    {
        $this->normalPrice              = $normalPrice;
        $this->apiParas["normal_price"] = $normalPrice;
    }

    public function getNormalPrice()
    {
        return $this->normalPrice;
    }

    private $clubPrice;

    public function setClubPrice($clubPrice)
    {
        $this->clubPrice              = $clubPrice;
        $this->apiParas["club_price"] = $clubPrice;
    }

    public function getClubPrice()
    {
        return $this->clubPrice;
    }

}





        
 


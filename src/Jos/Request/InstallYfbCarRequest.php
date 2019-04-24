<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class InstallYfbCarRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.install.yfb.car";
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

    private $source;

    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

    private $appType;

    public function setAppType($appType)
    {
        $this->appType             = $appType;
        $this->apiParas["appType"] = $appType;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    private $secKey;

    public function setSecKey($secKey)
    {
        $this->secKey             = $secKey;
        $this->apiParas["secKey"] = $secKey;
    }

    public function getSecKey()
    {
        return $this->secKey;
    }

    private $verCode;

    public function setVerCode($verCode)
    {
        $this->verCode             = $verCode;
        $this->apiParas["verCode"] = $verCode;
    }

    public function getVerCode()
    {
        return $this->verCode;
    }

    private $workerName;

    public function setWorkerName($workerName)
    {
        $this->workerName             = $workerName;
        $this->apiParas["workerName"] = $workerName;
    }

    public function getWorkerName()
    {
        return $this->workerName;
    }

    private $wokerIdNum;

    public function setWokerIdNum($wokerIdNum)
    {
        $this->wokerIdNum             = $wokerIdNum;
        $this->apiParas["wokerIdNum"] = $wokerIdNum;
    }

    public function getWokerIdNum()
    {
        return $this->wokerIdNum;
    }

    private $workerId;

    public function setWorkerId($workerId)
    {
        $this->workerId             = $workerId;
        $this->apiParas["workerId"] = $workerId;
    }

    public function getWorkerId()
    {
        return $this->workerId;
    }

    private $workerMobile;

    public function setWorkerMobile($workerMobile)
    {
        $this->workerMobile             = $workerMobile;
        $this->apiParas["workerMobile"] = $workerMobile;
    }

    public function getWorkerMobile()
    {
        return $this->workerMobile;
    }

}





        
 


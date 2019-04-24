<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class ReceiveCardStateRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.receiveCardState";
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

    private $taxid;

    public function setTaxid($taxid)
    {
        $this->taxid             = $taxid;
        $this->apiParas["taxid"] = $taxid;
    }

    public function getTaxid()
    {
        return $this->taxid;
    }

    private $serialNumber;

    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber             = $serialNumber;
        $this->apiParas["serialNumber"] = $serialNumber;
    }

    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    private $businessid;

    public function setBusinessid($businessid)
    {
        $this->businessid             = $businessid;
        $this->apiParas["businessid"] = $businessid;
    }

    public function getBusinessid()
    {
        return $this->businessid;
    }

    private $ivcNo;

    public function setIvcNo($ivcNo)
    {
        $this->ivcNo             = $ivcNo;
        $this->apiParas["ivcNo"] = $ivcNo;
    }

    public function getIvcNo()
    {
        return $this->ivcNo;
    }

    private $ivcCode;

    public function setIvcCode($ivcCode)
    {
        $this->ivcCode             = $ivcCode;
        $this->apiParas["ivcCode"] = $ivcCode;
    }

    public function getIvcCode()
    {
        return $this->ivcCode;
    }

    private $state;

    public function setState($state)
    {
        $this->state             = $state;
        $this->apiParas["state"] = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    private $appid;

    public function setAppid($appid)
    {
        $this->appid             = $appid;
        $this->apiParas["appid"] = $appid;
    }

    public function getAppid()
    {
        return $this->appid;
    }

    private $sqlx;

    public function setSqlx($sqlx)
    {
        $this->sqlx             = $sqlx;
        $this->apiParas["sqlx"] = $sqlx;
    }

    public function getSqlx()
    {
        return $this->sqlx;
    }

}





        
 


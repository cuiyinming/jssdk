<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class AutoAddCardBillRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.autoAddCardBill";
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

    private $appID;

    public function setAppID($appID)
    {
        $this->appID             = $appID;
        $this->apiParas["appID"] = $appID;
    }

    public function getAppID()
    {
        return $this->appID;
    }

    private $appLx;

    public function setAppLx($appLx)
    {
        $this->appLx             = $appLx;
        $this->apiParas["appLx"] = $appLx;
    }

    public function getAppLx()
    {
        return $this->appLx;
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

    private $openid;

    public function setOpenid($openid)
    {
        $this->openid             = $openid;
        $this->apiParas["openid"] = $openid;
    }

    public function getOpenid()
    {
        return $this->openid;
    }

    private $customerName;

    public function setCustomerName($customerName)
    {
        $this->customerName             = $customerName;
        $this->apiParas["customerName"] = $customerName;
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

}





        
 


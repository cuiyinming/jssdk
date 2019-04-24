<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class ReceiveAuthorizeUserRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.receiveAuthorizeUser";
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

    private $authorizeTime;

    public function setAuthorizeTime($authorizeTime)
    {
        $this->authorizeTime             = $authorizeTime;
        $this->apiParas["authorizeTime"] = $authorizeTime;
    }

    public function getAuthorizeTime()
    {
        return $this->authorizeTime;
    }

}





        
 


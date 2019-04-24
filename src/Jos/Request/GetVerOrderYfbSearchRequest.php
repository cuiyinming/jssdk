<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GetVerOrderYfbSearchRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getVerOrder.yfb.search";
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

    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId             = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

}





        
 


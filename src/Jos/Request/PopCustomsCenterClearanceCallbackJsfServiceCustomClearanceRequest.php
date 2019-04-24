<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PopCustomsCenterClearanceCallbackJsfServiceCustomClearanceRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.customs.center.ClearanceCallbackJsfService.customClearance";
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

    private $customsId;

    public function setCustomsId($customsId)
    {
        $this->customsId             = $customsId;
        $this->apiParas["customsId"] = $customsId;
    }

    public function getCustomsId()
    {
        return $this->customsId;
    }

    private $serviceId;

    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"] = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
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

    private $result;

    public function setResult($result)
    {
        $this->result             = $result;
        $this->apiParas["result"] = $result;
    }

    public function getResult()
    {
        return $this->result;
    }

    private $message;

    public function setMessage($message)
    {
        $this->message             = $message;
        $this->apiParas["message"] = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }

    private $goodsCheck;

    public function setGoodsCheck($goodsCheck)
    {
        $this->goodsCheck             = $goodsCheck;
        $this->apiParas["goodsCheck"] = $goodsCheck;
    }

    public function getGoodsCheck()
    {
        return $this->goodsCheck;
    }

}





        
 


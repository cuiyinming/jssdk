<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class O2oEntityOrderDeliveryRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.o2o.entity.order.delivery";
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

    private $orderSource;

    public function setOrderSource($orderSource)
    {
        $this->orderSource             = $orderSource;
        $this->apiParas["orderSource"] = $orderSource;
    }

    public function getOrderSource()
    {
        return $this->orderSource;
    }

    private $carrierNo;

    public function setCarrierNo($carrierNo)
    {
        $this->carrierNo             = $carrierNo;
        $this->apiParas["carrierNo"] = $carrierNo;
    }

    public function getCarrierNo()
    {
        return $this->carrierNo;
    }

    private $updatePin;

    public function setUpdatePin($updatePin)
    {
        $this->updatePin             = $updatePin;
        $this->apiParas["updatePin"] = $updatePin;
    }

    public function getUpdatePin()
    {
        return $this->updatePin;
    }

}





        
 


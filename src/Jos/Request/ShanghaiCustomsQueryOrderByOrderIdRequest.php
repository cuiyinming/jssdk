<?php


namespace Jos\Request;

use Jos\RequestCheckUtil;

class ShanghaiCustomsQueryOrderByOrderIdRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.shanghai.customs.queryOrderByOrderId";
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
        $this->$key = $value;
    }

    private $orderId;

    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        $this->apiParas["orderId"] = $orderId;
    }

    public function getOrderId()
    {
        return $this->orderId;
    }

}





        
 


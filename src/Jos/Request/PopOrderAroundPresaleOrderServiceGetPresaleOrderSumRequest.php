<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PopOrderAroundPresaleOrderServiceGetPresaleOrderSumRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.order.around.PresaleOrderService.getPresaleOrderSum";
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

    private $skuId;

    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
    }

    private $userPin;

    public function setUserPin($userPin)
    {
        $this->userPin             = $userPin;
        $this->apiParas["userPin"] = $userPin;
    }

    public function getUserPin()
    {
        return $this->userPin;
    }

    private $startDate;

    public function setStartDate($startDate)
    {
        $this->startDate             = $startDate;
        $this->apiParas["startDate"] = $startDate;
    }

    public function getStartDate()
    {
        return $this->startDate;
    }

    private $endDate;

    public function setEndDate($endDate)
    {
        $this->endDate             = $endDate;
        $this->apiParas["endDate"] = $endDate;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    private $orderStatusItem;

    public function setOrderStatusItem($orderStatusItem)
    {
        $this->orderStatusItem             = $orderStatusItem;
        $this->apiParas["orderStatusItem"] = $orderStatusItem;
    }

    public function getOrderStatusItem()
    {
        return $this->orderStatusItem;
    }
}





        
 


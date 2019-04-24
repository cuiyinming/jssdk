<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PurchaseOrderStockOutRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.purchase.order.stock.out";
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

    private $purchaseId;

    public function setPurchaseId($purchaseId)
    {
        $this->purchaseId             = $purchaseId;
        $this->apiParas["purchaseId"] = $purchaseId;
    }

    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

    private $shipmentId;

    public function setShipmentId($shipmentId)
    {
        $this->shipmentId             = $shipmentId;
        $this->apiParas["shipmentId"] = $shipmentId;
    }

    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    private $shipmentNo;

    public function setShipmentNo($shipmentNo)
    {
        $this->shipmentNo             = $shipmentNo;
        $this->apiParas["shipmentNo"] = $shipmentNo;
    }

    public function getShipmentNo()
    {
        return $this->shipmentNo;
    }

    private $tradeNo;

    public function setTradeNo($tradeNo)
    {
        $this->tradeNo             = $tradeNo;
        $this->apiParas["tradeNo"] = $tradeNo;
    }

    public function getTradeNo()
    {
        return $this->tradeNo;
    }

}





        
 


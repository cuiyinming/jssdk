<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class CustomsStorageAndShipRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.customsStorageAndShip";
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

    private $orderType;

    public function setOrderType($orderType)
    {
        $this->orderType             = $orderType;
        $this->apiParas["orderType"] = $orderType;
    }

    public function getOrderType()
    {
        return $this->orderType;
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

    private $companyId;

    public function setCompanyId($companyId)
    {
        $this->companyId             = $companyId;
        $this->apiParas["companyId"] = $companyId;
    }

    public function getCompanyId()
    {
        return $this->companyId;
    }

    private $clientType;

    public function setClientType($clientType)
    {
        $this->clientType             = $clientType;
        $this->apiParas["clientType"] = $clientType;
    }

    public function getClientType()
    {
        return $this->clientType;
    }

    private $logiNo;

    public function setLogiNo($logiNo)
    {
        $this->logiNo             = $logiNo;
        $this->apiParas["logiNo"] = $logiNo;
    }

    public function getLogiNo()
    {
        return $this->logiNo;
    }

    private $logisticsCompanies;

    public function setLogisticsCompanies($logisticsCompanies)
    {
        $this->logisticsCompanies             = $logisticsCompanies;
        $this->apiParas["logisticsCompanies"] = $logisticsCompanies;
    }

    public function getLogisticsCompanies()
    {
        return $this->logisticsCompanies;
    }

}





        
 


<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PopCustomsCenterStorageJsfServiceCommonStorageJosTokenRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.customs.center.StorageJsfService.commonStorageJosToken";
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





        
 


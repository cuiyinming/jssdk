<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class EclpSphBindDeliveryNoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.sph.bindDeliveryNo";
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

    private $sourceId;

    public function setSourceId($sourceId)
    {
        $this->sourceId             = $sourceId;
        $this->apiParas["sourceId"] = $sourceId;
    }

    public function getSourceId()
    {
        return $this->sourceId;
    }

    private $deliveryCompany;

    public function setDeliveryCompany($deliveryCompany)
    {
        $this->deliveryCompany             = $deliveryCompany;
        $this->apiParas["deliveryCompany"] = $deliveryCompany;
    }

    public function getDeliveryCompany()
    {
        return $this->deliveryCompany;
    }

    private $deliveryNo;

    public function setDeliveryNo($deliveryNo)
    {
        $this->deliveryNo             = $deliveryNo;
        $this->apiParas["deliveryNo"] = $deliveryNo;
    }

    public function getDeliveryNo()
    {
        return $this->deliveryNo;
    }

}





        
 


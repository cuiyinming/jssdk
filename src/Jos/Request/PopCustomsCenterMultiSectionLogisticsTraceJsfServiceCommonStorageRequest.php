<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PopCustomsCenterMultiSectionLogisticsTraceJsfServiceCommonStorageRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.customs.center.multiSectionLogisticsTraceJsfService.commonStorage";
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

    private $logisticsCode;

    public function setLogisticsCode($logisticsCode)
    {
        $this->logisticsCode             = $logisticsCode;
        $this->apiParas["logisticsCode"] = $logisticsCode;
    }

    public function getLogisticsCode()
    {
        return $this->logisticsCode;
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

    private $waybill;

    public function setWaybill($waybill)
    {
        $this->waybill             = $waybill;
        $this->apiParas["waybill"] = $waybill;
    }

    public function getWaybill()
    {
        return $this->waybill;
    }

    private $traceType;

    public function setTraceType($traceType)
    {
        $this->traceType             = $traceType;
        $this->apiParas["traceType"] = $traceType;
    }

    public function getTraceType()
    {
        return $this->traceType;
    }

    private $operateType;

    public function setOperateType($operateType)
    {
        $this->operateType             = $operateType;
        $this->apiParas["operateType"] = $operateType;
    }

    public function getOperateType()
    {
        return $this->operateType;
    }

}





        
 


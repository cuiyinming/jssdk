<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class Vc3MssJosSearchPendingFlowRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc3.mss.jos.searchPendingFlow";
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

    private $startTimeStr;

    public function setStartTimeStr($startTimeStr)
    {
        $this->startTimeStr             = $startTimeStr;
        $this->apiParas["startTimeStr"] = $startTimeStr;
    }

    public function getStartTimeStr()
    {
        return $this->startTimeStr;
    }

    private $endTimeStr;

    public function setEndTimeStr($endTimeStr)
    {
        $this->endTimeStr             = $endTimeStr;
        $this->apiParas["endTimeStr"] = $endTimeStr;
    }

    public function getEndTimeStr()
    {
        return $this->endTimeStr;
    }

    private $currentPage;

    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"] = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
    }

    private $pageSize;

    public function setPageSize($pageSize)
    {
        $this->pageSize             = $pageSize;
        $this->apiParas["pageSize"] = $pageSize;
    }

    public function getPageSize()
    {
        return $this->pageSize;
    }

}





        
 


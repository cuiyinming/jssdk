<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class SamOrderSearchRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sam.order.search";
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

    private $pageStart;

    public function setPageStart($pageStart)
    {
        $this->pageStart             = $pageStart;
        $this->apiParas["pageStart"] = $pageStart;
    }

    public function getPageStart()
    {
        return $this->pageStart;
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





        
 


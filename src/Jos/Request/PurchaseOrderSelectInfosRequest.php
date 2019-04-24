<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PurchaseOrderSelectInfosRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.purchase.order.select.infos";
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

    private $orderStates;

    public function setOrderStates($orderStates)
    {
        $this->orderStates             = $orderStates;
        $this->apiParas["orderStates"] = $orderStates;
    }

    public function getOrderStates()
    {
        return $this->orderStates;
    }

    private $pageNo;

    public function setPageNo($pageNo)
    {
        $this->pageNo             = $pageNo;
        $this->apiParas["pageNo"] = $pageNo;
    }

    public function getPageNo()
    {
        return $this->pageNo;
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





        
 


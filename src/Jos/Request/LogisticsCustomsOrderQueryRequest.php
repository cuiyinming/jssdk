<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class LogisticsCustomsOrderQueryRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.logistics.customs.order.query";
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

    private $authCode;

    public function setAuthCode($authCode)
    {
        $this->authCode             = $authCode;
        $this->apiParas["authCode"] = $authCode;
    }

    public function getAuthCode()
    {
        return $this->authCode;
    }

    private $pageNum;

    public function setPageNum($pageNum)
    {
        $this->pageNum             = $pageNum;
        $this->apiParas["pageNum"] = $pageNum;
    }

    public function getPageNum()
    {
        return $this->pageNum;
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

    private $startTime;

    public function setStartTime($startTime)
    {
        $this->startTime             = $startTime;
        $this->apiParas["startTime"] = $startTime;
    }

    public function getStartTime()
    {
        return $this->startTime;
    }

    private $endTime;

    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

}





        
 


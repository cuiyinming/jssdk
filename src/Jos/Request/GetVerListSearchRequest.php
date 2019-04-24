<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GetVerListSearchRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getVerList.search";
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

    private $appType;

    public function setAppType($appType)
    {
        $this->appType             = $appType;
        $this->apiParas["appType"] = $appType;
    }

    public function getAppType()
    {
        return $this->appType;
    }

    private $appUserId;

    public function setAppUserId($appUserId)
    {
        $this->appUserId             = $appUserId;
        $this->apiParas["appUserId"] = $appUserId;
    }

    public function getAppUserId()
    {
        return $this->appUserId;
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

}





        
 


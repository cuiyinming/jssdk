<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class ZgbOrderRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.zgb.order";
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

    private $encryptPin;

    public function setEncryptPin($encryptPin)
    {
        $this->encryptPin             = $encryptPin;
        $this->apiParas["encryptPin"] = $encryptPin;
    }

    public function getEncryptPin()
    {
        return $this->encryptPin;
    }

    private $authorizationKey;

    public function setAuthorizationKey($authorizationKey)
    {
        $this->authorizationKey             = $authorizationKey;
        $this->apiParas["authorizationKey"] = $authorizationKey;
    }

    public function getAuthorizationKey()
    {
        return $this->authorizationKey;
    }

    private $page;

    public function setPage($page)
    {
        $this->page             = $page;
        $this->apiParas["page"] = $page;
    }

    public function getPage()
    {
        return $this->page;
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

    private $orderStatus;

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus             = $orderStatus;
        $this->apiParas["orderStatus"] = $orderStatus;
    }

    public function getOrderStatus()
    {
        return $this->orderStatus;
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

}





        
 


<?php

namespace Jos\Request;

use Jos\RequestCheckUtil;


class VenderShopcategoryAddShopCategoryRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.shopcategory.addShopCategory";
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
        $this->$key = $value;
    }

    private $name;

    public function setName($name)
    {
        $this->name = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    private $parentCid;

    public function setParentCid($parentCid)
    {
        $this->parentCid = $parentCid;
        $this->apiParas["parent_cid"] = $parentCid;
    }

    public function getParentCid()
    {
        return $this->parentCid;
    }

    private $isHomeShow;

    public function setIsHomeShow($isHomeShow)
    {
        $this->isHomeShow = $isHomeShow;
        $this->apiParas["is_home_show"] = $isHomeShow;
    }

    public function getIsHomeShow()
    {
        return $this->isHomeShow;
    }

    private $isOpen;

    public function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
        $this->apiParas["is_open"] = $isOpen;
    }

    public function getIsOpen()
    {
        return $this->isOpen;
    }

    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo = $orderNo;
        $this->apiParas["order_no"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

}





        
 


<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class VenderShopcategoryUpdateShopCategoryRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.shopcategory.updateShopCategory";
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

    private $cid;

    public function setCid($cid)
    {
        $this->cid             = $cid;
        $this->apiParas["cid"] = $cid;
    }

    public function getCid()
    {
        return $this->cid;
    }

    private $name;

    public function setName($name)
    {
        $this->name             = $name;
        $this->apiParas["name"] = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    private $isHomeShow;

    public function setIsHomeShow($isHomeShow)
    {
        $this->isHomeShow               = $isHomeShow;
        $this->apiParas["is_home_show"] = $isHomeShow;
    }

    public function getIsHomeShow()
    {
        return $this->isHomeShow;
    }

    private $isOpen;

    public function setIsOpen($isOpen)
    {
        $this->isOpen              = $isOpen;
        $this->apiParas["is_open"] = $isOpen;
    }

    public function getIsOpen()
    {
        return $this->isOpen;
    }

    private $orderNo;

    public function setOrderNo($orderNo)
    {
        $this->orderNo              = $orderNo;
        $this->apiParas["order_no"] = $orderNo;
    }

    public function getOrderNo()
    {
        return $this->orderNo;
    }

}





        
 


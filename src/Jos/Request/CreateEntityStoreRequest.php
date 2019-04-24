<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class CreateEntityStoreRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.createEntityStore";
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

    private $addCode;

    public function setAddCode($addCode)
    {
        $this->addCode             = $addCode;
        $this->apiParas["addCode"] = $addCode;
    }

    public function getAddCode()
    {
        return $this->addCode;
    }

    private $addCodeName;

    public function setAddCodeName($addCodeName)
    {
        $this->addCodeName             = $addCodeName;
        $this->apiParas["addCodeName"] = $addCodeName;
    }

    public function getAddCodeName()
    {
        return $this->addCodeName;
    }

    private $addName;

    public function setAddName($addName)
    {
        $this->addName             = $addName;
        $this->apiParas["addName"] = $addName;
    }

    public function getAddName()
    {
        return $this->addName;
    }

    private $coordinate;

    public function setCoordinate($coordinate)
    {
        $this->coordinate             = $coordinate;
        $this->apiParas["coordinate"] = $coordinate;
    }

    public function getCoordinate()
    {
        return $this->coordinate;
    }

    private $phone;

    public function setPhone($phone)
    {
        $this->phone             = $phone;
        $this->apiParas["phone"] = $phone;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    private $item;

    public function setItem($item)
    {
        $this->item             = $item;
        $this->apiParas["item"] = $item;
    }

    public function getItem()
    {
        return $this->item;
    }

    private $customerId;

    public function setCustomerId($customerId)
    {
        $this->customerId             = $customerId;
        $this->apiParas["customerId"] = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    private $address;

    public function setAddress($address)
    {
        $this->address             = $address;
        $this->apiParas["address"] = $address;
    }

    public function getAddress()
    {
        return $this->address;
    }

    private $businessHours;

    public function setBusinessHours($businessHours)
    {
        $this->businessHours             = $businessHours;
        $this->apiParas["businessHours"] = $businessHours;
    }

    public function getBusinessHours()
    {
        return $this->businessHours;
    }

    private $categoryName;

    public function setCategoryName($categoryName)
    {
        $this->categoryName             = $categoryName;
        $this->apiParas["categoryName"] = $categoryName;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    private $extendJson;

    public function setExtendJson($extendJson)
    {
        $this->extendJson             = $extendJson;
        $this->apiParas["extendJson"] = $extendJson;
    }

    public function getExtendJson()
    {
        return $this->extendJson;
    }

}





        
 


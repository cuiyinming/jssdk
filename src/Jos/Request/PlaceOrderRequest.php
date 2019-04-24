<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PlaceOrderRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.placeOrder";
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

    private $projectNo;

    public function setProjectNo($projectNo)
    {
        $this->projectNo             = $projectNo;
        $this->apiParas["projectNo"] = $projectNo;
    }

    public function getProjectNo()
    {
        return $this->projectNo;
    }

    private $sellerNo;

    public function setSellerNo($sellerNo)
    {
        $this->sellerNo             = $sellerNo;
        $this->apiParas["sellerNo"] = $sellerNo;
    }

    public function getSellerNo()
    {
        return $this->sellerNo;
    }

    private $siteNo;

    public function setSiteNo($siteNo)
    {
        $this->siteNo             = $siteNo;
        $this->apiParas["siteNo"] = $siteNo;
    }

    public function getSiteNo()
    {
        return $this->siteNo;
    }

    private $offLineOrder;

    public function setOffLineOrder($offLineOrder)
    {
        $this->offLineOrder             = $offLineOrder;
        $this->apiParas["offLineOrder"] = $offLineOrder;
    }

    public function getOffLineOrder()
    {
        return $this->offLineOrder;
    }

    private $saleId;

    public function setSaleId($saleId)
    {
        $this->saleId             = $saleId;
        $this->apiParas["saleId"] = $saleId;
    }

    public function getSaleId()
    {
        return $this->saleId;
    }

    private $saleName;

    public function setSaleName($saleName)
    {
        $this->saleName             = $saleName;
        $this->apiParas["saleName"] = $saleName;
    }

    public function getSaleName()
    {
        return $this->saleName;
    }

    private $totalDiscount;

    public function setTotalDiscount($totalDiscount)
    {
        $this->totalDiscount             = $totalDiscount;
        $this->apiParas["totalDiscount"] = $totalDiscount;
    }

    public function getTotalDiscount()
    {
        return $this->totalDiscount;
    }

    private $totalPrice;

    public function setTotalPrice($totalPrice)
    {
        $this->totalPrice             = $totalPrice;
        $this->apiParas["totalPrice"] = $totalPrice;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }

    private $totalPriceValue;

    public function setTotalPriceValue($totalPriceValue)
    {
        $this->totalPriceValue             = $totalPriceValue;
        $this->apiParas["totalPriceValue"] = $totalPriceValue;
    }

    public function getTotalPriceValue()
    {
        return $this->totalPriceValue;
    }

    private $cashPayWay;

    public function setCashPayWay($cashPayWay)
    {
        $this->cashPayWay             = $cashPayWay;
        $this->apiParas["cashPayWay"] = $cashPayWay;
    }

    public function getCashPayWay()
    {
        return $this->cashPayWay;
    }

    private $customName;

    public function setCustomName($customName)
    {
        $this->customName             = $customName;
        $this->apiParas["customName"] = $customName;
    }

    public function getCustomName()
    {
        return $this->customName;
    }

    private $customTel;

    public function setCustomTel($customTel)
    {
        $this->customTel             = $customTel;
        $this->apiParas["customTel"] = $customTel;
    }

    public function getCustomTel()
    {
        return $this->customTel;
    }

    private $customRemark;

    public function setCustomRemark($customRemark)
    {
        $this->customRemark             = $customRemark;
        $this->apiParas["customRemark"] = $customRemark;
    }

    public function getCustomRemark()
    {
        return $this->customRemark;
    }

    private $cartGoodsInfoList;

    public function setCartGoodsInfoList($cartGoodsInfoList)
    {
        $this->cartGoodsInfoList             = $cartGoodsInfoList;
        $this->apiParas["cartGoodsInfoList"] = $cartGoodsInfoList;
    }

    public function getCartGoodsInfoList()
    {
        return $this->cartGoodsInfoList;
    }

    private $goodsSeqsList;

    public function setGoodsSeqsList($goodsSeqsList)
    {
        $this->goodsSeqsList             = $goodsSeqsList;
        $this->apiParas["goodsSeqsList"] = $goodsSeqsList;
    }

    public function getGoodsSeqsList()
    {
        return $this->goodsSeqsList;
    }

    private $source;

    public function setSource($source)
    {
        $this->source             = $source;
        $this->apiParas["source"] = $source;
    }

    public function getSource()
    {
        return $this->source;
    }

}





        
 


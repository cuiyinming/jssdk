<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GetPictureListRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getPictureList";
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

    private $shopId;

    public function setShopId($shopId)
    {
        $this->shopId             = $shopId;
        $this->apiParas["shopId"] = $shopId;
    }

    public function getShopId()
    {
        return $this->shopId;
    }

    private $skuId;

    public function setSkuId($skuId)
    {
        $this->skuId             = $skuId;
        $this->apiParas["skuId"] = $skuId;
    }

    public function getSkuId()
    {
        return $this->skuId;
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





        
 


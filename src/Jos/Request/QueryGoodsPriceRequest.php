<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class QueryGoodsPriceRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.queryGoodsPrice";
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

    private $v1;

    public function setV1($v1)
    {
        $this->v1             = $v1;
        $this->apiParas["v1"] = $v1;
    }

    public function getV1()
    {
        return $this->v1;
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





        
 


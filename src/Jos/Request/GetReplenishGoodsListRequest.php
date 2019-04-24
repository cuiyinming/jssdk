<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GetReplenishGoodsListRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.getReplenishGoodsList";
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

    private $currentPage;

    public function setCurrentPage($currentPage)
    {
        $this->currentPage             = $currentPage;
        $this->apiParas["currentPage"] = $currentPage;
    }

    public function getCurrentPage()
    {
        return $this->currentPage;
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





        
 


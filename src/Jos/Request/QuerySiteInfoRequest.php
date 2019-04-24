<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class QuerySiteInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.querySiteInfo";
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





        
 


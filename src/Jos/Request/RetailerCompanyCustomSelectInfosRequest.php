<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class RetailerCompanyCustomSelectInfosRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.retailer.company.custom.select.infos";
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

    private $sellerId;

    public function setSellerId($sellerId)
    {
        $this->sellerId             = $sellerId;
        $this->apiParas["sellerId"] = $sellerId;
    }

    public function getSellerId()
    {
        return $this->sellerId;
    }

}





        
 


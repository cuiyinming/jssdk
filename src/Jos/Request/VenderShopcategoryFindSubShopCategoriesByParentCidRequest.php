<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class VenderShopcategoryFindSubShopCategoriesByParentCidRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vender.shopcategory.findSubShopCategoriesByParentCid";
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

    private $parentCid;

    public function setParentCid($parentCid)
    {
        $this->parentCid              = $parentCid;
        $this->apiParas["parent_cid"] = $parentCid;
    }

    public function getParentCid()
    {
        return $this->parentCid;
    }

}





        
 


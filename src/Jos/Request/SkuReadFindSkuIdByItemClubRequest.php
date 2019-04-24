<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class SkuReadFindSkuIdByItemClubRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.sku.read.findSkuIdByItemClub";
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

    private $itemId;

    public function setItemId($itemId)
    {
        $this->itemId             = $itemId;
        $this->apiParas["itemId"] = $itemId;
    }

    public function getItemId()
    {
        return $this->itemId;
    }

    private $clubId;

    public function setClubId($clubId)
    {
        $this->clubId             = $clubId;
        $this->apiParas["clubId"] = $clubId;
    }

    public function getClubId()
    {
        return $this->clubId;
    }

}





        
 


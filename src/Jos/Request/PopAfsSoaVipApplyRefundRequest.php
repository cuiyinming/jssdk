<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PopAfsSoaVipApplyRefundRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.pop.afs.soa.vipApplyRefund";
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

    private $ids;

    public function setIds($ids)
    {
        $this->ids             = $ids;
        $this->apiParas["ids"] = $ids;
    }

    public function getIds()
    {
        return $this->ids;
    }

    private $venderID;

    public function setVenderID($venderID)
    {
        $this->venderID             = $venderID;
        $this->apiParas["venderID"] = $venderID;
    }

    public function getVenderID()
    {
        return $this->venderID;
    }

}





        
 


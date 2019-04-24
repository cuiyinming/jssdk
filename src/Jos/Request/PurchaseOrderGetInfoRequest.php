<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class PurchaseOrderGetInfoRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.purchase.order.get.info";
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

    private $purchaseId;

    public function setPurchaseId($purchaseId)
    {
        $this->purchaseId             = $purchaseId;
        $this->apiParas["purchaseId"] = $purchaseId;
    }

    public function getPurchaseId()
    {
        return $this->purchaseId;
    }

}





        
 


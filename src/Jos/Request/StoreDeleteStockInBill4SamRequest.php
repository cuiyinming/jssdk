<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class StoreDeleteStockInBill4SamRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.store.deleteStockInBill4Sam";
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

    private $samBillId;

    public function setSamBillId($samBillId)
    {
        $this->samBillId               = $samBillId;
        $this->apiParas["sam_bill_Id"] = $samBillId;
    }

    public function getSamBillId()
    {
        return $this->samBillId;
    }

    private $stockInBillId;

    public function setStockInBillId($stockInBillId)
    {
        $this->stockInBillId                = $stockInBillId;
        $this->apiParas["stock_in_bill_id"] = $stockInBillId;
    }

    public function getStockInBillId()
    {
        return $this->stockInBillId;
    }

}





        
 


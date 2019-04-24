<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class DeleteStoresByIdRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.deleteStoresById";
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

    private $storeId;

    public function setStoreId($storeId)
    {
        $this->storeId             = $storeId;
        $this->apiParas["storeId"] = $storeId;
    }

    public function getStoreId()
    {
        return $this->storeId;
    }

}





        
 


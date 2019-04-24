<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GuangzhouQueryWMSStockRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.guangzhou.queryWMSStock";
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

    private $customerId;

    public function setCustomerId($customerId)
    {
        $this->customerId             = $customerId;
        $this->apiParas["customerId"] = $customerId;
    }

    public function getCustomerId()
    {
        return $this->customerId;
    }

    private $warehouseId;

    public function setWarehouseId($warehouseId)
    {
        $this->warehouseId             = $warehouseId;
        $this->apiParas["warehouseId"] = $warehouseId;
    }

    public function getWarehouseId()
    {
        return $this->warehouseId;
    }

    private $goodIds;

    public function setGoodIds($goodIds)
    {
        $this->goodIds             = $goodIds;
        $this->apiParas["goodIds"] = $goodIds;
    }

    public function getGoodIds()
    {
        return $this->goodIds;
    }

    private $OrgNo;

    public function setOrgNo($OrgNo)
    {
        $this->OrgNo             = $OrgNo;
        $this->apiParas["OrgNo"] = $OrgNo;
    }

    public function getOrgNo()
    {
        return $this->OrgNo;
    }

    private $DistributionNo;

    public function setDistributionNo($DistributionNo)
    {
        $this->DistributionNo             = $DistributionNo;
        $this->apiParas["DistributionNo"] = $DistributionNo;
    }

    public function getDistributionNo()
    {
        return $this->DistributionNo;
    }

}





        
 


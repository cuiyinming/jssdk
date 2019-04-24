<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class EclpSphQueryServiceOrderListRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.eclp.sph.queryServiceOrderList";
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

    private $timeType;

    public function setTimeType($timeType)
    {
        $this->timeType             = $timeType;
        $this->apiParas["timeType"] = $timeType;
    }

    public function getTimeType()
    {
        return $this->timeType;
    }

    private $beginTime;

    public function setBeginTime($beginTime)
    {
        $this->beginTime             = $beginTime;
        $this->apiParas["beginTime"] = $beginTime;
    }

    public function getBeginTime()
    {
        return $this->beginTime;
    }

    private $endTime;

    public function setEndTime($endTime)
    {
        $this->endTime             = $endTime;
        $this->apiParas["endTime"] = $endTime;
    }

    public function getEndTime()
    {
        return $this->endTime;
    }

    private $status;

    public function setStatus($status)
    {
        $this->status             = $status;
        $this->apiParas["status"] = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    private $serviceId;

    public function setServiceId($serviceId)
    {
        $this->serviceId             = $serviceId;
        $this->apiParas["serviceId"] = $serviceId;
    }

    public function getServiceId()
    {
        return $this->serviceId;
    }

    private $deptNo;

    public function setDeptNo($deptNo)
    {
        $this->deptNo             = $deptNo;
        $this->apiParas["deptNo"] = $deptNo;
    }

    public function getDeptNo()
    {
        return $this->deptNo;
    }

}





        
 


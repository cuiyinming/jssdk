<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GuangzhouPurchaseDeclareConfirmRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.guangzhou.purchaseDeclareConfirm";
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

    private $entInboundId;

    public function setEntInboundId($entInboundId)
    {
        $this->entInboundId             = $entInboundId;
        $this->apiParas["entInboundId"] = $entInboundId;
    }

    public function getEntInboundId()
    {
        return $this->entInboundId;
    }

    private $preEntInboundId;

    public function setPreEntInboundId($preEntInboundId)
    {
        $this->preEntInboundId             = $preEntInboundId;
        $this->apiParas["preEntInboundId"] = $preEntInboundId;
    }

    public function getPreEntInboundId()
    {
        return $this->preEntInboundId;
    }

    private $corrDocNo;

    public function setCorrDocNo($corrDocNo)
    {
        $this->corrDocNo             = $corrDocNo;
        $this->apiParas["corrDocNo"] = $corrDocNo;
    }

    public function getCorrDocNo()
    {
        return $this->corrDocNo;
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

    private $confirmTime;

    public function setConfirmTime($confirmTime)
    {
        $this->confirmTime             = $confirmTime;
        $this->apiParas["confirmTime"] = $confirmTime;
    }

    public function getConfirmTime()
    {
        return $this->confirmTime;
    }

    private $notes;

    public function setNotes($notes)
    {
        $this->notes             = $notes;
        $this->apiParas["notes"] = $notes;
    }

    public function getNotes()
    {
        return $this->notes;
    }

}





        
 


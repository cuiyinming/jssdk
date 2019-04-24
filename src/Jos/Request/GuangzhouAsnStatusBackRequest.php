<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class GuangzhouAsnStatusBackRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.guangzhou.asnStatusBack";
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

    private $asnNo;

    public function setAsnNo($asnNo)
    {
        $this->asnNo             = $asnNo;
        $this->apiParas["asnNo"] = $asnNo;
    }

    public function getAsnNo()
    {
        return $this->asnNo;
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

    private $confirmationTime;

    public function setConfirmationTime($confirmationTime)
    {
        $this->confirmationTime             = $confirmationTime;
        $this->apiParas["confirmationTime"] = $confirmationTime;
    }

    public function getConfirmationTime()
    {
        return $this->confirmationTime;
    }

    private $custInboundno;

    public function setCustInboundno($custInboundno)
    {
        $this->custInboundno              = $custInboundno;
        $this->apiParas["cust_inboundno"] = $custInboundno;
    }

    public function getCustInboundno()
    {
        return $this->custInboundno;
    }

    private $icipInboundno;

    public function setIcipInboundno($icipInboundno)
    {
        $this->icipInboundno              = $icipInboundno;
        $this->apiParas["icip_inboundno"] = $icipInboundno;
    }

    public function getIcipInboundno()
    {
        return $this->icipInboundno;
    }

    private $blNo;

    public function setBlNo($blNo)
    {
        $this->blNo             = $blNo;
        $this->apiParas["blNo"] = $blNo;
    }

    public function getBlNo()
    {
        return $this->blNo;
    }

}





        
 


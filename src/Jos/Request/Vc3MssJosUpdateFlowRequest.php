<?php
namespace Jos\Request;
use Jos\RequestCheckUtil;

namespace Jos\Request;

use Jos\RequestCheckUtil;

class Vc3MssJosUpdateFlowRequest
{
    private $apiParas = array();

    public function getApiMethodName()
    {
        return "jingdong.vc3.mss.jos.updateFlow";
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

    private $customsId;

    public function setCustomsId($customsId)
    {
        $this->customsId             = $customsId;
        $this->apiParas["customsId"] = $customsId;
    }

    public function getCustomsId()
    {
        return $this->customsId;
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

    private $flowSign;

    public function setFlowSign($flowSign)
    {
        $this->flowSign             = $flowSign;
        $this->apiParas["flowSign"] = $flowSign;
    }

    public function getFlowSign()
    {
        return $this->flowSign;
    }

    private $upc;

    public function setUpc($upc)
    {
        $this->upc             = $upc;
        $this->apiParas["upc"] = $upc;
    }

    public function getUpc()
    {
        return $this->upc;
    }

    private $hs;

    public function setHs($hs)
    {
        $this->hs             = $hs;
        $this->apiParas["hs"] = $hs;
    }

    public function getHs()
    {
        return $this->hs;
    }

    private $chineseBrand;

    public function setChineseBrand($chineseBrand)
    {
        $this->chineseBrand             = $chineseBrand;
        $this->apiParas["chineseBrand"] = $chineseBrand;
    }

    public function getChineseBrand()
    {
        return $this->chineseBrand;
    }

    private $englishBrand;

    public function setEnglishBrand($englishBrand)
    {
        $this->englishBrand             = $englishBrand;
        $this->apiParas["englishBrand"] = $englishBrand;
    }

    public function getEnglishBrand()
    {
        return $this->englishBrand;
    }

    private $model;

    public function setModel($model)
    {
        $this->model             = $model;
        $this->apiParas["model"] = $model;
    }

    public function getModel()
    {
        return $this->model;
    }

    private $packSpecification;

    public function setPackSpecification($packSpecification)
    {
        $this->packSpecification             = $packSpecification;
        $this->apiParas["packSpecification"] = $packSpecification;
    }

    public function getPackSpecification()
    {
        return $this->packSpecification;
    }

    private $itemChineseName;

    public function setItemChineseName($itemChineseName)
    {
        $this->itemChineseName             = $itemChineseName;
        $this->apiParas["itemChineseName"] = $itemChineseName;
    }

    public function getItemChineseName()
    {
        return $this->itemChineseName;
    }

    private $itemEnglishName;

    public function setItemEnglishName($itemEnglishName)
    {
        $this->itemEnglishName             = $itemEnglishName;
        $this->apiParas["itemEnglishName"] = $itemEnglishName;
    }

    public function getItemEnglishName()
    {
        return $this->itemEnglishName;
    }

    private $declareAgreementUnit;

    public function setDeclareAgreementUnit($declareAgreementUnit)
    {
        $this->declareAgreementUnit             = $declareAgreementUnit;
        $this->apiParas["declareAgreementUnit"] = $declareAgreementUnit;
    }

    public function getDeclareAgreementUnit()
    {
        return $this->declareAgreementUnit;
    }

    private $maozhong;

    public function setMaozhong($maozhong)
    {
        $this->maozhong             = $maozhong;
        $this->apiParas["maozhong"] = $maozhong;
    }

    public function getMaozhong()
    {
        return $this->maozhong;
    }

    private $jingzhong;

    public function setJingzhong($jingzhong)
    {
        $this->jingzhong             = $jingzhong;
        $this->apiParas["jingzhong"] = $jingzhong;
    }

    public function getJingzhong()
    {
        return $this->jingzhong;
    }

    private $hgMeteringUnit;

    public function setHgMeteringUnit($hgMeteringUnit)
    {
        $this->hgMeteringUnit             = $hgMeteringUnit;
        $this->apiParas["hgMeteringUnit"] = $hgMeteringUnit;
    }

    public function getHgMeteringUnit()
    {
        return $this->hgMeteringUnit;
    }

    private $gjMeteringUnit;

    public function setGjMeteringUnit($gjMeteringUnit)
    {
        $this->gjMeteringUnit             = $gjMeteringUnit;
        $this->apiParas["gjMeteringUnit"] = $gjMeteringUnit;
    }

    public function getGjMeteringUnit()
    {
        return $this->gjMeteringUnit;
    }

    private $firstAmount;

    public function setFirstAmount($firstAmount)
    {
        $this->firstAmount             = $firstAmount;
        $this->apiParas["firstAmount"] = $firstAmount;
    }

    public function getFirstAmount()
    {
        return $this->firstAmount;
    }

    private $secondAmount;

    public function setSecondAmount($secondAmount)
    {
        $this->secondAmount             = $secondAmount;
        $this->apiParas["secondAmount"] = $secondAmount;
    }

    public function getSecondAmount()
    {
        return $this->secondAmount;
    }

    private $legalFirstUnit;

    public function setLegalFirstUnit($legalFirstUnit)
    {
        $this->legalFirstUnit             = $legalFirstUnit;
        $this->apiParas["legalFirstUnit"] = $legalFirstUnit;
    }

    public function getLegalFirstUnit()
    {
        return $this->legalFirstUnit;
    }

    private $legalSecondUnit;

    public function setLegalSecondUnit($legalSecondUnit)
    {
        $this->legalSecondUnit             = $legalSecondUnit;
        $this->apiParas["legalSecondUnit"] = $legalSecondUnit;
    }

    public function getLegalSecondUnit()
    {
        return $this->legalSecondUnit;
    }

    private $declareElement;

    public function setDeclareElement($declareElement)
    {
        $this->declareElement             = $declareElement;
        $this->apiParas["declareElement"] = $declareElement;
    }

    public function getDeclareElement()
    {
        return $this->declareElement;
    }

    private $packMode;

    public function setPackMode($packMode)
    {
        $this->packMode             = $packMode;
        $this->apiParas["packMode"] = $packMode;
    }

    public function getPackMode()
    {
        return $this->packMode;
    }

    private $component;

    public function setComponent($component)
    {
        $this->component             = $component;
        $this->apiParas["component"] = $component;
    }

    public function getComponent()
    {
        return $this->component;
    }

    private $use;

    public function setUse($use)
    {
        $this->use             = $use;
        $this->apiParas["use"] = $use;
    }

    public function getUse()
    {
        return $this->use;
    }

    private $function;

    public function setFunction($function)
    {
        $this->function             = $function;
        $this->apiParas["function"] = $function;
    }

    public function getFunction()
    {
        return $this->function;
    }

    private $productCompanyName;

    public function setProductCompanyName($productCompanyName)
    {
        $this->productCompanyName             = $productCompanyName;
        $this->apiParas["productCompanyName"] = $productCompanyName;
    }

    public function getProductCompanyName()
    {
        return $this->productCompanyName;
    }

    private $productCompanyAddress;

    public function setProductCompanyAddress($productCompanyAddress)
    {
        $this->productCompanyAddress             = $productCompanyAddress;
        $this->apiParas["productCompanyAddress"] = $productCompanyAddress;
    }

    public function getProductCompanyAddress()
    {
        return $this->productCompanyAddress;
    }

    private $hgOriginCountry;

    public function setHgOriginCountry($hgOriginCountry)
    {
        $this->hgOriginCountry             = $hgOriginCountry;
        $this->apiParas["hgOriginCountry"] = $hgOriginCountry;
    }

    public function getHgOriginCountry()
    {
        return $this->hgOriginCountry;
    }

    private $gjOriginCountry;

    public function setGjOriginCountry($gjOriginCountry)
    {
        $this->gjOriginCountry             = $gjOriginCountry;
        $this->apiParas["gjOriginCountry"] = $gjOriginCountry;
    }

    public function getGjOriginCountry()
    {
        return $this->gjOriginCountry;
    }

    private $putNo;

    public function setPutNo($putNo)
    {
        $this->putNo             = $putNo;
        $this->apiParas["putNo"] = $putNo;
    }

    public function getPutNo()
    {
        return $this->putNo;
    }

    private $registrationNo;

    public function setRegistrationNo($registrationNo)
    {
        $this->registrationNo             = $registrationNo;
        $this->apiParas["registrationNo"] = $registrationNo;
    }

    public function getRegistrationNo()
    {
        return $this->registrationNo;
    }

    private $inspectionNo;

    public function setInspectionNo($inspectionNo)
    {
        $this->inspectionNo             = $inspectionNo;
        $this->apiParas["inspectionNo"] = $inspectionNo;
    }

    public function getInspectionNo()
    {
        return $this->inspectionNo;
    }

    private $linePortNo;

    public function setLinePortNo($linePortNo)
    {
        $this->linePortNo             = $linePortNo;
        $this->apiParas["linePortNo"] = $linePortNo;
    }

    public function getLinePortNo()
    {
        return $this->linePortNo;
    }

    private $linePortRate;

    public function setLinePortRate($linePortRate)
    {
        $this->linePortRate             = $linePortRate;
        $this->apiParas["linePortRate"] = $linePortRate;
    }

    public function getLinePortRate()
    {
        return $this->linePortRate;
    }

    private $itemNo;

    public function setItemNo($itemNo)
    {
        $this->itemNo             = $itemNo;
        $this->apiParas["itemNo"] = $itemNo;
    }

    public function getItemNo()
    {
        return $this->itemNo;
    }

    private $ccCustomModel;

    public function setCcCustomModel($ccCustomModel)
    {
        $this->ccCustomModel             = $ccCustomModel;
        $this->apiParas["ccCustomModel"] = $ccCustomModel;
    }

    public function getCcCustomModel()
    {
        return $this->ccCustomModel;
    }

    private $ondedreabArea;

    public function setOndedreabArea($ondedreabArea)
    {
        $this->ondedreabArea             = $ondedreabArea;
        $this->apiParas["ondedreabArea"] = $ondedreabArea;
    }

    public function getOndedreabArea()
    {
        return $this->ondedreabArea;
    }

    private $consumptionVAT;

    public function setConsumptionVAT($consumptionVAT)
    {
        $this->consumptionVAT             = $consumptionVAT;
        $this->apiParas["consumptionVAT"] = $consumptionVAT;
    }

    public function getConsumptionVAT()
    {
        return $this->consumptionVAT;
    }

    private $vat;

    public function setVat($vat)
    {
        $this->vat             = $vat;
        $this->apiParas["vat"] = $vat;
    }

    public function getVat()
    {
        return $this->vat;
    }

    private $tariff;

    public function setTariff($tariff)
    {
        $this->tariff             = $tariff;
        $this->apiParas["tariff"] = $tariff;
    }

    public function getTariff()
    {
        return $this->tariff;
    }

    private $commond;

    public function setCommond($commond)
    {
        $this->commond             = $commond;
        $this->apiParas["commond"] = $commond;
    }

    public function getCommond()
    {
        return $this->commond;
    }

    private $opinion;

    public function setOpinion($opinion)
    {
        $this->opinion             = $opinion;
        $this->apiParas["opinion"] = $opinion;
    }

    public function getOpinion()
    {
        return $this->opinion;
    }

}





        
 


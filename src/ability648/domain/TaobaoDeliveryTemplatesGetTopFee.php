<?php
namespace Topsdk\Topapi\Ability648\Domain;

class TaobaoDeliveryTemplatesGetTopFee {

    /**
        可选值：post:平邮; cod:货到付款; ems:EMS; express:快递公司
     **/
    public $service_type;

    /**
        邮费子项涉及的地区,多个地区用逗号连接数量串;可以用taobao.areas.get接口获取.或者参考:http://www.stats.gov.cn/tjbz/xzqhdm/t20080215_402462675.htm 例 (110000,310000,320000,330000).就代表邮费子项涉 及(北京,上海,江苏,浙江)四个地区.填写时要注意对照地区代码值,如果填入错误地区代码,将会出现错误信息.
     **/
    public $destination;

    /**
        首费标准：当valuation(记价方式)为0时输入1-9999范围内的整数
     **/
    public $start_standard;

    /**
        首费：输入0.01-999.99（最多包含两位小数） 不能为空也不能为0
     **/
    public $start_fee;

    /**
        增费标准：当valuation(记价方式)为0时输入1-9999范围内的整数
     **/
    public $add_standard;

    /**
        增费：输入0.00-999.99（最多包含两位小数） 不能为空不输入运费时必须输入0
     **/
    public $add_fee;


    public function getServiceType() : string{
        return $this->service_type;
    }

    public function setServiceType(string $serviceType){
        $this->service_type = $serviceType;
    }

    public function getDestination() : string{
        return $this->destination;
    }

    public function setDestination(string $destination){
        $this->destination = $destination;
    }

    public function getStartStandard() : string{
        return $this->start_standard;
    }

    public function setStartStandard(string $startStandard){
        $this->start_standard = $startStandard;
    }

    public function getStartFee() : string{
        return $this->start_fee;
    }

    public function setStartFee(string $startFee){
        $this->start_fee = $startFee;
    }

    public function getAddStandard() : string{
        return $this->add_standard;
    }

    public function setAddStandard(string $addStandard){
        $this->add_standard = $addStandard;
    }

    public function getAddFee() : string{
        return $this->add_fee;
    }

    public function setAddFee(string $addFee){
        $this->add_fee = $addFee;
    }


}


<?php
namespace Topsdk\Topapi\Defaultability\Domain;

class AlibabaAscpLogisticsConsignModifyResultDTO {

    /**
        执行结果
     **/
    public $success;


    public function getSuccess() : bool{
        return $this->success;
    }

    public function setSuccess(bool $success){
        $this->success = $success;
    }


}


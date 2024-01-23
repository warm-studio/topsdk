<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkMarketingExpirePromotionCreateExpirePromotionBo;

class AlibabaWdkMarketingExpirePromotionCreateRequest {

    /**
        创建短保优惠
     **/
    private $param0;


    public function getParam0() : AlibabaWdkMarketingExpirePromotionCreateExpirePromotionBo{
        return $this->param0;
    }

    public function setParam0(AlibabaWdkMarketingExpirePromotionCreateExpirePromotionBo $param0){
        $this->param0 = $param0;
    }


    public function getApiName() : string {
        return "alibaba.wdk.marketing.expire.promotion.create";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->param0)) {
            $requestParam["param0"] = TopUtil::convertStruct($this->param0);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


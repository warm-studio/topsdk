<?php
namespace Topsdk\Topapi\Ability571\Request;
use Topsdk\Topapi\TopUtil;
use Topsdk\Topapi\Ability571\Domain\AlibabaWdkCouponSkuRemoveCouponTemplateItemRequest;

class AlibabaWdkCouponSkuRemoveRequest {

    /**
        请求
     **/
    private $paramCouponTemplateItemRequest;


    public function getParamCouponTemplateItemRequest() : AlibabaWdkCouponSkuRemoveCouponTemplateItemRequest{
        return $this->paramCouponTemplateItemRequest;
    }

    public function setParamCouponTemplateItemRequest(AlibabaWdkCouponSkuRemoveCouponTemplateItemRequest $paramCouponTemplateItemRequest){
        $this->paramCouponTemplateItemRequest = $paramCouponTemplateItemRequest;
    }


    public function getApiName() : string {
        return "alibaba.wdk.coupon.sku.remove";
    }

    public function toMap() : array{
        $requestParam = array();
        if (!TopUtil::checkEmpty($this->paramCouponTemplateItemRequest)) {
            $requestParam["param_coupon_template_item_request"] = TopUtil::convertStruct($this->paramCouponTemplateItemRequest);
        }

        return $requestParam;
    }

    public function toFileParamMap() : array{
        $fileParam = array();
        return $fileParam;
    }

}


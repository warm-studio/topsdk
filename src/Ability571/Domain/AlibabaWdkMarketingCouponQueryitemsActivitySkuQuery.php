<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingCouponQueryitemsActivitySkuQuery {

    /**
        五道口活动id
     **/
    public $activity_id;

    /**
        分页参数
     **/
    public $page;

    /**
        商家活动id
     **/
    public $out_act_id;

    /**
        需要查询的商品skuCodes
     **/
    public $sku_codes;


    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getPage() : AlibabaWdkMarketingCouponQueryitemsBasePageQuery{
        return $this->page;
    }

    public function setPage(AlibabaWdkMarketingCouponQueryitemsBasePageQuery $page){
        $this->page = $page;
    }

    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
    }

    public function getSkuCodes() : array{
        return $this->sku_codes;
    }

    public function setSkuCodes(array $skuCodes){
        $this->sku_codes = $skuCodes;
    }


}

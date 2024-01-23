<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingCouponSendmaCommonActivityParam {

    /**
        五道口优惠券活动id
     **/
    public $activity_id;

    /**
        商家优惠券活动id
     **/
    public $out_act_id;


    public function getActivityId() : int{
        return $this->activity_id;
    }

    public function setActivityId(int $activityId){
        $this->activity_id = $activityId;
    }

    public function getOutActId() : string{
        return $this->out_act_id;
    }

    public function setOutActId(string $outActId){
        $this->out_act_id = $outActId;
    }


}


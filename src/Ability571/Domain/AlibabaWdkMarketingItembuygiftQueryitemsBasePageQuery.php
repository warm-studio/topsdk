<?php
namespace Topsdk\Topapi\Ability571\Domain;

class AlibabaWdkMarketingItembuygiftQueryitemsBasePageQuery {

    /**
        分页大小
     **/
    public $page_size;

    /**
        当前分页，从1开始
     **/
    public $current;


    public function getPageSize() : int{
        return $this->page_size;
    }

    public function setPageSize(int $pageSize){
        $this->page_size = $pageSize;
    }

    public function getCurrent() : int{
        return $this->current;
    }

    public function setCurrent(int $current){
        $this->current = $current;
    }


}


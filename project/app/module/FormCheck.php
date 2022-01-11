<?php

namespace Module;

/**
 * クラス FormCheck
 * @package Module
 * 
 * @author koki-sys
 */
class FormCheck
{
    /**
     * タイトルが入っているかどうかのチェック
     *
     * @author koki-sys
     * 
     * @param $title
     * @return boolean
     */
    public function titleExists(?string $title)
    {
        if(isset($title)){
            return true;
        }
        return false;
    }

    /**
     * メインタグが入っているかどうかのチェック
     * 
     * @author koki-sys
     * 
     * @param $mtag
     * @return boolean
     */
    public function mtagExists(?string $mtag)
    {
        if(isset($mtag)){
            return true;
        }
        return false;
    }
}

<?php
class Helper {
    public static function urlAsset($type){
    	if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        $url = $protocol . "://" . $_SERVER['HTTP_HOST']. '/'.'Assets/'.$type."/" ;

		return $url;
	}
    public static function getUrlPage($type){
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }
        else{
            $protocol = 'http';
        }
        return $protocol . "://" . $_SERVER['HTTP_HOST'].'/'.$type ;
    }


}

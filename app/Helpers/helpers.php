<?php

if(! function_exists('setActive')) {
    
    /**
     * @param mixed $path
     * 
     * @return [type]
     */
    function setActive($path) 
    {
        return Request::is($path . '*') ? 'active' : '';
    }
}

if(! function_exists('TanggalID')) {
    /**
     * @param mixed $tanggal
     * 
     * @return [type]
     */
    function TanggalID($tanggal) {
        $value = Carbon\Carbon::parse($tanggal);
        $parse = $value->locale('id');
        return $parse->translatedFormat('l, d F Y');
    }
}
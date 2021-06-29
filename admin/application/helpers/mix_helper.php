<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/** Telefon nomerni formatlab chiqarish uchun */
if (! function_exists('phone_format_helper') )
{
    function phone_format_helper($phone)
    {
        if ($phone){
            $reslut = mb_substr($phone, 0, 4)." (".mb_substr($phone, 4, 2).") ".mb_substr($phone, 6, 3)."-".mb_substr($phone, 9, 2)."-".mb_substr($phone, -2);
            return $reslut;
        }
        else{
            return false;
        }
    }
}
// ------------------------------------------------------------------------

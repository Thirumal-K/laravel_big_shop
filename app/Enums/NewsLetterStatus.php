<?php

namespace App\Enums;

enum NewsLetterStatus: string{
    case SUBSCRIBE ='SUBSCRIBE';
    case UNSUBSCRIBE ='UNSUBSCRIBE';

    public static function getValue():array
    {
        return array_column(NewsLetterStatus::cases(),'value');
    }
    public static function getKeyValue():array
    {
        return array_column(NewsLetterStatus::cases(), 'value','key');
    }

}
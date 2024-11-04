<?php

 namespace App\Enums;


 enum TagStatus: string{
    case PUBLISH ='PUBLISH';
    case DRAFT ='DRAFT';
    case PENDING = 'PENDING';

    public static function getValue(): array
    {
        return array_column(TagStatus::case(),'value');
    }
    public static function getKeyValue(): array
    {
        return array_column(TagStatus::cases(),'value','key');
    }
 }
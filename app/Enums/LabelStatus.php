<?php
namespace app\Enums;

enum LabelStatus:string{

    case PUBLISH = 'PUBLISH';
    case DRAFT = 'DRAFT';
    case PENDING ='PENDING';

    public static function getValue(): array
    {
        return array_column(LabelStatus::cases(),'value');
    }
    public static function getKeyValue(): array
    {
        return array_column(LableStatus::cases(),'value','key');
    }

}
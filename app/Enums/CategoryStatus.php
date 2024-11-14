<?php 

namespace App\Enums;

enum CategoryStatus: string{
    case PUBLIC = 'PUBLIC';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';

     public static function getValue(): array
     {
        return array_column(CategoryStatus::cases(),'value');
     }
     public static function getKeyValue(): array
     {
        return array_column(CategoryStatus::cases(),'Value','Key');
     }

}

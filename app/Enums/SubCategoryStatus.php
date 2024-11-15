<?php

namespace App\Enums;
  

enum SubCategoryStatus: string{
    case PUBLISH = 'PUBLISH';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';

    public static function getValue(): array 
    {
      return array_column(SubCategoryStatus::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(SubCategoryStatus::cases(),'value','key');
    }
}
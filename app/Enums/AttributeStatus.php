<?php

namespace App\Enums;
  

enum AttributeStatus: string{
    case PUBLISH = 'PUBLISH';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';

    public static function getValue(): array 
    {
      return array_column(AttributeStatus::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(AttributeStatus::cases(),'value','key');
    }
}
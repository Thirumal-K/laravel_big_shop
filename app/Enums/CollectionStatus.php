<?php

namespace App\Enums;
  

enum CollectionStatus: string{
    case PUBLISH = 'PUBLISH';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';

    public static function getValue(): array 
    {
      return array_column(CollectionStatus::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(CollectionStatus::cases(),'value','key');
    }
}
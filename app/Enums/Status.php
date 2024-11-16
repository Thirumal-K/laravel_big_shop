<?php

namespace App\Enums;
  

enum Status: string{
    case PUBLISH = 'PUBLISH';
    case DRAFT = 'DRAFT';
    case PENDING = 'PENDING';

    public static function getValue(): array 
    {
      return array_column(Status::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(Status::cases(),'value','key');
    }
}
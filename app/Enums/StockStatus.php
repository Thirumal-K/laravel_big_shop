<?php

namespace App\Enums;
  

enum StockStatus: string{
    case InStock  = 'In Stock';
    case OutOfStock = 'Out of Stock';
    case OnBackOrder = 'On BackOrder';

    public static function getValue(): array 
    {
      return array_column(StockStatus::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(StockStatus::cases(),'value','key');
    }
}
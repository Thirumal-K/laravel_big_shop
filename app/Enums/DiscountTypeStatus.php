<?php

namespace App\Enums;


enum DiscountTypeStatus: string{
    case COUPON_CODE = 'COUPON_CODE';
    case PROMOTION = 'PROMOTION';
    

    public static function getValue(): array 
    {
      return array_column(DiscountTypeStatus::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(DiscountTypeStatus::cases(),'value','key');
    }
}
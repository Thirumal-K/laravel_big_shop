<?php

namespace App\Enums;
  

enum TaxeStatus: string{

    case NONE_ZERO_PERCENT = 'None (0%)';

    case VAT = 'VAT (10%)';
    
    case IMPORT_TAX  = 'Import Tax (15%)';

    public static function getValue(): array 
    {
      return array_column(TaxeStatus::cases(),'value');
    }
    public static function getKeyValue(): array 
    {
      return array_column(TaxeStatus::cases(),'value','key');
    }
}
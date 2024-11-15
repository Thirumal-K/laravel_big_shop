<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SubCategory extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image_path',
        'description',
        'buying_price',
        'selling_price',
        'measurement_unit',
        'eraned_profit',
        'current_qty',
        'reorder_level',
        'company_id',
        'category_id',
        'status'
    ];
    public function GetLogoImage()
    {
        return env('DOMAIN_URL') . Storage::url($this->image_path);
    }

    public function DeleteLogoImage()
    {        
        if (Storage::exists($this->image_path)) 
        {
            Storage::delete($this->image_path);
        }
    }

    // Define the relationship
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}

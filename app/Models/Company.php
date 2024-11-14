<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
class Company extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image_path',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class);
    }
    
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
}

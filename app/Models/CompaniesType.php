<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompaniesType extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'image_path',
        'user_id'
    ];
    public function user ()
    {
        return $this->belongsTo(user::class,'user_id');
    }
    public function product()
    {
        return $this->hasMany(product::class);
    }
    public function GetLogoImage()
    {
        return env ('DOMAIN_URL'). storage::url($this->image_path);
    }
    public function DeleteLogoImage()
    {
        if(storage::exists($this->image_path))
        {
            storage::delete($this->image_path);
        }
    }
}

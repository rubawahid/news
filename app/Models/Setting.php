<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as Translatablecontract;
use Astrotomic\Translatable\Translatable;

class Setting extends Model implements Translatablecontract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content', 'address'];
    protected $fillable = ['id', 'logo', 'favicon', 'facebook', 'instagram', 'phone', 'email', 'created_id', 
    'updated_id', 'deleted_id'];
}

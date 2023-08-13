<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as Translatablecontract;
use Astrotomic\Translatable\Translatable;

class Post extends Model implements Translatablecontract
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['title', 'content', 'smallDesk'];
    protected $fillable = ['id', 'image', 'parent', 'created_at', 'updated_at', 'deleted_at'];
}

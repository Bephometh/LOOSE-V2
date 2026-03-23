<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class whatsup extends Model
{
    //

    use SoftDeletes;

    protected static ?string $recordTitleAttribute = 'title';

    // public $timestamps = false;

    protected $fillable = [
        'title',
        'url',
        'content',
        'is_release'
    ];
}

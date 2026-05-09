<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class category extends Model
{
    
    protected $table = "categories";
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
    'name',
    'desc',
    ];

    public function product() : HasMany
    {
        return $this->hasMany(product::class,'category_id','id');
    }
}

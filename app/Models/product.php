<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class product extends Model
{
    protected $table = "categories";
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
    'category_id',
    'name',
    'desc',
    'price',
    'is_available',
    ];

    public function category() : BelongsTo
    {
        return $this->belongsTo(category::class,'category_id','id');
    }

    public function orderitems() : HasMany
    {
        return $this->hasMany(orderitem::class,'orderitem_id','id');
    }
}

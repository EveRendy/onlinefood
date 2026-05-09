<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class order extends Model
{
    protected $table = "orders";
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'order_date',

    ];

    public function users() : BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function orderitems() : HasMany
    {
        return $this->hasMany(orderitem::class, 'orderitem_id','id');
    }
}

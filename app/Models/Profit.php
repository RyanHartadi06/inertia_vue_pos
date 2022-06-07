<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profit extends Model
{
    use HasFactory;
    protected $fillable = [
        'transaction_id', 'total'
    ];
    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-M-Y H:i:s');
    }
}

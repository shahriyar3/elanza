<?php

namespace App\Models;

use App\Enums\Enums\ReservationStatusEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $table = 'reservations';

    protected $fillable = [
        'start_at', 'end_at', 'total_price', 'status'
    ];

    protected function casts()
    {
        return [
            'status' => ReservationStatusEnum::class,
            'start_at' => 'datetime',
            'end_at' => 'datetime'
        ];
    }

    public function bicycle()
    {
        return $this->belongsTo(Bicycle::class, 'bicycle_id', 'id', 'bicycle');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'user');
    }


}

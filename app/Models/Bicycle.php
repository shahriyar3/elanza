<?php

namespace App\Models;

use App\Enums\BicycleApprovedEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bicycle extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'bicycles';

    protected $fillable = ['user_id', 'name', 'price', 'approved'];

    protected function casts()
    {
        return [
            'approved' => BicycleApprovedEnum::class
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'user');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'bicycle_id', 'id');
    }
}

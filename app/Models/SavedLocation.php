<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class SavedLocation extends Model
{
    use HasFactory;

    protected $fillable = ['location_country', 'location_city'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

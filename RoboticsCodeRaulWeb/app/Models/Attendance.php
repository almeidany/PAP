<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = ['user_id', 'attendance_date'];
    // Remova ou corrija a linha abaixo - ela não deveria existir
    // protected $table = 'users'; // ISSO ESTÁ ERRADO!

    public function user()
    {
        return $this->belongsTo(User::class); // Correção: belongsTo em vez de hasMany
    }
}

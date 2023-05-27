<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Myteam extends Model
{
    use HasFactory;

    protected $table = 'myteam';

    protected $fillable = [
        'role_id',
        'first_name',
        'last_name',
        'ign',
        'igid',
        'game'
    ];

    public function roles()
    {
        return $this->belongsTo(Roles::class, 'role_id', 'id');
    }
}

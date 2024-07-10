<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    const ADMIN = 'admin';
    const WEBCAM_MODEL = 'model';
    const USER = 'user';

    protected $fillable = [
        'name', 'description'
    ];

    protected $table = 'roles';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import_User extends Model
{
    use HasFactory;
    protected $table = "import_user";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
}

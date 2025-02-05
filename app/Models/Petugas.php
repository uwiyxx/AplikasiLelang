<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;

class Petugas extends User
{
    use HasFactory, Notifiable;
    protected $table = 'petugas';
    protected $guarded =[];
    protected $primaryKey ='id_petugas';
    public $incrementing = false;
}

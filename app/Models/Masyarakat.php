<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    use HasFactory;
    protected $table = 'masyarakats';
    protected $guarded =[];
    protected $primaryKey ='id_user';
    public $incrementing = false;
}

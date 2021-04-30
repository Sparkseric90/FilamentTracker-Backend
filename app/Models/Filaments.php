<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filaments extends Model
{
    use HasFactory;
    protected $table = 'filaments';
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestampe = true;
}

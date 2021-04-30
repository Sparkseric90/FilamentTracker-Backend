<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filament extends Model
{
    use HasFactory;
    protected $table = 'filament';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestampe = true;
}

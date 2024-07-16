<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    public $table = 'projects';

    function isFinished()
    {
        if ($this->finished === "True") return true;
        else return false;
    }
}

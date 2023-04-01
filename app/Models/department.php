<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




/**
 * @property string $name
 * @property string $password
 * @property integer $slot_num
 * @property integer $project_id
 * @property integer $slot_left
 */
class department extends Model
{
    use HasFactory;
}

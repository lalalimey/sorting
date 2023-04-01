<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




/**
 * @property string $project_name
 * @property string $password
 * @property integer $creator_id
 * @property integer $id
 * @property integer $slot_left
 */
class project extends Model
{
    use HasFactory;
}

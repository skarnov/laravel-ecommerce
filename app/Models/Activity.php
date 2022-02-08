<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model {

    public $timestamps = FALSE;
    protected $table = 'activities';
    protected $primaryKey = 'activity_id';

}
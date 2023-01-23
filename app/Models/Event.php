<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $primaryKey='id';

    protected function serializeDate($event_date)
    {
        return $event_date->format('D-M-Y');
    }
}
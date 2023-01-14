<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ["event_name", "event_date", "event_time", "details", "file_path", "create_at", "updated_at"];

}

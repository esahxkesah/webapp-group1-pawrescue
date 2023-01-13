<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class pawrescue extends Model
{
    use HasFactory;

    protected $primarykey = 'event_id';
    protected $fillable = ["event_name", "event_date", "event_time", "details", "file_path", "create_at", "updated_at"];
}


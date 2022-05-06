<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $table = "document";
    protected $fillable = ["provincia","canton","parroquia","circun","zona","junta_no","position","status","added_by","valid_votes","null_votes","blank_votes","doc_end_time","doc_start_time","report_disturbance","comments","doc_name","election"];

}

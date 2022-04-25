<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionDetails extends Model
{
    use HasFactory;
    protected $table = "electiondetails";
    protected $fillable = ["provincia","canton","parroquia","circun","zona","junta_no","voters","status","added_by"];

}

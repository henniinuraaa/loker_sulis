<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posting extends Model
{
    use HasFactory;
    protected $table = "postings";
    protected $primaryKey = "id";
    protected $guarded = [''];
    protected $keyType = "string";
}

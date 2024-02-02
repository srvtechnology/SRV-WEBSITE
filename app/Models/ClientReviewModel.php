<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientReviewModel extends Model
{
    use HasFactory;
       protected $table = 'clint_review_srv';
    protected $guarded = [];
}

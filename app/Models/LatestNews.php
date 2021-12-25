<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AutoCreatedUpdatedBy;

class LatestNews extends Model
{
    use HasFactory, SoftDeletes;
    use AutoCreatedUpdatedBy;

    protected $fillable = ['header_title', 'title', 'description', 'link', 'image', 'created_by', 'updated_by'];
}

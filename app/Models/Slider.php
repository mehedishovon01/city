<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AutoCreatedUpdatedBy;

class Slider extends Model
{
    use HasFactory, SoftDeletes;
    use AutoCreatedUpdatedBy;

    protected $fillable = ['title', 'description', 'link', 'image', 'slider_status', 'created_by', 'updated_by'];
}

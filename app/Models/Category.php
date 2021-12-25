<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AutoCreatedUpdatedBy;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    use AutoCreatedUpdatedBy;

    protected $fillable = ['name', 'slug', 'created_by', 'updated_by'];
}

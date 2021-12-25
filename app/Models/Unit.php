<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AutoCreatedUpdatedBy;
use Auth;

class Unit extends Model
{
    use HasFactory, SoftDeletes;
    use AutoCreatedUpdatedBy;

    protected $fillable = ['name', 'slug', 'full_name', 'created_by', 'updated_by'];

}

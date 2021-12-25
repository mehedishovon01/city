<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\AutoCreatedUpdatedBy;

class OurServices extends Model
{
    use HasFactory, SoftDeletes;
    use AutoCreatedUpdatedBy;

    protected $fillable = ['title', 'description', 'image', 'created_by', 'updated_by'];
}

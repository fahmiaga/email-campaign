<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupList extends Model
{
    use HasFactory;
    protected $table = 'group_lists';
    protected $fillable = ['user_id', 'group_id', 'email'];
}

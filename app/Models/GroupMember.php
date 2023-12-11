<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupMember extends Model
{
    use HasFactory;
    protected $table = "member_group";
    protected $fillable = [
        'member_id',
        'group_id',
    ];
    public $timestamps = false;
}

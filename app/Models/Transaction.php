<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function users() {
        return $this->belogsTo(User::class, 'user_id');
    }

     public function departments() {
        return $this->belogsTo(Department::class, 'department_id');
    }
}

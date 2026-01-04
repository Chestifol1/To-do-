<?php

namespace App\Models;

use App\Enums\TaskPriority;
use Illuminate\Database\Eloquent\Model;
use App\Enums\TaskStatus;

class Task extends Model
{

    protected $fillable = [
        'title',
        'description' ,
        'status',
        'priority',
        'due_at',
        'assignee_id',
        'reviewer_id'
    ];

    protected $casts = [
        'dua_at' => 'datetime',
        'assignee_id' => 'integer',
        'reviewer_id' => 'integer',
        'status' => TaskStatus::class,
        'priority' => TaskPriority::class,

    ];



    public function complete():void
    {

        $this->update(['status' => TaskStatus::Completed]);


    }


    public function isCompleted(): bool
    {
        return $this->status === TaskStatus::Completed;
    }



}

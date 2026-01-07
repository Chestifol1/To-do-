<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Pending = 'pending';
    case In_Progress = 'In Progress';
    case Failed = 'Failed';
    case Completed = 'Completed';
    case Archived = 'Archived';

}

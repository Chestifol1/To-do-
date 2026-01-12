<?php

namespace App\Enums;

enum TaskStatus: string
{
    case Pending = 'Pending';
    case In_Progress = 'In_Progress';
    case Failed = 'Failed';
    case Completed = 'Completed';
    case Archived = 'Archived';



    public function label(): string
    {
        return match($this) {
            self::Pending => 'Pending',
            self::In_Progress => 'In Progress',
            self::Failed => 'Failed',
            self::Completed => 'Completed',
            self::Archived => 'Archived',
        };
    }

}





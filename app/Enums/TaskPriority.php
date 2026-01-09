<?php

namespace App\Enums;

enum TaskPriority: string
{


    case Low = 'Low';
    case Medium = 'Medium';
    case High = 'High';


    public static function values(): array
    {
        return array_map(fn($case) => $case->value, self::cases());

    }


}

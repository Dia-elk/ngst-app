<?php

namespace App\Enum;

enum HomeworkStatusesEnum :int
{
    case TO_DO=1;
    case NOT_DONE=2;
    case POORLY_DONE=3;
    case DONE=4;
}

<?php

namespace App\Enums;

enum TodoStatus: string
{
    case TODO = 'Todo';
    case ON_PROGRES = 'On Progres';
    case DONE = 'Done';
}
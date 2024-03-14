<?php

namespace App\Models;

enum MedicalHistoryStatusEnum : int
{
    case init = 1;
    case continued = 2;
    case closed = 3;
}

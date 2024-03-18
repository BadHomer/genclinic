<?php

namespace App\Enums;

enum RoleEnum : string
{
    case doctor = 'App\Models\Doctor';
    case patient = 'App\Models\Patient';
    case admin = 'App\Models\Admin';
}

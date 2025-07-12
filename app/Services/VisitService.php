<?php

namespace App\Services;

use App\Models\Visit;

class VisitService
{
    public function __construct()
    {
    }

    public function createVisit(array $data)
    {
        return Visit::create($data);
    }
}

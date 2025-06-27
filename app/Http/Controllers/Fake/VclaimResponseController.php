<?php

namespace App\Http\Controllers\Fake;

use App\Facades\VclaimResponse;
use App\Http\Controllers\Controller;

class VclaimResponseController extends Controller
{
    public function __invoke()
    {
        return VclaimResponse::fromBPJSNumber();
    }
}

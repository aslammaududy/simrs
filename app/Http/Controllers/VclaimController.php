<?php

namespace App\Http\Controllers;

use App\Facades\Vclaim;
use Illuminate\Http\Request;

class VclaimController extends Controller
{
    public function __invoke(Request $request)
    {
        Vclaim::fromParticipantNumber($request->route()->parameter('number'));
    }
}

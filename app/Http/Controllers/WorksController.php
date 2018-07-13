<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    public function apiGetWorks(Request $request)
    {
        $works = Works::all();

        $quater = ceil($works->count() / 4);

        return response([
            'error' => false,
            'message' => 'Successfull Request',
            'data' => $works->chunk($quater)

        ], 200);
    }
}

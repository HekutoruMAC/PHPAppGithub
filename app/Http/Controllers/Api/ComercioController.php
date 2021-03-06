<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Backend\Comercio;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ComercioController extends Controller
{
    public function index()
    {
        $comercios = Comercio::all()->toArray();
        return response()->json($comercios,200);
    }
}
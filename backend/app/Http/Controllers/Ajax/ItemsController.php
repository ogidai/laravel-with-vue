<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index() {
        return \App\Models\Item::all();
    }
}

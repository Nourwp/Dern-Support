<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class InventoryController extends Controller
{
    public function index()
    {
        return view('backend.inventory.index');
    }
}

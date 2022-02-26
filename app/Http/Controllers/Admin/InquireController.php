<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transfer;
use Illuminate\Http\Request;

class InquireController extends Controller
{
    public function index()
    {
        $transfers = Transfer::pluck('service','id', 'service','price');
        return view('admin.inquires.index', compact('transfers'));
    }
}

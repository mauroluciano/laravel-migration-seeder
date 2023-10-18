<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\train;



class TrainController extends Controller
{
  public function index()
  {
    $houses = train::all();
    return view('train.index', compact('trains'));
  }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MsnController extends Controller
{
  public function index ()
  {
    return view('load', [
      'teste' => ''
    ]);
  }
  public function store(Request $request)
  {
    $data = $request->only(['msg']);
    $data['id'] = date('Y-m-d H:i:s');
    return $data;
  }
}

<?php

namespace App\Http\Controllers\Tag;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
      return view('tag.create');
    }
}

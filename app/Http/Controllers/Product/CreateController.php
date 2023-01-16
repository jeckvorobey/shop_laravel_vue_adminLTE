<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Tag;

class CreateController extends Controller
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
      $tags = Tag::all();
      $colors = Color::all();
      $categories = Category::all();

      return view('product.create', compact('categories', 'colors', 'tags'));
    }
}

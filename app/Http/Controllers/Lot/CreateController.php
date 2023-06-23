<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lot;

class CreateController extends BaseController
{
   public function __invoke()
   {
       $categories = Category::all();

       return view('lot.create', compact('categories'));
   }
}

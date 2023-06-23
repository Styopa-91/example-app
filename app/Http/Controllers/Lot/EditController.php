<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lot;

class EditController extends BaseController
{
   public function __invoke(Lot $lot)
   {
       $categories = Category::all();
       return view('lot.edit', compact('lot', 'categories'));
   }
}

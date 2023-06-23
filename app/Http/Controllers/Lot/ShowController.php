<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Models\Lot;

class ShowController extends BaseController
{
   public function __invoke(Lot $lot)
   {
       return view('lot.show', compact('lot'));
   }
}

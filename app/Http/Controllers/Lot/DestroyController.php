<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Models\Lot;

class DestroyController extends BaseController
{
   public function __invoke(Lot $lot)
   {
       $lot->delete();
       return redirect()->route('lot.index');
   }
}

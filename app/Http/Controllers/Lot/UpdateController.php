<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lot\UpdateRequest;
use App\Models\Lot;

class UpdateController extends BaseController
{
   public function __invoke(UpdateRequest $request, Lot $lot)
   {
       $data = $request->validated();

       $this->service->update($lot, $data);

       return redirect()->route('lot.show', $lot->id);
   }
}

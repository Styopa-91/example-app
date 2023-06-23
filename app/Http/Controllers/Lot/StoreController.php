<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Http\Requests\Lot\StoreRequest;
use App\Models\Lot;

class StoreController extends BaseController
{
   public function __invoke(StoreRequest $request)
   {
       $data = $request->validated();

       $this->service->store($data);

       return redirect()->route('lot.index');
   }
}

<?php

namespace App\Http\Controllers\Lot;

use App\Http\Requests\Lot\FilterRequest;

class IndexController extends BaseController
{
   public function __invoke(FilterRequest $request)
   {
        $data = $request->validated();

        $arr = $this->service->index($data);

        if (isset($arr[2])) {
            list($lots, $categories, $checkedCat) = $arr;
            return view('lot.index', compact(['lots', 'categories', 'checkedCat']));
        }
        else {
            list($lots, $categories) = $arr;
            return view('lot.index', compact(['lots', 'categories']));
        }
   }
}

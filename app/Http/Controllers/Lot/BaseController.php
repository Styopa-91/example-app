<?php

namespace App\Http\Controllers\Lot;

use App\Http\Controllers\Controller;
use App\Services\Lot\Service;

class BaseController extends Controller
{
    public Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }
}

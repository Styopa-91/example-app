<?php

namespace App\Services\Lot;

use App\Models\Category;
use App\Models\Lot;

class Service
{
    public function store($data)
    {
        Lot::create($data);
    }

    public function update($lot, $data)
    {
        $lot->update($data);
    }

    public function index($data)
    {
        $categories = Category::all();

        $query = Lot::query();

        if (isset($data['categoriesArr'])) {

            $checkedCat = Category::whereIn('title', $data['categoriesArr'])->get();

            foreach ($checkedCat as $category) {

                $query->orwhere('category_id', '=', $category->id);
            }
            $lots = $query->get();

            return array($lots, $categories, $checkedCat);
        }

        $lots = $query->get();

        return array($lots, $categories);
    }
}

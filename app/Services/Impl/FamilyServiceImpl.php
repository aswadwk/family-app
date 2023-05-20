<?php

namespace App\Services\Impl;

use FamilyService;

class FamilyServiceImpl implements \App\Services\FamilyService
{
    public function getFamilies()
    {
        return \App\Models\Family::all();
    }

    public function getFamily($id)
    {
        return \App\Models\Family::findOrFail($id);
    }

    public function createFamily($params)
    {
        return \App\Models\Family::create($params);
    }

    public function updateFamily($params, $id)
    {
        if (isset($params['parent_id'])) {
            if ($params['parent_id'] === $id) {
                throw new \Exception('Parent cannot be itself');
            }
        }

        return \App\Models\Family::where('id', $id)->update($params);
    }

    public function deleteFamily($id)
    {
        return \App\Models\Family::where('id', $id)->delete();
    }
}

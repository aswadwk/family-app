<?php

namespace App\Services;

interface FamilyService
{
    public function getFamilies();
    public function getFamily($id);
    public function createFamily($params);
    public function updateFamily($params, $id);
    public function deleteFamily($id);
};

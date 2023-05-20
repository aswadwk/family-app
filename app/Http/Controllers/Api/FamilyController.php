<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateFamilyRequest;
use App\Http\Requests\UpdateFamilyRequest;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    private $service;

    public function __construct(
        \App\Services\FamilyService $service
    ) {
        $this->service = $service;
    }

    public function index()
    {
        return \App\Helpers\ResponseFormatter::success(
            $this->service->getFamilies(),
            'Success retrieve data'
        );
    }

    public function show($id)
    {
        return \App\Helpers\ResponseFormatter::success(
            $this->service->getFamily($id),
            'Success retrieve data'
        );
    }

    public function store(CreateFamilyRequest $request)
    {
        return \App\Helpers\ResponseFormatter::success(
            $this->service->createFamily($request->validated()),
            'Success create data'
        );
    }

    public function update(UpdateFamilyRequest $request, $id)
    {
        return \App\Helpers\ResponseFormatter::success(
            $this->service->updateFamily($request->validated(), $id),
            'Success update data'
        );
    }

    public function destroy($id)
    {
        return \App\Helpers\ResponseFormatter::success(
            $this->service->deleteFamily($id),
            'Success delete data'
        );
    }
}

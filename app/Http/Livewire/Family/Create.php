<?php

namespace App\Http\Livewire\Family;

use Livewire\Component;

class Create extends Component
{
    private $service;
    public $name;
    public $gender;
    public $parentId;

    protected $rules = [
        'name' => 'required',
        'gender' => 'required',
        'parentId' => 'nullable',
    ];

    public function __construct()
    {
        $this->service = app()->make(\App\Services\FamilyService::class);
    }

    public function store()
    {
        $this->validate();

        $this->service->createFamily([
            'name' => $this->name,
            'gender' => $this->gender,
            'parent_id' => $this->parentId ?? null,
        ]);

        session()->flash('message', 'Family successfully created.');

        return redirect()->route('family.index');
    }

    public function render()
    {
        return view('livewire.family.create')
            ->with('families', $this->service->getFamilies());
    }
}

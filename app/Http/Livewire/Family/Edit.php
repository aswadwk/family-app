<?php

namespace App\Http\Livewire\Family;

use Livewire\Component;

class Edit extends Component
{
    private $service;

    public $family;

    public $familyId;

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

    public function mount($familyId)
    {
        $family = $this->service->getFamily($familyId);

        $this->family = $family;
        $this->familyId = $family->id;
        $this->name = $family->name;
        $this->gender = $family->gender;
        $this->parentId = $family->parent_id ?? null;
    }

    public function update()
    {
        // dd($this->gender);
        $this->validate();

        $this->service->updateFamily([
            'name' => $this->name,
            'gender' => $this->gender,
            'parent_id' => $this->parentId ?? null,
        ], $this->familyId);

        session()->flash('message', 'Family successfully updated.');

        return redirect()->route('family.index');
    }

    public function render()
    {
        return view('livewire.family.edit')
            ->with([
                'families' => $this->service->getFamilies(),
            ]);
    }
}

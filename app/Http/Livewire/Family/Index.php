<?php

namespace App\Http\Livewire\Family;

use Livewire\Component;

class Index extends Component
{
    private $service;

    public function __construct()
    {
        $this->service = app()->make(\App\Services\FamilyService::class);
    }

    public function destroy($id)
    {
        $family = $this->service->getFamily($id);

        $family->delete();

        session()->flash('message', 'Family successfully deleted.');

        return redirect()->route('family.index');
    }


    public function render()
    {
        return view('livewire.family.index', [
            'families' => $this->service->getFamilies(),
        ]);
    }
}

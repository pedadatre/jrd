<?php

namespace App\Livewire;

use App\Models\Crew;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class ShowCrewPanel extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search = '';
    
    // º Crews data º //
    public $crewsData = [];



    // º Mount of crew database data º //
    public function mount() 
    {
        $this->crewsData = Crew::all()->keyBy('id')->toArray();
    }



    // º Logic for update the crews data in the control panel º //
    public function modify($id) 
    { 
        $validated = $this->validate([
            'crewsData.'.$id.'.name' => 'required|string|min:1|max:50', 
            'crewsData.'.$id.'.logo' => 'nullable|string|max:255', 
            'crewsData.'.$id.'.slogan' => 'nullable|string|max:100',
            'crewsData.'.$id.'.capacity_people' => 'required|integer|min:0',
            'crewsData.'.$id.'.foundation_date' => 'nullable|date|after_or_equal:1950-01-01',
        ]);
        

        $crew = Crew::find($id); 

        $crew->update($this->crewsData[$id]); 
    }



    // º Render and paginate of the crews control panel º //
    public function render()
    {
        $crews = Crew::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        return view('livewire.show-crew-panel', ['crews' => $crews]);
    }
}

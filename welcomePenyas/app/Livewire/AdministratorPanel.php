<?php

namespace App\Livewire;

use Livewire\Component;

class AdministratorPanel extends Component
{
    // º Booleanos para mostrar o no los paneles cuando se haga click º //
    public $userPanel = false;
    public $crewPanel = false;

    // º Listeners para actuar cuando el user haga click º //
    protected $listeners = [
        'showUserPanel',
        'showCrewPanel'
    ];

    // º Renderizar show-user-panel º //
    public function showUserPanel(){
        $this->userPanel = !$this->userPanel;
    }

    // º Renderizar show-crew-panel º //
    public function showCrewPanel(){
        $this->crewPanel = !$this->crewPanel;
    }

    public function render()
    {
        return view('livewire.administrator-panel');
    }
}

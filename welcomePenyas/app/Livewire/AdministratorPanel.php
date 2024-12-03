<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class AdministratorPanel extends Component
{
    // º Booleanos para mostrar o no los paneles cuando se haga click º //
    public $userPanel = false;
    public $crewPanel = false;
    public $userCreation = false;
    public $crewCreation = false;

    // º Listeners para actuar cuando el user haga click º //
    // protected $listeners = [
    //     'showUserPanel',
    //     'showCrewPanel',
    //     'u' => 'createUser',
    //     'createCrew'
    // ];

    // º Renderizar show-user-panel poniendolos como falso º //
    public function showUserPanel(){
        $this->userPanel = !$this->userPanel;
    }

    // º Renderizar show-crew-panel º //
    public function showCrewPanel(){
        $this->crewPanel = !$this->crewPanel;
    }

    // // º Renderizar show-user-panel poniendolos como falso º //
    // public function createCrew(){
    //     $this->crewCreation = !$this->crewCreation;
    // }
    
    // // º Renderizar show-crew-panel º //
    // #[On('u')] 
    // public function createUser(){
    //     $this->userCreation = !$this->userCreation;
    //     // logger('User creation toggled: ' . $this->userCreation);
    // }

    public function render()
    {
        return view('livewire.administrator-panel');
    }
}

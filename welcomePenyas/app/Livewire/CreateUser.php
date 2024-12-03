<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class CreateUser extends Component
{
    use WithFileUploads;

    public $name;
    public $surname;
    public $email;
    public $password;
    public $profile_photo;
    public $role;
    public $roles;

    public function mount()
    {
        $this->roles = Role::all();
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'surname' => 'nullable|string|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|string|min:8',
        'profile_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'role' => 'required|exists:roles,id',
    ];

    public function createUser()
    {
        $this->validate();

        $profilePhotoPath = $this->profile_photo->store('profile_photos', 'public');

        User::create([
            'name' => $this->name,
            'surname' => $this->surname,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'profile_photo' => $profilePhotoPath,
            'role_id' => $this->role,
        ]);

        session()->flash('message', 'User created successfully.');

        $this->reset(['name', 'surname', 'email', 'password', 'profile_photo', 'role']);
    }

    public function render()
    {
        return view('livewire.create-user');
    }
}
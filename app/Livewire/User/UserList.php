<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Component;

class UserList extends Component
{
    public string $name;
    public string $email;
    public string $password;

    public function addUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        $this->reset('name', 'email', 'password');
    }

    public function deleteUser(int $id)
    {
        User::find($id)->delete();
    }

    public function render(): View
    {
        return view('livewire.user.user-list', [
            'users' => User::all(),
        ]);
    }
}

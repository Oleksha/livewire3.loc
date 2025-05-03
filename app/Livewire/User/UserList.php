<?php

namespace App\Livewire\User;

use App\Livewire\Forms\UserForm;
use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\On;
use Livewire\Component;

class UserList extends Component
{
    public UserForm $form;

    public function delete(int $id): void
    {
        User::find($id)->delete();
    }

    #[On('user-created')]
    public function updateUserList($user = null)
    {}

    public function render(): View
    {
        return view('livewire.user.user-list', [
            'users' => User::orderBy('id', 'desc')->get(),
        ]);
    }
}

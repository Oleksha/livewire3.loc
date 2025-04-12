<?php

namespace App\Livewire\User;

use Illuminate\View\View;
use Livewire\Component;

class UserList extends Component
{
    public string $name = "Джон";
    public string $lastname;
    public string $fullname;
    public string $title;
    public string $second_title;
    public string $user;

    public array $users = [
        'Пользователь 1',
        'Пользователь 2',
        'Пользователь 3',
    ];

    public function mount($lastname = 'Гость'): void
    {
        $this->lastname = $lastname;
        $this->fullname = $this->name . ' ' . $this->lastname;
    }

    public function add()
    {
        $this->users[] = $this->user;
    }

    public function render(): View
    {
        return view('livewire.user.user-list', [
            'age' => 35
        ])->with(['dog' => 'Шарик', 'cat' => 'Мурзик']);
    }
}

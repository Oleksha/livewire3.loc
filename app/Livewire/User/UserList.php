<?php

namespace App\Livewire\User;

use App\Models\User;
use Illuminate\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;

class UserList extends Component
{
    #[Validate('required', message: 'Имя пользователя обязательно для заполнения')]
    #[Validate('min:2', message: 'Имя пользователя должно быть длиннее 1 символа')]
    #[Validate('max:30', message: 'Имя пользователя должно быть не больше 30 символов')]
    public string $name;
    #[Validate('required|email|max:30')]
    public string $email;
    #[Validate('required|min:6')]
    public string $password;

    protected function rules(): array
    {
        return [
            'name' => 'required|min:2|max:30',
            'email' => 'required|email|max:30',
            'password' => 'required|min:6',
        ];
    }

    public function save(): void
    {
        $validated = $this->validate();
        User::create($validated);
        $this->reset();
    }

    protected function messages()
    {
        return [
            'name.required' => 'Имя пользователя обязательно для заполнения',
            'name.min' => 'Имя пользователя должно быть длиннее 1 символа',
            'name.max' => 'Имя пользователя должно быть не больше 30 символов',
        ];
    }

    public function delete(int $id): void
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

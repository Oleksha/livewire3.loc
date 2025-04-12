<div>
    <h1>{{ $title }}</h1>
    <h2>{{ $second_title }}</h2>
    <input type="text" placeholder="Ничего нет..." wire:model.live="name">
    <input type="text" placeholder="Ничего нет..." wire:model.live="age">
    <input type="text" placeholder="Ничего нет..." wire:model.live="dog">
    <input type="text" placeholder="Ничего нет..." wire:model.live="cat">
    <p>Имя: {{ $name }}</p>
    <p>Фамилия: {{ $lastname }}</p>
    <p>Полное имя: {{ $fullname }}</p>
    <p>Возраст: {{ $age }}</p>
    <p>Собака: {{ $dog }}</p>
    <p>Кошка: {{ $cat }}</p>
    <div class="input-group mb-3">
        <input type="text" class="form-control" wire:model="user">
        <button class="btn btn-primary" wire:click="add">Добавить пользователя</button>
    </div>
    <ul>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
</div>

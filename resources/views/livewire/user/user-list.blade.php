<div class="row">
    <div class="col-md-6">
        <form wire:submit="addUser">
            <div class="mb-3">
                <input type="text" name="name" class="form-control" wire:model="name" placeholder="Имя пользователя">
            </div>
            <div class="mb-3">
                <input type="email" class="form-control" wire:model="email" placeholder="Электронная почта">
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" wire:model="password" placeholder="Введите пароль">
            </div>
            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-primary my-2">Добавить пользователя</button>
                <div wire:loading wire:target="addUser" class="spinner-border" role="status">
                    <span class="visually-hidden">Сохранение...</span>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <div class="d-flex align-items-center gap-3">
            <button wire:click="$refresh" type="button" class="btn btn-success mb-2">Обновить данные</button>
            <div wire:loading class="spinner-border" role="status">
                <span class="visually-hidden">Обновление...</span>
            </div>
        </div>
        <ul>
            @forelse($users as $user)
                <li wire:key="{{ $user->id }}">{{ $user->name }} ({{ $user->email }}) | <a href="#" wire:click.prevent="deleteUser({{ $user->id }})" wire:confirm="Вы уверены?">Удалить</a></li>
            @empty
                <p>Список пользователей пуст...</p>
            @endforelse
        </ul>
    </div>
</div>

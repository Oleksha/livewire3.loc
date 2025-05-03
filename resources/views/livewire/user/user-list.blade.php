<div class="row">
    <div class="col-md-6">
        <form wire:submit="save">
            <div class="mb-3">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" wire:model.blur="name" placeholder="Имя пользователя">
                @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.blur="email" placeholder="Электронная почта">
                @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model.blur="password" placeholder="Введите пароль">
                @error('password')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="d-flex align-items-center gap-3">
                <button type="submit" class="btn btn-primary my-2">Добавить пользователя</button>
                <div wire:loading wire:target="save" class="spinner-border" role="status">
                    <span class="visually-hidden">Сохранение...</span>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <ul>
            @forelse($users as $user)
                <li wire:key="{{ $user->id }}">{{ $user->name }} ({{ $user->email }}) | <a href="#" wire:click.prevent="delete({{ $user->id }})" wire:confirm="Вы уверены?">Удалить</a></li>
            @empty
                <p>Список пользователей пуст...</p>
            @endforelse
        </ul>
    </div>
</div>

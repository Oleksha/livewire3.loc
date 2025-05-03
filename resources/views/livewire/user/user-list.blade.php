<div class="col-md-6">
    <ul>
        @forelse($users as $user)
            <li wire:key="{{ $user->id }}">{{ $user->name }} ({{ $user->email }}) | <a href="#" wire:click.prevent="delete({{ $user->id }})" wire:confirm="Вы уверены?">Удалить</a></li>
        @empty
            <p>Список пользователей пуст...</p>
        @endforelse
    </ul>
</div>

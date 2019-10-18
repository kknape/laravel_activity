<ul class="list-group">
    @foreach ($users as $user)
    <li class="list-group-item">
        <a class="list-group-item" href="/user/{{ $user->id}}">
            {{ $user->name }}
    </li>
    @endforeach
</ul>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Full Name</th>
        <th>Action</th>
        <th>Avatar</th>
    </tr>

    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->username }}</td>
        <td>{{ $user->full_name }}</td>

        <td>

@if($user->avatar)

<img src="{{ asset('storage/'.$user->avatar) }}"
     width="80">

@else

No Image

@endif

</td>
    </tr>
    <td>
    <a href="{{ route('users.edit', $user) }}">
        Edit
    </a>
</td>
    @endforeach
    
</table>
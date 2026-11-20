<!DOCTYPE html>
<html>
<head>
    <title>Edit User</title>
</head>
<body>

<h1>Edit User</h1>

<form action="/users/{{ $user->id }}/update"
      method="POST"
      enctype="multipart/form-data">

    @csrf

    <label>Username</label><br>
    <input
        type="text"
        name="username"
        value="{{ $user->username }}">
    <br><br>

    <label>Full Name</label><br>
    <input
        type="text"
        name="full_name"
        value="{{ $user->full_name }}">
    <br><br>
<label>Profile Picture</label><br>

<input type="file" name="avatar">

<br><br>
    <button type="submit">
        Update User
    </button>

</form>

</body>
</html>
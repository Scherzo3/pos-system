<!DOCTYPE html>
<html>
<head>
    <title>Create Customer</title>
</head>
<body>

<h1>Create Customer</h1>

<form action="/customers/store" method="POST">

    @csrf

    <label>Full Name</label><br>
    <input type="text" name="full_name"><br><br>

    <label>Email</label><br>
    <input type="email" name="email"><br><br>

    <label>Phone</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">
        Save Customer
    </button>

</form>
<th>Action</th>
</body>
</html>
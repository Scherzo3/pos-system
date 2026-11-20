<table border="1">
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>

    @foreach($customers as $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->full_name }}</td>
        <td>{{ $customer->email }}</td>
        <td>{{ $customer->phone }}</td>
    </tr>
        <a href="{{ route('customers.edit', $customer) }}">
        Edit
    </a>
    <th>Action</th>
    @endforeach
    <td>

</td>
    
</table>
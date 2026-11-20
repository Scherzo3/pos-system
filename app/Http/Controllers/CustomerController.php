<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();

        return view('customers', compact('customers'));
    }
    public function create()
{
    return view('customers.create');
}
public function store(Request $request)
{
    $request->validate([
        'full_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
    ]);

    Customer::create([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $request->phone
    ]);

    return redirect('/customers');
}
public function edit(Customer $customer)
{
    return view('customers.edit', compact('customer'));
}
public function update(Request $request, Customer $customer)
{
    $request->validate([
        'full_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required'
    ]);

    $customer->update([
        'full_name' => $request->full_name,
        'email' => $request->email,
        'phone' => $request->phone
    ]);

    return redirect('/customers');
}
}
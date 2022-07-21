<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomersRequest;
use App\Http\Requests\UpdateCustomersRequest;
use App\Models\Customer;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::paginate(9);

        //Return the view
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCustomersRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomersRequest $request)
    {
        // Create new customer instance
        $customer = new Customer();
        // Validated data
        $validated = $request->safe();

        // Add values to customer variable
        foreach ($validated as $key => $value) {
            if (Str::contains($key, 'call_count'))
                continue;

            $customer->$key = $value;
        }

        $call_information = $customer->calls_information($validated['call_type'], $validated[$validated['call_type'] . '_count']);
        $customer->call_count = $call_information[0];
        $customer->amount_due = $call_information[1];

        if ($customer->save()) {
            return redirect()->route('welcome')->with('status', 'Customer sent successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //Return the view
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //Return the view
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCustomersRequest $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomersRequest $request, Customer $customer)
    {
        // Validated data
        $validated = $request->safe();

        // Add values to customer variable
        foreach ($validated as $key => $value) {
            $customer->$key = $value;
        }

        if ($customer->save()) {
            return redirect()->back()->with('status', 'Customer updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Customers $customers)
    {

        return view('customers.index', [
            'customers' => $customers->all(),
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
        ]);

        Customers::create($request->all());

        return redirect()->route('customers.index')
                               ->with('success', 'เพิ่มข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(Customers $customers)
    {
        return view('customers.show', compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(Customers $customers)
    {
        return view('customers.edit', compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customers $customers)
    {
        $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
        ]);

        $customers->update($request->all());

        return redirect()->route('customers.index')
                         ->with('success', 'แก้ไขข้อมูลเรียบร้อยแล้ว');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customers $customers)
    {

        $customers->delete();
        return redirect()->route('customers.index')
                         ->with('success', 'ลบข้อมูลเรียบร้อยแล้ว');
    }
}

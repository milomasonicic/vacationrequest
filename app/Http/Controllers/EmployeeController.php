<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function store(Request $request)
    {
        $data=$request->validate([
            "first_name"=>"required|string|max:255",
            "last_name"=>"required|string|max:255",
            "email"=>"required|email|max:255",
            "postion_id"=>"required",
            "available"=>'remote'
        ]);

        Employee::create($data);
        return redirect(route("form.index"));
    }
}

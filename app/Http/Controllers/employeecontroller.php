<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class employeecontroller extends Controller
{
    public function show()
    {
        // SIMPLE PAGINATE

        $employees = DB::table("employees")->orderBy('name')->simplePaginate(4);


        // NORMAL PAginate METHOD
        // $employees = DB::table("employees")->Paginate(4);
        return view("employee", ['data' => $employees]);
    }

    // VIEW RECORD SINGLE IN VIEW
    public function singleuserview(string $id)
    {
        $employees = DB::table('employees')->where('id', $id)->get();
        return view('singleuserview', ['data' => $employees]);
    }

    // SINGLE OR MULTIPLE RECORD INSERT
    public function adduser(request $req)
    {
        $employees = DB::table('employees')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'city' => $req->city,
            'address' => $req->address,
            'phone' => $req->phone,

        ]);
        if ($employees) {
            return redirect('employee');
        }
    }

    // DELETE SINGLE RECORD
    public function deleteuserview(string $id)
    {
        $employees = DB::table('employees')->where('id', $id)->delete();
        if ($employees) {
            return redirect('employee');
        }
    }



    // EDIT PAGE 
    public function edituserview(string $id)
    {
        $employees = DB::table('employees')->where('id', $id)->first();
        //  dd($employees);
        return view('edituserview', ['data' => $employees]);
        //  return $employees;
    }

    public function updateuser(Request $req, $id)
    {
        $employees = DB::table('employees')->where('id', $id)->update([
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
            'city' => $req->city,
            'address' => $req->address,
            'phone' => $req->phone,

        ]);
        if ($employees) {
            return redirect('employee');
        }
    }
}

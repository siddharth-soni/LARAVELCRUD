<?php

namespace Database\Seeders;

use App\Models\employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class employeeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file::get('database/json/employee.json');

        $employee = collect(json_decode($json));


        $employee->each(function ($employee) {
            employee::create([
                'name' => $employee->name,
                'email' => $employee->email,
                'password' => $employee->password,
                'city' => $employee->city,
                'address' => $employee->address,
                'phone' => $employee->phone,
            ]);
        });
    }
}

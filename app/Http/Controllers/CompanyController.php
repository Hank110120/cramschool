<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function edit()
    {
        $user = auth()->user();


        return view('/backend/companies/edit')->with([
            'company' => $user->company
        ]);
    }

    public function update(Request $request)
    {
        $company = auth()->user()->company;

        // dd($request->input('company_name', 'xxx'));

        $company->update([
            'name' =>$request->input('company_name'),
            'phone' =>$request->input('company_phone'),
            'slogan' =>$request->input('company_slogan'),
            'address' =>$request->input('company_address'),
        ]);

        return view('/backend/companies/edit')->with([
            'company' => $company,
            'status' => '修改成功!!!',
        ]);
    }
}

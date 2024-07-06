<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    //Controller for Patient CRUD
    public function add(Request $req){
        $req->validate([
            'name' => 'required|max:255',
            'contact' => 'required|min:10',
        ]);

        $p=new Patient();
        $p->name=$req->name;
        $p->dob=$req->dob;
        $p->gender=$req->gender;
        $p->country=$req->country;
        $p->contact=$req->contact;
        $p->history=$req->history;
        $p->medication=$req->medication;
        $p->save();
        return back();
    }

    public function edit(Request $req){

    }

    public function delete(Request $req){

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Formtable;
use Illuminate\Http\Request;
use App\Models\TestModel;
class FormtableController extends Controller
{
    //
    public function viewforms()
    {
            $formtable = Formtable::all();
            return view('form.formview')->with(['formtable'=>$formtable]);

    }
    public function createform(Request $request)
    {
      
        Formtable::create([ 
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'photo' => $request->photo 
        ]);
        return back();

    }
    public function display()
    {
        $formtable = Formtable::all();
        return view('form.formview')->with('formtable',$formtable);
    }
}

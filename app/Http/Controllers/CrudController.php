<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CrudController extends Controller
{



     public function index(){

        $cruds = Crud::all();
        return view('index' , compact('cruds'));
     }


    public function create(){

        return view('create');
    }

    public function store(Request $request){



        Crud::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'cellphone' => $request->cellphone,
            'address' => $request->address,

        ]);

        return redirect()->route('crud.index');

    }



    public function edit(Crud $crud){


        return view('edit' , compact('crud'));

    }

    public function update(Request $request , Crud $crud){


        $crud->update([

            'name' => $request->name,
            'lastname' => $request->lastname,
            'cellphone' => $request->cellphone,
            'address' => $request->address,

        ]);


        return redirect()->route('crud.index');


    }


    public function destroy(Crud $crud){

        $crud->delete();
        return redirect()->route('crud.index');


    }

    public function export(Crud $crud){
    $data = Crud::all();
        $pdf = Pdf::loadView('print' , compact('data'));
        return $pdf->download('invoice.pdf');


    }
}

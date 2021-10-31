<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DocumentController extends Controller
{

    public function index(){
        $documents = Document::all();

        return view('/main', compact('documents'));
    }

    public function create(){
        return view('/document');
    }

    public function store(Request $request) {
        $document = new Document;

        $document->name = $request->name;
        $document->activities_type = $request->activities_type;
        $document->qty_hours = $request->qty_hours;
        $document->status = $request->status;

        //Upload Archive
        if($request->file('document')->isValid()){
            $nameFile = $request->name . "." . $request->file('document')->Extension();
            $document->document = $request->file('document')->storeAs( 'documents', $nameFile);
        }

        $document->save();

        return redirect('/main')->with('msg', 'Evento criado com sucesso!');
    }

    public function sum(){
        $documents = Document::all();
        $sum = 0;
        foreach ($documents as $doc){
            if($doc->status === "Homologado"){
                $sum = $doc->qty_hours + $sum;
            }
        }
        return view('/main', compact('documents','sum'));
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
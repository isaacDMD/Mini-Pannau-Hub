<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePanneauRequest;
use App\Http\Requests\UpdatePanneauRequest;
use App\Models\Pannau;
use Illuminate\Http\Request;

class PannauController extends Controller
{
    public function list(){
        return Pannau::all();
    }

    public function store(Request $request){

        $validated = $request->validate(CreatePanneauRequest::rules());
        $pannau = Pannau::create($validated);
        return response()->json($pannau, 201);

    }

    public function show(Pannau $id){

        $pannau = Pannau::findOrFail($id);
        return response()->json($pannau,200);
    }

    public function update(Request $request, Pannau $pannau){
        $validated = $request->validate(UpdatePanneauRequest::rules());
        $pannau = Pannau::findOrFail($pannau->id);
        $pannau->update($validated);
        return response()->json($pannau,200);
    }
    public function destroy(Pannau $id){
        $paanau = Pannau::findOrFail($id);
        $paanau->delete();
        return response()->json(["message "=>"message supprimé"],200);
    }

}

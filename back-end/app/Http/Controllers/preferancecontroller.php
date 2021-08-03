<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\preferance;

class preferancecontroller extends Controller
{
    public function index()
    {
        return preferance::all();
    }
 
    public function show($id)
    {
        if (preferance::where('pref_id', $id)->exists()) {
        $preferances=preferance::find($id);
        return response()->json([
            "message" => "Records Retrived Successfully",
            "data"=> $preferances
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Preferances not found"
              ], 404);
        }
    }

    public function store(Request $request)
    {
        // return preferance::create($request->all());
        $s=new preferance;
        $s->prefered_location = collect($request->prefered_location)->implode(',');
        $s->user_id = $request->user_id;
        $s->notice_period = $request->notice_period;
        $s->expexted_ctc=$request->expexted_ctc;
        $s->current_ctc = $request->current_ctc;
        $s->department = collect($request->department)->implode(',');
        $s->save();
        return response()->json([
            "success"=>1,
            "message" => "Data Inserted",
            "Data"=> $s

   ], 201);
    }

    public function update(Request $request, $id)
    {
        if (preferance::where('pref_id', $id)->exists()) {
        $preferance_update = preferance::findOrFail($id);
        $preferance_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $preferance_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Preferances not found"
              ], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (preferance::where('pref_id', $id)->exists()) {
        $preferance_delete = preferance::findOrFail($id);
        $preferance_delete->delete();
        return response()->json([
            "message" => "Records Deleted Successfully",
            "data"=> $preferance_delete
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Preferances not found"
              ], 404);
        }
    }
}


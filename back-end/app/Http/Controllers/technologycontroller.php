<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\technology;
use Illuminate\Support\Facades\DB;

class technologycontroller extends Controller
{
    public function index()
    {
        return technology::all();
    }
 
    public function show($id)
    {
        if (technology::where('tech_id', $id)->exists()) {
        $technology=technology::find($id);
        return response()->json([
            "message" => "Records Retrived Successfully",
            "data"=> $technology
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Technology not found"
              ], 404);
        }
    }

    public function store(Request $request)
    {
        $technology=technology::create($request->all());
        if($technology)
        {
        return response()->json([
            "success" => 1,
            "data"=> $technology
          ], 200);
        }
        else
        {
            return response()->json([
                "success" => 0
              ], 401);
        }
    }

    public function update(Request $request, $id)
    {
        if (technology::where('tech_id', $id)->exists()) {
        $technology_update = technology::findOrFail($id);
        $technology_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $technology_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Technology not found"
              ], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (technology::where('tech_id', $id)->exists()) {
        $technology_delete = technology::findOrFail($id);
        $technology_delete->delete();
        return response()->json([
            "message" => "Records Deleted Successfully",
            "data"=> $technology_delete
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Technology not found"
              ], 404);
        }
    }
    public function updatetechnology(Request $request)
    {
    if (technology::where('user_id', $request->user_id)->exists()) {
        DB::table('technologies')
        ->where('user_id', $request->user_id)
        ->update(['php' => $request->php,
                  'plevel' => $request->plevel,
                  'mysql'=> $request->mysql,
                  'mlevel'=> $request->mlevel,
                  'laravel'=>$request->laravel,
                  'llevel'=> $request->llevel,
                   'oracle'=> $request->oracle,
                   'olevel'=> $request->olevel]);

                   return response()->json([
                        "message" => "Records Updated Successfully",
                      ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Technology Detail not found"
              ], 404);
        }
    }
}

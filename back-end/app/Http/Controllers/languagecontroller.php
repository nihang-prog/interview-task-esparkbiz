<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\language;
use Illuminate\Support\Facades\DB;

class languagecontroller extends Controller
{
    public function index()
    {
        return language::all();
    }
 
    public function show($id)
    {
        if (language::where('language_id', $id)->exists()) {
        $language=language::find($id);
        return response()->json([
            "message" => "Records Retrived Successfully",
            "data"=> $language
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Language not found"
              ], 404);
        }
    }

    public function store(Request $request)
    {
        $language=language::create($request->all());
        if($language)
        {
        return response()->json([
            "success" => 1,
            "data"=> $language
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
        if (language::where('language_id', $id)->exists()) {
        $language_update = language::findOrFail($id);
        $language_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $language_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Language not found"
              ], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (language::where('language_id', $id)->exists()) {
        $language_delete = language::findOrFail($id);
        $language_delete->delete();
        return response()->json([
            "message" => "Records Deleted Successfully",
            "data"=> $language_delete
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Language not found"
              ], 404);
        }
    }
    public function updatelanguage(Request $request)
    {
    if (language::where('user_id', $request->user_id)->exists()) {
        DB::table('languages')
        ->where('user_id', $request->user_id)
        ->update(['hindi' => $request->hindi,
                  'hread' => $request->hread,
                  'hwrite'=> $request->hwrite,
                  'hspeak'=> $request->hspeak,
                  'english'=>$request->english,
                  'eread'=> $request->eread,
                   'ewrite'=> $request->ewrite,
                   'espeak'=> $request->espeak,
                   'gujarati'=>$request->gujarati,
                   'gread'=> $request->gread,
                   'gwrite'=> $request->gwrite,
                   'gspeak' => $request->gspeak]);

                   return response()->json([
                        "message" => "Records Updated Successfully",
                      ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Language Detail not found"
              ], 404);
        }
    }
}

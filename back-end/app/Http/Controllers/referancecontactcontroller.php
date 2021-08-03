<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\referance_contact;
use Illuminate\Support\Facades\DB;

class referancecontactcontroller extends Controller
{
    public function index()
    {
        return referance_contact::all();
    }
 
    public function show($id)
    {
        if (referance_contact::where('refcon_id', $id)->exists()) {
        $referance_contacts=referance_contact::find($id);
        return response()->json([
            "message" => "Records Retrived Successfully",
            "data"=> $referance_contacts
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Referance Contact not found"
              ], 404);
        }
    }

    public function store(Request $request)
    {
        $referance_contact=referance_contact::create($request->all());
        if($referance_contact)
        {
        return response()->json([
            "success" => 1,
            "data"=> $referance_contact
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
        if (referance_contact::where('refcon_id', $id)->exists()) {
        $referance_contact_update = referance_contact::findOrFail($id);
        $referance_contact_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $referance_contact_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Referance Contact not found"
              ], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (referance_contact::where('refcon_id', $id)->exists()) {
        $referance_contact_delete = referance_contact::findOrFail($id);
        $referance_contact_delete->delete();
        return response()->json([
            "message" => "Records Deleted Successfully",
            "data"=> $referance_contact_delete
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Referance Contact not found"
              ], 404);
        }
    }
    public function updatereferance(Request $request)
    {
    if (referance_contact::where('user_id', $request->user_id)->exists()) {
        DB::table('referance_contacts')
        ->where('user_id', $request->user_id)
        ->update(['ref_name1' => $request->ref_name1,
                  'ref_mobile1' => $request->ref_mobile1,
                  'ref_reloation1'=> $request->ref_reloation1,
                  'ref_name2'=> $request->ref_name2,
                  'ref_mobile2'=>$request->ref_mobile2,
                  'ref_reloation2'=> $request->ref_reloation2]);

                   return response()->json([
                        "message" => "Records Updated Successfully",
                      ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Referance Detail not found"
              ], 404);
        }
    }
}

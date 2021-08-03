<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\education_detail;
use Illuminate\Support\Facades\DB;

class educationdetailcontroller extends Controller
{
    public function index()
    {
        return education_detail::all();
    }
 
    public function show($id)
    {
        if (education_detail::where('edu_id', $id)->exists()) {
        $education_details=education_detail::find($id);
        return response()->json([
            "message" => "Records Retrived Successfully",
            "data"=> $education_details
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Education Detail not found"
              ], 404);
        }
    }

    public function store(Request $request)
    {
            $education_detail=education_detail::create($request->all());
            if($education_detail)
            {
            return response()->json([
                "success" => 1,
                "data"=> $education_detail
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
        if (education_detail::where('edu_id', $id)->exists()) {
        $education_detail_update = education_detail::findOrFail($id);
        $education_detail_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $education_detail_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Education Detail not found"
              ], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (education_detail::where('edu_id', $id)->exists()) {
        $education_detail_delete = education_detail::findOrFail($id);
        $education_detail_delete->delete();
        return response()->json([
            "message" => "Records Deleted Successfully",
            "data"=> $education_detail_delete
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Education Detail not found"
              ], 404);
        }
    }

    public function updateeducation(Request $request)
    {
    if (education_detail::where('user_id', $request->user_id)->exists()) {
        DB::table('education_details')
        ->where('user_id', $request->user_id)
        ->update(['ssc_board_name' => $request->ssc_board_name,
                  'ssc_passing_year' => $request->ssc_passing_year,
                  'ssc_percentage'=> $request->ssc_percentage,
                  'hsc_board_name'=> $request->hsc_board_name,
                  'hsc_passing_year'=>$request->hsc_passing_year,
                  'hsc_percentage'=> $request->hsc_percentage,
                   'degree_course_name'=> $request->degree_course_name,
                   'degree_university'=> $request->degree_university,
                   'degree_passing_year'=>$request->degree_passing_year,
                   'degree_percentage'=> $request->degree_percentage,
                   'master_course_name'=> $request->master_course_name,
                   'master_university' => $request->master_university,
                   'master_passing_year' => $request->master_passing_year,
                   'master_percentage' => $request->master_percentage,]);

                   return response()->json([
                        "message" => "Records Updated Successfully",
                      ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Education Detail not found"
              ], 404);
        }
    }
}

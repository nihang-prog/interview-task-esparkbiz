<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_experience;

class workexperiencecontroller extends Controller
{
    public function index()
    {
        return work_experience::all();
    }
    public function store(Request $request)
    {
            $company_name = count($request->company_name);
            for ($i=0; $i < $company_name ;$i++) { 
                    $work_exp = new work_experience();
                    $work_exp->user_id = $request->user_id;
                    $work_exp->company_name = $request->company_name[$i];
                    $work_exp->designation = $request->designation[$i];
                    $work_exp->from = $request->from[$i];
                    $work_exp->to = $request->to[$i];
                    $work_exp->save();
            }
            return response()->json([
                    "success"=>1,
                    "message" => $company_name,
                  ], 200); 
    }
}

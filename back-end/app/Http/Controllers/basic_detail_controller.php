<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\basic_detail;
use App\Models\work_experience;
use Illuminate\Support\Facades\DB;

class basic_detail_controller extends Controller
{
    public function index()
    {
        return basic_detail::all();
    }
 
    public function show($id)
    {
        if (basic_detail::where('user_id', $id)->exists()) {
        $basic_details=basic_detail::find($id);
        return response()->json([
            "message" => "Records Retrived Successfully",
            "data"=> $basic_details
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Basic Detail not found"
              ], 404);
        }
    }

    public function store(Request $request)
    {
            $basic_details=basic_detail::create($request->all());
            if($basic_details)
            {
            return response()->json([
                "success" => 1,
                "data"=> $basic_details
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
        if (basic_detail::where('user_id', $id)->exists()) {
        $basic_update = basic_detail::findOrFail($id);
        $basic_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $basic_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Basic Detail not found"
              ], 404);
        }
    }

    public function destroy(Request $request, $id)
    {
        if (basic_detail::where('user_id', $id)->exists()) {
        $basic_delete = basic_detail::findOrFail($id);
        $basic_delete->delete();
        return response()->json([
            "message" => "Records Deleted Successfully",
            "data"=> $basic_delete
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Basic Detail not found"
              ], 404);
        }
    }
    public function getapplication(){
        
        $application = DB::table('basic_details')
            ->join('education_details', 'education_details.user_id', '=', 'basic_details.user_id')
            ->join('languages', 'languages.user_id', '=', 'basic_details.user_id')
            ->join('preferances', 'preferances.user_id', '=', 'basic_details.user_id')
            ->join('referance_contacts', 'referance_contacts.user_id', '=', 'basic_details.user_id')
            ->join('technologies', 'technologies.user_id', '=', 'basic_details.user_id')
            ->select('basic_details.*', 'education_details.*','languages.*','preferances.*','referance_contacts.*','technologies.*')
            ->get();
           
        
           if($application==false)
           {
               return response()->json([
                   "status"=>0
               ], 401);
           }
           else{

            $application_array= [];
           
            
            for($i=0,$k=0;$i<count($application);$i++)
            {           
                $obj=new basic_detail();
                 $obj->user_id=$application[$i]->user_id;
                 $obj->fname=$application[$i]->fname;
                 $obj->lname=$application[$i]->lname;
                 $obj->designation=$application[$i]->designation;
                 $obj->address1=$application[$i]->address1;
                 $obj->address2=$application[$i]->address2;
                 $obj->email=$application[$i]->email;
                 $obj->phone=$application[$i]->phone;
                 $obj->city=$application[$i]->city;
                 $obj->state=$application[$i]->state;
                 $obj->zipcode=$application[$i]->zipcode;
                 $obj->gender=$application[$i]->gender;
                 $obj->relstatus=$application[$i]->relstatus;
                 $obj->dob=$application[$i]->dob;
                 $obj->ssc_board_name=$application[$i]->ssc_board_name;
                 $obj->ssc_passing_year=$application[$i]->ssc_passing_year;
                 $obj->ssc_percentage=$application[$i]->ssc_percentage;
                 $obj->hsc_board_name=$application[$i]->hsc_board_name;
                 $obj->hsc_passing_year=$application[$i]->hsc_passing_year;
                 $obj->hsc_percentage=$application[$i]->hsc_percentage;
                 $obj->degree_course_name=$application[$i]->degree_course_name;
                 $obj->degree_university=$application[$i]->degree_university;
                 $obj->degree_passing_year=$application[$i]->degree_passing_year;
                 $obj->degree_percentage=$application[$i]->degree_percentage;
                 $obj->master_course_name=$application[$i]->master_course_name;
                 $obj->master_university=$application[$i]->master_university;
                 $obj->master_passing_year=$application[$i]->master_passing_year;
                 $obj->master_percentage=$application[$i]->master_percentage;
                 $obj->hindi=$application[$i]->hindi;
                 $obj->hread=$application[$i]->hread;
                 $obj->hwrite=$application[$i]->hwrite;
                 $obj->hspeak=$application[$i]->hspeak;
                 $obj->english=$application[$i]->english;
                 $obj->eread=$application[$i]->eread;
                 $obj->ewrite=$application[$i]->ewrite;
                 $obj->espeak=$application[$i]->espeak;
                 $obj->gujarati=$application[$i]->gujarati;
                 $obj->gread=$application[$i]->gread;
                 $obj->gwrite=$application[$i]->gwrite;
                 $obj->gspeak=$application[$i]->gspeak;
                 $obj->prefered_location=$application[$i]->prefered_location;
                 $obj->notice_period=$application[$i]->notice_period;
                 $obj->expexted_ctc=$application[$i]->expexted_ctc;
                 $obj->current_ctc=$application[$i]->current_ctc;
                 $obj->department=$application[$i]->department;
                 $obj->ref_name1=$application[$i]->ref_name1;
                 $obj->ref_mobile1=$application[$i]->ref_mobile1;
                 $obj->ref_reloation1=$application[$i]->ref_reloation1;
                 $obj->ref_name2=$application[$i]->ref_name2;
                 $obj->ref_mobile2=$application[$i]->ref_mobile2;
                 $obj->ref_reloation2=$application[$i]->ref_reloation2;
                 $obj->php=$application[$i]->php;
                 $obj->plevel=$application[$i]->plevel;
                 $obj->mysql=$application[$i]->mysql;
                 $obj->mlevel=$application[$i]->mlevel;
                 $obj->laravel=$application[$i]->laravel;
                 $obj->llevel=$application[$i]->llevel;
                 $obj->oracle=$application[$i]->oracle;
                 $obj->olevel=$application[$i]->olevel;
                



                //  $exp=DB::table('basic_details')
                //      ->join('work_experiences', 'work_experiences.user_id', '=', 'basic_details.user_id')
                //      ->select('work_experiences.*', 'basic_details.*')
                //      ->where('work_experiences.user_id','=',$application[$i]->user_id)
                //      ->get();

                //      $exp_array=[];
   
                //     for($j=0;$j<count($exp);$j++)
                //     { 
                //         $obj1=new work_experience();
                //         $obj1->company_name=$exp[$i]->company_name;
                //         $obj1->designation=$exp[$i]->designation;
                //         $obj1->from=$exp[$i]->from;
                //         $obj1->to=$exp[$i]->to;
                //         $exp_array[$j]=$obj1;
                //     }

                //      $obj->exp=$exp_array;  

                 $application_array[$k++]=$obj;      
        }  
        return response()->json([
            "status"=>1,
            "application"=>$application_array
             
        ], 201);
        
       }
    }
    public function deleteapplication(Request $request){
        if (basic_detail::where('user_id', $request->user_id)->exists()) {
            DB::table("basic_details")->where("user_id", $request->user_id)->delete();
            DB::table("education_details")->where("user_id", $request->user_id)->delete();
            DB::table("languages")->where("user_id", $request->user_id)->delete();
            DB::table("preferances")->where("user_id", $request->user_id)->delete();
            DB::table("referance_contacts")->where("user_id", $request->user_id)->delete();
            DB::table("technologies")->where("user_id", $request->user_id)->delete();
            DB::table("work_experiences")->where("user_id", $request->user_id)->delete();
          
           
            return response()->json([
                "message" => "Records Deleted Successfully",
              ], 200);
            }
            else
            {
                return response()->json([
                    "message" => "Basic Detail not found"
                  ], 404);
            }
    }
    public function editapplication(Request $request,$user_id){
        $user_id=$request->user_id;
        $application = DB::table('basic_details')
            ->join('education_details', 'education_details.user_id', '=', 'basic_details.user_id')
            ->join('languages', 'languages.user_id', '=', 'basic_details.user_id')
            ->join('referance_contacts', 'referance_contacts.user_id', '=', 'basic_details.user_id')
            ->join('technologies', 'technologies.user_id', '=', 'basic_details.user_id')
            ->select('basic_details.*', 'education_details.*','languages.*','referance_contacts.*','technologies.*')
            ->where("basic_details.user_id", $user_id)
            ->get();
           
        
           if($application==false)
           {
               return response()->json([
                   "status"=>0
               ], 401);
           }
           else{

            $application_array= [];
           
            
            for($i=0,$k=0;$i<count($application);$i++)
            {           
                $obj=new basic_detail();
                 $obj->user_id=$application[$i]->user_id;
                 $obj->fname=$application[$i]->fname;
                 $obj->lname=$application[$i]->lname;
                 $obj->designation=$application[$i]->designation;
                 $obj->address1=$application[$i]->address1;
                 $obj->address2=$application[$i]->address2;
                 $obj->email=$application[$i]->email;
                 $obj->phone=$application[$i]->phone;
                 $obj->city=$application[$i]->city;
                 $obj->state=$application[$i]->state;
                 $obj->zipcode=$application[$i]->zipcode;
                 $obj->gender=$application[$i]->gender;
                 $obj->relstatus=$application[$i]->relstatus;
                 $obj->dob=$application[$i]->dob;
                 $obj->ssc_board_name=$application[$i]->ssc_board_name;
                 $obj->ssc_passing_year=$application[$i]->ssc_passing_year;
                 $obj->ssc_percentage=$application[$i]->ssc_percentage;
                 $obj->hsc_board_name=$application[$i]->hsc_board_name;
                 $obj->hsc_passing_year=$application[$i]->hsc_passing_year;
                 $obj->hsc_percentage=$application[$i]->hsc_percentage;
                 $obj->degree_course_name=$application[$i]->degree_course_name;
                 $obj->degree_university=$application[$i]->degree_university;
                 $obj->degree_passing_year=$application[$i]->degree_passing_year;
                 $obj->degree_percentage=$application[$i]->degree_percentage;
                 $obj->master_course_name=$application[$i]->master_course_name;
                 $obj->master_university=$application[$i]->master_university;
                 $obj->master_passing_year=$application[$i]->master_passing_year;
                 $obj->master_percentage=$application[$i]->master_percentage;
                 $obj->hindi=$application[$i]->hindi;
                 $obj->hread=$application[$i]->hread;
                 $obj->hwrite=$application[$i]->hwrite;
                 $obj->hspeak=$application[$i]->hspeak;
                 $obj->english=$application[$i]->english;
                 $obj->eread=$application[$i]->eread;
                 $obj->ewrite=$application[$i]->ewrite;
                 $obj->espeak=$application[$i]->espeak;
                 $obj->gujarati=$application[$i]->gujarati;
                 $obj->gread=$application[$i]->gread;
                 $obj->gwrite=$application[$i]->gwrite;
                 $obj->gspeak=$application[$i]->gspeak;
                 $obj->ref_name1=$application[$i]->ref_name1;
                 $obj->ref_mobile1=$application[$i]->ref_mobile1;
                 $obj->ref_reloation1=$application[$i]->ref_reloation1;
                 $obj->ref_name2=$application[$i]->ref_name2;
                 $obj->ref_mobile2=$application[$i]->ref_mobile2;
                 $obj->ref_reloation2=$application[$i]->ref_reloation2;
                 $obj->php=$application[$i]->php;
                 $obj->plevel=$application[$i]->plevel;
                 $obj->mysql=$application[$i]->mysql;
                 $obj->mlevel=$application[$i]->mlevel;
                 $obj->laravel=$application[$i]->laravel;
                 $obj->llevel=$application[$i]->llevel;
                 $obj->oracle=$application[$i]->oracle;
                 $obj->olevel=$application[$i]->olevel;
                 $application_array[$k++]=$obj;      
        }  
        return response()->json([
            "status"=>1,
            "application"=>$application_array
             
        ], 201);
        
       }
    }
    public function updatebasic(Request $request)
    {
    if (basic_detail::where('user_id', $request->user_id)->exists()) {
        $basic_update = basic_detail::findOrFail($request->user_id);
        $basic_update->update($request->all());
        return response()->json([
            "message" => "Records Updated Successfully",
            "data"=> $basic_update
          ], 200);
        }
        else
        {
            return response()->json([
                "message" => "Basic Detail not found"
              ], 404);
        }
    }
}

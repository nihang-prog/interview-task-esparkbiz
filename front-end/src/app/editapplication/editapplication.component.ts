import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import {FormBuilder, FormGroup,  FormArray,Validators,FormControl} from '@angular/forms';
import { Router } from '@angular/router';
import { JobApplication } from "../service/jobapplication.service";
import { ActivatedRoute } from "@angular/router";

@Component({
  selector: 'app-editapplication',
  templateUrl: './editapplication.component.html',
  styleUrls: ['./editapplication.component.css']
})
export class EditapplicationComponent implements OnInit {
  basicdetails: any =  FormGroup;
  educationdetails: any = FormGroup;
  experiencedetail: any = FormGroup;
  LanguageKnown: any = FormGroup;
  technology: any= FormGroup;
  ReferanceContact: any = FormGroup;
  Preferances: any= FormGroup;
  isLinear = true;
  items:any= FormArray;
  resp: any=[];
  user_id:any;
  isChecked = true;
  isChecked1 = true;
  isChecked2 = true;
  isChecked3 = true;
  isChecked4 = true;
  isChecked5 = true;
  isChecked6 = true;
  user: any;

  
  constructor(private _formBuilder: FormBuilder,
    private jobapplication:JobApplication,public http:HttpClient, private router:Router,private _route:ActivatedRoute,) { }

  ngOnInit(): void {

    this.user_id= parseInt(this._route.snapshot.params['user_id']);
    this.jobapplication.editeapplication(this.user_id).subscribe(res=>{
      this.resp= res;
      this.user= this.resp.application;
     console.log("user_id",this.user);   

    });
    this.basicdetails = this._formBuilder.group({
      fname: ['', Validators.required],
      lname: ['', Validators.required],
      designation: ['', Validators.required],
      address1: ['', Validators.required],
      address2: ['', Validators.required],
      email: ['', Validators.required],
      mobile: ['', Validators.required],
      gender: ['', Validators.required],
      dob: ['', Validators.required],
      rstatus: ['', Validators.required],
      city: ['', Validators.required],
      state: ['', Validators.required],
      zipcode: ['', Validators.required],
    });
    this.educationdetails = this._formBuilder.group({
      nboard: ['', Validators.required],
      pyear: ['', Validators.required],
      percentage: ['', Validators.required],
      hscboard: ['', Validators.required],
      hscyear: ['', Validators.required],
      hscpercentage: ['', Validators.required],
      dcourse: ['', Validators.required],
      duniversity: ['', Validators.required],
      dyear: ['', Validators.required],
      dpercentage: ['', Validators.required],
      mcourse: ['', Validators.required],
      muniversity: ['', Validators.required],
      myear: ['', Validators.required],
      mpercentage: ['', Validators.required]
   
    });
    this.experiencedetail = this._formBuilder.group({
   
      items: this._formBuilder.array([ this.createItem() ])
    });

    this.LanguageKnown = this._formBuilder.group({
      Hindi: [false, Validators.required],
      hread: [false, Validators.required],
      hwrite: [false, Validators.required],
      hspeak: [false, Validators.required],
      English: [false, Validators.required],
      eread: [false, Validators.required],
      ewrite: [false, Validators.required],
      espeak: [false, Validators.required],
      Gujarati: [false, Validators.required],
      gread: [false, Validators.required],
      gwrite: [false, Validators.required],
      gspeak: [false, Validators.required],
    });
    this.technology = this._formBuilder.group({
      PHP: [false, Validators.required],
      LPHP: [''],
      MySql: [false, Validators.required],
      LMySql: [''],
      Laravel: [false, Validators.required],
      LLaravel: [''],
      Oracle: [false, Validators.required],
      LOracle: [''],
    });
    this.ReferanceContact = this._formBuilder.group({
      r1name: ['', Validators.required],
      r1contact: ['', Validators.required],
      r1relation: ['', Validators.required],
      r2name: ['', Validators.required],
      r2contact: ['', Validators.required],
      r2relation: ['', Validators.required],
    });
    this.Preferances = this._formBuilder.group({
      plocation: ['', Validators.required],
      department: ['', Validators.required],
      nperiod: ['', Validators.required],
      cuctc: ['', Validators.required],
      exctc: ['', Validators.required]
    });
  }
  plocation = new FormControl();
  plocationList: string[] = ['Ahmedabad', 'Baroda', 'Rajkot', 'Surat'];
  department = new FormControl();
  departmentList: string[] = ['Developer', 'Designer', 'Marketing'];
 
    removeQuantity(i:number) {
    this.items.removeAt(i);
  }
  
  createItem():FormGroup{
    return this._formBuilder.group({
      cname: ['', Validators.required],
      designation: ['', Validators.required],
      from: ['', Validators.required],
      to: ['', Validators.required],
    })
  }  
  addButton(){
    var cnt=0;
    var amt=0;
    
  if(cnt==0 && amt==0){
    this.items = this.experiencedetail.get('items') as FormArray;
    this.items.push(this.createItem());
  }
  }

  enablenext() {
    if (this.isChecked) {
      this.isChecked = false;
    } else {
      this.isChecked = true;
    }
  }
  enablenext1() {
    if (this.isChecked1) {
      this.isChecked1 = false;
    } else {
      this.isChecked1 = true;
    }
  }
  enablenext2() {
    if (this.isChecked2) {
      this.isChecked2 = false;
    } else {
      this.isChecked2 = true;
    }
  }
  enablenext3() {
    if (this.isChecked3) {
      this.isChecked3 = false;
    } else {
      this.isChecked3 = true;
    }
  }
  enablenext4() {
    if (this.isChecked4) {
      this.isChecked4 = false;
    } else {
      this.isChecked4 = true;
    }
  }
  enablenext5() {
    if (this.isChecked5) {
      this.isChecked5 = false;
    } else {
      this.isChecked5 = true;
    }
  }
  enablenext6() {
    if (this.isChecked6) {
      this.isChecked6 = false;
    } else {
      this.isChecked6 = true;
    }
  }
  
  basicdetail()
  {
    if (this.basicdetails.invalid) {
     console.log("error");
      return;
     
    }else{
      var body={
      "user_id": this.user_id,
      "fname": this.basicdetails.value.fname,
      "lname": this.basicdetails.value.lname,
      "designation": this.basicdetails.value.designation,
      "address1": this.basicdetails.value.address1,
      "address2": this.basicdetails.value.address2,
      "email": this.basicdetails.value.email,
      "phone": this.basicdetails.value.mobile,
      "gender": this.basicdetails.value.gender,
      "dob": this.basicdetails.value.dob,
      "relstatus": this.basicdetails.value.rstatus,
      "city": this.basicdetails.value.city,
      "state": this.basicdetails.value.state,
      "zipcode": this.basicdetails.value.zipcode,
      }
      this.jobapplication.updatebasicdetail(body).subscribe(res=>{
        this.resp = res;
      });
    }
  }
  educationdetail()
  {
    if (this.educationdetails.invalid) {
      console.log("error");
       return; 
     }
     else{
      var body={

      "user_id": this.user_id,
      "ssc_board_name": this.educationdetails.value.nboard,
      "ssc_passing_year": this.educationdetails.value.pyear,
      "ssc_percentage": this.educationdetails.value.percentage,
      "hsc_board_name": this.educationdetails.value.hscboard,
      "hsc_passing_year": this.educationdetails.value.hscyear,
      "hsc_percentage": this.educationdetails.value.hscpercentage,
      "degree_course_name": this.educationdetails.value.dcourse,
      "degree_university": this.educationdetails.value.duniversity,
      "degree_passing_year": this.educationdetails.value.dyear,
      "degree_percentage": this.educationdetails.value.dpercentage,
      "master_course_name": this.educationdetails.value.mcourse,
      "master_university": this.educationdetails.value.muniversity,
      "master_passing_year": this.educationdetails.value.myear,
      "master_percentage": this.educationdetails.value.mpercentage

     
      }
      console.log(body);
      this.jobapplication.updateeducationdetail(body).subscribe(res=>{
        this.resp = res;
      });
    }

  }
  language()
  {
    if (this.LanguageKnown.invalid) {
      console.log("error");
       return;     
     }
     else{
      var body={
      "user_id": this.user_id,
      "hindi": this.LanguageKnown.value.Hindi,
      "hread": this.LanguageKnown.value.hread,
      "hwrite": this.LanguageKnown.value.hwrite,
      "hspeak": this.LanguageKnown.value.hspeak,
      "english": this.LanguageKnown.value.English,
      "eread": this.LanguageKnown.value.eread,
      "ewrite": this.LanguageKnown.value.ewrite,
      "espeak": this.LanguageKnown.value.espeak,
      "gujarati": this.LanguageKnown.value.Gujarati,
      "gread": this.LanguageKnown.value.gread,
      "gwrite": this.LanguageKnown.value.gwrite,
      "gspeak": this.LanguageKnown.value.gspeak,

      }
      console.log(body);
      this.jobapplication.updatelanguagedetail(body).subscribe(res=>{
        this.resp = res;
      });
  }
}
    technologyk()
    {
      if (this.technology.invalid) {
        console.log("error");
         return;     
       }
       else{
        var body={
        "user_id": this.user_id,
        "php": this.technology.value.PHP,
        "plevel": this.technology.value.LPHP,
        "mysql": this.technology.value.MySql,
        "mlevel": this.technology.value.LMySql,
        "laravel": this.technology.value.Laravel,
        "llevel": this.technology.value.LLaravel,
        "oracle": this.technology.value.Oracle,
        "olevel": this.technology.value.LOracle  
        }
        console.log(body);
        
        this.jobapplication.updatetechnologydetail(body).subscribe(res=>{
          this.resp = res;
        });
    }
    }
    referancecontact()
    {
      if (this.ReferanceContact.invalid) {
        console.log("error");
         return;     
       }
       else{
        var body={
        "user_id": this.user_id,
        "ref_name1": this.ReferanceContact.value.r1name,
        "ref_mobile1": this.ReferanceContact.value.r1contact,
        "ref_reloation1": this.ReferanceContact.value.r1relation,
        "ref_name2": this.ReferanceContact.value.r2name,
        "ref_mobile2": this.ReferanceContact.value.r2contact,
        "ref_reloation2": this.ReferanceContact.value.r2relation,
        }
        console.log(body);
        
        this.jobapplication.updatereferancedetail(body).subscribe(res=>{
          this.resp = res;
          this.router.navigate(['/dashboard']);
        });
      }
    }

}

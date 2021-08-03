import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators , FormControl} from '@angular/forms';
import { JobApplication } from "../service/jobapplication.service";
import {Router,ActivatedRoute} from '@angular/router';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {
  departmentStatus:any;
  public gridData: any = [];
  resp:any;
  ress: any=[];
  uniquId: any;
  constructor( private formBuilder: FormBuilder,
    private listingService: JobApplication,private router:Router) { }

  ngOnInit(): void {

    this.listingService.getapplication().subscribe(res=>{
      this.ress=res;
      console.log(this.ress.application);
      this.gridData=this.ress.application;
    });
  }
  delete(id:any){
    this.uniquId=id;
    console.log(this.uniquId);
    var body={
      "user_id":this.uniquId,
       }
       console.log(body);
    this.listingService.deleteapplication(body).subscribe(res=>{
      this.ress= res;
      this.ngOnInit();
      });

 }
 edit(user_id:number)
 {
   this.router.navigate(['/editapplication',user_id]);
 }
 logOut(){

  sessionStorage.clear();
  this.router.navigate(['/login']);
}

  
}

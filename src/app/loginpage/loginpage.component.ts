import { Component, OnInit } from '@angular/core';
import { FormGroup, FormBuilder, Validators , FormControl} from '@angular/forms';
import { LoginService } from '../service/login.service';
import {Router,ActivatedRoute} from '@angular/router';
import {ToastData, ToastOptions, ToastyService} from 'ng2-toasty';
import { MatSnackBar, MatSnackBarHorizontalPosition, MatSnackBarVerticalPosition } from '@angular/material/snack-bar';


@Component({
  selector: 'app-loginpage',
  templateUrl: './loginpage.component.html',
  styleUrls: ['./loginpage.component.css']
})
export class LoginpageComponent implements OnInit {
  horizontalPosition: MatSnackBarHorizontalPosition = "center";
  verticalPosition: MatSnackBarVerticalPosition = "bottom";
  position = 'bottom-right';
  title: any;
  msg: any;
  showClose = true;
  timeout = 5000;
  theme = 'bootstrap';
  type = 'default';
  closeOther = false;
  role:any;
  isSubmitted = false;
  loginfrm:any= FormGroup;
  returnUrl: any;
  r:any=[];
  constructor(private formBuilder: FormBuilder,
    private loginlist:LoginService,
    private router:Router,private toastyService: ToastyService,private sb: MatSnackBar) { }

  ngOnInit(): void {
    this.loginfrm = this.formBuilder.group({
      email: ['',[Validators.required]],
      password: ['',[Validators.required]]
    });
  }
  addToast(msgg:any,type:any) {
    // this.position = this.position;
    const toastOptions: ToastOptions = {
      title: "Mehta Cad Cam",
      msg: msgg,
      showClose: this.showClose,
      timeout: this.timeout,
      theme: this.theme,
      onAdd: (toast: ToastData) => {
        // console.log('Toast ' + toast.id + ' has been added!');
      },
      onRemove: (toast: ToastData) => {
        // console.log('Toast ' + toast.id + ' has been added removed!');
      }
    }
    switch (type) {
      case 'success': this.toastyService.success(toastOptions); break;
      case 'error': this.toastyService.error(toastOptions); break;
    }
    // this.toastyService.success(toastOptions);
  }
  onSubmit(){
    this.isSubmitted = true;
    
    if (this.loginfrm.invalid) {
      return;
    }else{
            var body={
              "email":this.loginfrm.value.email,
              "password":this.loginfrm.value.password
               }
              this.loginlist.login(body).subscribe(res=>{
              this.r= res;
              console.log(this.r.data);
              if(this.r.data!='')
              {
              sessionStorage.setItem("islogin","true");
              this.router.navigate(['/dashboard']);
              this.sb.open("Login Successfully", "", {
                panelClass: ["green-snackbar"],
                horizontalPosition: this.horizontalPosition,
                verticalPosition: this.verticalPosition,
                duration: 2500,
              });
            }
            else
            {
              this.router.navigate(['/login']);
              this.sb.open("Wrong Credential", "", {
                panelClass: ["green-snackbar"],
                horizontalPosition: this.horizontalPosition,
                verticalPosition: this.verticalPosition,
                duration: 2500,
              });
              this.loginfrm.reset();
            }
              
              
    //           if(this.r.data ){
                
    //             this.addToast(this.r.Message,'success');
               
    //            setTimeout(() => {
                 
    //              this.loginfrm.reset();
    //                }, 2000);
    //  }else{
    //     this.addToast(this.r.Message,'error');
  
    //  }

              });
    }
  }
}

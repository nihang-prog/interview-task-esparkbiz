  
import { Injectable, Inject } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { environment } from 'src/environments/environment';


const api = environment.Base_Url + 'login';

@Injectable({
    providedIn:'root'
})
export class LoginService{

    constructor(private http:HttpClient){}

    login(body:any):Observable<any[]>{
        console.log(body);
        return this.http.post<any[]>(api,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));

    }

  
}
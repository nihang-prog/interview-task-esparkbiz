  
import { Injectable, Inject } from '@angular/core';
import { Observable } from 'rxjs';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { map } from 'rxjs/operators';
import { environment } from 'src/environments/environment';


const api = environment.Base_Url ;


@Injectable({
    providedIn:'root'
})

export class JobApplication{

    constructor(private http:HttpClient){}

    createbasicdetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`basic_detail/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    createeducationdetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`education/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    createlanguagedetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`language/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    createtechnolgydetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`technology/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    createreferancedetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`ref_contact/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    createexperiencedetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`work_exp/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    createpreferancedetail(body:any):Observable<any[]>{
        return this.http.post<any[]>(api+`preferance/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    getapplication():Observable<any[]>{
        return this.http.get<any[]>(api+`getapplication/`,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
        
    }
    deleteapplication(body:any):Observable<any[]>{
        return this.http.patch<any[]>(api+`deleteapplication/`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
        
    }
    editeapplication(user_id:any):Observable<any[]>{
        return this.http.get<any[]>(api+`editapplication/`+user_id,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
        
    }
    updatebasicdetail(body:any):Observable<any[]>{
        return this.http.patch<any[]>(api+`updatebasic`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    updateeducationdetail(body:any):Observable<any[]>{
        return this.http.patch<any[]>(api+`updateeducation`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    updatelanguagedetail(body:any):Observable<any[]>{
        return this.http.patch<any[]>(api+`updatelanguage`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    updatetechnologydetail(body:any):Observable<any[]>{
        return this.http.patch<any[]>(api+`updatetechnology`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }
    updatereferancedetail(body:any):Observable<any[]>{
        return this.http.patch<any[]>(api+`updatereferance`,body,{headers:new HttpHeaders({'Content-Type':'application/json'})})
        .pipe(map(res => res));
    }

  
}
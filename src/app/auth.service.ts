import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class AuthService {
  errorData: any={};
  constructor(private http: HttpClient) {  }
  redirectUrl: any;
  
  isLoggedIn() {
    if (sessionStorage.getItem('islogin')) {
      return true;
    }
    return false;
  }
  // getAuthorizationToken() {
  //   const currentUser = JSON.parse(localStorage.getItem('islogin'));
  //   return currentUser;
  // }
  logout() {
    localStorage.removeItem('islogin');
  }
}
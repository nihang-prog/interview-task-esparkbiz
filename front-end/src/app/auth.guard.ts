import { Injectable } from "@angular/core";
import {
  CanActivate,
  ActivatedRouteSnapshot,
  RouterStateSnapshot,
  UrlTree,
  Router,
} from "@angular/router";
import { Observable } from "rxjs";
import { AuthService } from "./auth.service";
@Injectable({
  providedIn: "root",
})
export class AuthGuard implements CanActivate {
  constructor(private service: AuthService, private router: Router) {}
  canActivate(
    route: ActivatedRouteSnapshot,
    state: RouterStateSnapshot
  ): Observable<boolean> | Promise<boolean> | boolean {
    // const url: string = state.url;
    return this.checkLogin(state.url);
  }
  // canActivateChild(route: ActivatedRouteSnapshot, state: RouterStateSnapshot): boolean {
  //   return this.canActivate(route, state);
  // }
  checkLogin(url:any): Observable<boolean> | Promise<boolean> | boolean {
    if (this.service.isLoggedIn()) {
      return true;
    }
    // this.service.redirectUrl = url;
    this.router.navigate(["/login"], { queryParams: { returnUrl: url } });
    return false;
  }
}
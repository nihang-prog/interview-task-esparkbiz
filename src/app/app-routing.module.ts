import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { ApplicationComponent } from './application/application.component';
import { ApplicationformComponent } from './applicationform/applicationform.component';
import { AuthGuard } from './auth.guard';
import { DashboardComponent } from './dashboard/dashboard.component';
import { EditapplicationComponent } from './editapplication/editapplication.component';
import { LoginpageComponent } from './loginpage/loginpage.component';
import { PagenotfoundComponent } from './pagenotfound/pagenotfound.component';

const routes: Routes = [
  { path:'', component:ApplicationformComponent},
  { path:'home', component:ApplicationformComponent},
  { path:'login', component:LoginpageComponent},
  { path:'dashboard', component:DashboardComponent,pathMatch:"full",canActivate:[AuthGuard]},
  { path:'application', component:ApplicationComponent,canActivate:[AuthGuard]},
  { path:'editapplication/:user_id', component:EditapplicationComponent,canActivate:[AuthGuard]},
  {path:'**',component:PagenotfoundComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

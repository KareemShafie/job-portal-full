import { Routes } from '@angular/router';
import { HomeComponent } from './components/home/home.component';
import { JobSearchPageComponent } from './component/job-search-page/job-search-page/job-search-page.component';



export const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'jobs', component: JobSearchPageComponent }
];



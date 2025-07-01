import { bootstrapApplication } from '@angular/platform-browser';
import { provideRouter, Routes } from '@angular/router';
import { importProvidersFrom } from '@angular/core';
import { provideHttpClient } from '@angular/common/http';
import { HomeComponent } from './app/components/home/home.component';
import { JobSearchPageComponent } from './app/component/job-search-page/job-search-page/job-search-page.component';
import { AppComponent } from './app/app.component';

const routes: Routes = [
  { path: '', component: HomeComponent },
  { path: 'jobs', component: JobSearchPageComponent }
];

bootstrapApplication(AppComponent, {
  providers: [
    provideRouter(routes),
    provideHttpClient()
  ]
});

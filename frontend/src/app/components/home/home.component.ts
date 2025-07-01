import { Component } from '@angular/core';
import { HeaderComponent } from "../header/header.component";
import { JobListingsComponent } from "../job-listings/job-listings.component";
import { EmployerBenefitsComponent } from "../employer-benefits/employer-benefits.component";
import { JobSearchComponent } from "../job-search/job-search.component";
import { RouterModule } from '@angular/router';

@Component({
  standalone: true,
  selector: 'app-home',
  imports: [HeaderComponent, JobListingsComponent, EmployerBenefitsComponent, JobSearchComponent,RouterModule],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent {

}

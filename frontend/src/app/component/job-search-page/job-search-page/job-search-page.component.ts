import { Component, OnInit } from '@angular/core';
import { SidebarFiltersComponent } from "../sidebar-filters/sidebar-filters.component";
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { JobService } from '../../../job.service';

@Component({
  selector: 'app-job-search-page',
  standalone: true,
  imports: [SidebarFiltersComponent, CommonModule, FormsModule],
  templateUrl: './job-search-page.component.html',
  styleUrls: ['./job-search-page.component.css']
})
export class JobSearchPageComponent implements OnInit {
  filters: any = {
    title: '',
    location: '',
    salary_from: '',
    salary_to: '',
    job_type: '',
    experience_level: '',
    company_id: '',
    sector: '',
    company_size: ''
  };

  jobs: any[] = [];
  showModal: boolean = false;
  filteredJobs: any;

  constructor(private jobService: JobService) {}

  ngOnInit(): void {
    this.getJobs(); // تحميل أولي
  }

  getJobs() {
  this.jobService.getJobs(this.filters).subscribe((res) => {
    this.jobs = res.data || res;
  });
}



  onFilterChange(newFilters: any) {
    this.filters = { ...this.filters, ...newFilters };
    this.getJobs();
  }

openModal(jobTitle: string) {
  this.selectedJobTitle = jobTitle;
  this.showModal = true;
}


  closeModal() {
    this.showModal = false;
  }
  selectedJobTitle: string = '';

}

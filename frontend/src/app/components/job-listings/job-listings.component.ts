import { Component, OnInit } from '@angular/core';
import { CommonModule } from '@angular/common';
import { JobService } from '../../job.service';

@Component({
  selector: 'app-job-listings',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './job-listings.component.html',
    styleUrls: ['./job-listings.component.css']

})
export class JobListingsComponent implements OnInit {
  allJobs: any[] = [];
  visibleJobs = 3;

  constructor(private jobService: JobService) {}

  ngOnInit(): void {
    this.jobService.getJobs().subscribe((res: any) => {
      console.log('API Response:', res); // للتأكد من استلام البيانات
      this.allJobs = res.data; // استخدم res.data لأن هذا هو مكان البيانات
    });
  }

  get jobsToShow() {
    return this.allJobs.slice(0, this.visibleJobs);
  }

  showMoreJobs() {
    this.visibleJobs = this.allJobs.length;
  }

  showLessJobs() {
    this.visibleJobs = 3;
  }

  applyToJob(jobTitle: string) {
  alert(`✅ Your application for "${jobTitle}" has been submitted successfully! We'll get back to you soon.`);
}

showModal: boolean = false;
selectedJobTitle: string = '';

openApplyModal(jobTitle: string) {
  this.selectedJobTitle = jobTitle;
  this.showModal = true;
}
closeModal() {
  this.showModal = false;
}



}

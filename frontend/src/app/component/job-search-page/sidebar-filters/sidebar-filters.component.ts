import { Component, Output, EventEmitter } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-sidebar-filters',
  standalone: true,
  imports: [FormsModule, CommonModule],
  templateUrl: './sidebar-filters.component.html',
  styleUrls: ['./sidebar-filters.component.css']
})
export class SidebarFiltersComponent {
  filters = {
    title: '',
    location: '',
    salary_from: '',
    salary_to: '',
    job_type: '',
    experience_level: '',
    company_id: '',
    company_size: '',
    sector: ''
  };

  @Output() filterChange = new EventEmitter<any>();

  applyFilters() {
    this.filterChange.emit(this.filters);
  }
}

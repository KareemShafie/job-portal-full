import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-employer-benefits',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './employer-benefits.component.html',
  styleUrls: ['./employer-benefits.component.css']
})
export class EmployerBenefitsComponent {
  benefits = [
    {
      image: 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png',
      title: 'Access to Talent',
      description: 'Reach a wide pool of qualified candidates quickly and easily.'
    },
    {
      image: 'https://cdn-icons-png.flaticon.com/512/1828/1828817.png',
      title: 'Smart Matching',
      description: 'AI-powered system matches employers with best-fit candidates.'
    },
    {
      image: 'https://cdn-icons-png.flaticon.com/512/4761/4761637.png',
      title: 'Save Time',
      description: 'Streamline your hiring process and reduce manual work.'
    }
  ];
}

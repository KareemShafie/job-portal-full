import { Component } from '@angular/core';
import { JobCardComponent } from "./job-card/job-card.component";
import { CommonModule } from '@angular/common';


@Component({
  selector: 'app-job-list',
  templateUrl: './job-list.component.html',
  styleUrls: ['./job-list.component.css'],
  imports: [CommonModule,JobCardComponent]
})
export class JobListComponent {
  jobs = [
    {
      title: 'UI/UX Designer',
      description: 'Design engaging user interfaces for our web apps.',
      salary: '$80,000 / year',
      image: 'https://amadine.com/assets/img/articles/ux-vs-ui/ux-vs-ui-design@2x.png'
    },
    {
      title: 'Frontend Developer',
      description: 'Build responsive web pages using Angular.',
      salary: '$90,000 / year',
      image: 'https://media.licdn.com/dms/image/v2/D5612AQFfhTEictqBHA/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1721174916441?e=2147483647&v=beta&t=IqnGNJxS4J-yaL4rgLBlx-cbNAbFwpEMCRvkkLXsR48'
    },
    {
      title: 'Backend Engineer',
      description: 'Develop scalable APIs and microservices.',
      salary: '$100,000 / year',
      image: 'https://wallpapercave.com/wp/wp10318694.png'
    },
    {
      title: 'Data Analyst',
      description: 'Analyze large datasets and provide insights.',
      salary: '$75,000 / year',
      image: 'https://d2nzy1qhita6w.cloudfront.net/media/magefan_blog/data-analysis-skills-duties-responsibilities.jpeg'
    },
    {
      title: 'Project Manager',
      description: 'Lead cross-functional teams to deliver on-time.',
      salary: '$95,000 / year',
      image: 'https://www.feedough.com/wp-content/uploads/2021/09/project-manager-1024x576.webp'
    },
    {
      title: 'Mobile Developer',
      description: 'Build Android/iOS apps using Flutter or React Native.',
      salary: '$85,000 / year',
      image: 'https://riseuplabs.com/wp-content/uploads/2021/07/mobile-application-development-guidelines-riseuplabs.jpg'
    },
    {
      title: 'QA Tester',
      description: 'Ensure product quality through automated and manual tests.',
      salary: '$70,000 / year',
      image: 'https://img.freepik.com/free-vector/software-tester-concept-illustration_114360-11976.jpg?semt=ais_hybrid&w=740'
    },
    {
      title: 'DevOps Engineer',
      description: 'Manage CI/CD pipelines and cloud infrastructure.',
      salary: '$105,000 / year',
      image: 'https://tera-media.s3.amazonaws.com/service-multimedia/330014895-photo_1-14925'
    },
    {
      title: 'Content Writer',
      description: 'Create engaging content for web and marketing.',
      salary: '$60,000 / year',
      image: 'https://t3.ftcdn.net/jpg/02/09/29/20/360_F_209292016_QCvkJIZ5z5q9pnbp04p99tWu1ATmOvJf.jpg'
    }
  ];
}


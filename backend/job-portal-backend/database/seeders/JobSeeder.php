<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        // شركات
        $companies = [
            [
                'name' => 'Google',
                'logo' => 'https://logo.clearbit.com/google.com',
                'type' => 'Tech',
                'size' => '10000+',
                'sector' => 'Internet Services',
                'address' => '1600 Amphitheatre Parkway',
                'city' => 'Mountain View',
                'country' => 'USA',
            ],
            [
                'name' => 'Amazon',
                'logo' => 'https://logo.clearbit.com/amazon.com',
                'type' => 'E-Commerce',
                'size' => '10000+',
                'sector' => 'Retail',
                'address' => '410 Terry Ave',
                'city' => 'Seattle',
                'country' => 'USA',
            ],
            [
                'name' => 'Spotify',
                'logo' => 'https://logo.clearbit.com/spotify.com',
                'type' => 'Entertainment',
                'size' => '5000+',
                'sector' => 'Music Streaming',
                'address' => 'Regeringsgatan 19',
                'city' => 'Stockholm',
                'country' => 'Sweden',
            ],
            [
                'name' => 'Careem',
                'logo' => 'https://logo.clearbit.com/careem.com',
                'type' => 'Transportation',
                'size' => '3000+',
                'sector' => 'Ride Sharing',
                'address' => 'Business Bay',
                'city' => 'Dubai',
                'country' => 'UAE',
            ],
        ];

        $companyModels = [];

        foreach ($companies as $data) {
            $companyModels[] = Company::create($data);
        }

        $jobs = [
            ['Software Engineer', 'Build scalable backend systems in Go and Python.', '$7000', 'Mountain View', 0, 'Full Time', 'Mid-Level', 'https://pbs.twimg.com/media/Fgu2wFcX0AAdJQJ?format=jpg&name=4096x4096'],
            ['Frontend Developer', 'Work with React and TypeScript to create UI components.', '$6500', 'Seattle', 1, 'Full Time', 'Junior', 'https://www.interviewbit.com/blog/wp-content/uploads/2021/08/2.jpg'],
            ['Data Scientist', 'Analyze massive datasets using ML techniques.', '$8000', 'Stockholm', 2, 'Full Time', 'Senior', 'https://blog.accredian.com/wp-content/uploads/2022/01/31.png'],
            ['Mobile App Developer', 'Flutter and Android development for super apps.', '$5000', 'Dubai', 3, 'Contract', 'Junior', 'https://www.imagesretailme.com/wp-content/uploads/2020/06/Careem-Super-App.jpg'],
            ['Product Manager', 'Define roadmap and strategy for SaaS product.', '$9000', 'Mountain View', 0, 'Full Time', 'Senior', 'https://miro.medium.com/v2/resize:fit:1400/1*AIDeuIdINRRZudeTPcIeIg.jpeg'],
            ['Cloud Engineer', 'Maintain AWS infrastructure and CI/CD pipelines.', '$7500', 'Seattle', 1, 'Full Time', 'Mid-Level', 'https://cdn-employer-wp.arc.dev/wp-content/uploads/2022/03/aws-cloud-engineer-job-description-1128x635.jpg'],
            ['UX/UI Designer', 'Design intuitive user interfaces and experiences.', '$4800', 'Stockholm', 2, 'Part Time', 'Fresher', 'https://miro.medium.com/v2/resize:fit:1400/1*VnWaQTFC6AdnbggQNLc37g.png'],
            ['Customer Support Specialist', 'Support users across MENA region.', '$3000', 'Dubai', 3, 'Full Time', 'Fresher', 'https://jobsoidstorage.blob.core.windows.net/job-images/JobDescription/Image/45-customer-support-specialist-20200115092724654.png'],
            ['AI Researcher', 'Research cutting-edge AI models.', '$10000', 'Mountain View', 0, 'Full Time', 'Senior', 'https://www.reuters.com/resizer/v2/I3WWQHWNQVMJRMAD6E5N6O3YJE.jpg?auth=9a265be5ba2727ee3849029e77bc4c2cd1b3d084f02f15618e7813bd9e23a815&width=4000&quality=80'],
            ['DevOps Engineer', 'Automate deployments and infrastructure.', '$7200', 'Seattle', 1, 'Full Time', 'Mid-Level', 'https://media.licdn.com/dms/image/v2/D5610AQE8Q05JKCE9Kg/image-shrink_800/image-shrink_800/0/1730289265796?e=2147483647&v=beta&t=NC8somUNyRnKwgcBeDJZsOleVCo3r0I4dGtCbF-31IY'],
            ['Marketing Specialist', 'Create and execute campaigns.', '$4500', 'Dubai', 3, 'Part Time', 'Junior', 'https://cdn.prod.website-files.com/62aae3a2134cd27204efacc7/671110c2ff5112e19c588342_Mrsool%20Marketing%20Tips%20(1).webp'],
            ['Backend PHP Developer', 'Maintain Laravel apps.', '$5600', 'Amman', 1, 'Full Time', 'Mid-Level', 'https://www.interviewbit.com/blog/wp-content/uploads/2021/08/php-developer.jpg'],
            ['Data Analyst', 'Work on reports and dashboards.', '$5000', 'Stockholm', 2, 'Full Time', 'Junior', 'https://d2nzy1qhita6w.cloudfront.net/media/magefan_blog/data-analysis-skills-duties-responsibilities.jpeg'],
            ['QA Engineer', 'Test web and mobile apps.', '$4000', 'Dubai', 3, 'Full Time', 'Fresher', 'https://jobsoidstorage.blob.core.windows.net/job-images/JobDescription/Image/21-qa-engineer-20200115114001847.png'],
            ['Android Developer', 'Native apps with Kotlin.', '$6000', 'Mountain View', 0, 'Contract', 'Junior', 'https://jobsoidstorage.blob.core.windows.net/job-images/JobDescription/Image/23-android-developer-20200115114032269.png'],
            ['iOS Developer', 'Develop iOS apps in Swift.', '$6100', 'Seattle', 1, 'Full Time', 'Mid-Level', 'https://miro.medium.com/v2/resize:fit:1400/1*sPybX1iud_B3xTYcIm12gA.png'],
            ['Graphic Designer', 'Create visuals for social media.', '$3500', 'Stockholm', 2, 'Part Time', 'Fresher', 'https://uiuxjobsboard.com/img/job?h=Spotify+is+hiring&t=UX+Designer&n=Stockholm+Sweden'],
            ['HR Officer', 'Manage hiring and onboarding.', '$4000', 'Dubai', 3, 'Full Time', 'Mid-Level', 'https://www.timetraining.ae/uploads/studyhub/Professionals_discuss_about_hr_career_path_with_job_roles_and_their_salary.webp'],
            ['Cybersecurity Analyst', 'Monitor and protect systems.', '$8200', 'Mountain View', 0, 'Full Time', 'Senior', 'https://cdn.prod.website-files.com/5b6df8bb681f89c158b48f6b/5dada565f24b4ec098962c7b_cyber-security-analyst.jpg'],
            ['Business Analyst', 'Bridge business and tech.', '$6800', 'Seattle', 1, 'Full Time', 'Mid-Level', 'https://theinterviewguys.com/wp-content/uploads/2020/02/business-analyst-job-description.png'],
        ];

        foreach ($jobs as [$title, $description, $salary, $location, $companyIndex, $jobType, $experienceLevel, $image]) {
            Job::create([
                'title' => $title,
                'description' => $description,
                'salary' => $salary,
                'location' => $location,
                'company_id' => $companyModels[$companyIndex]->id,
                'job_type' => $jobType,
                'experience_level' => $experienceLevel,
                'image' => $image,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

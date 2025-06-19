<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobOpportunitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobopportunity')->insert([
            // SALES CATEGORY - 5 entries
            [
                'title' => 'Sales Representative',
                'salary' => '20000-60000',
                'requirements' => 'Communication Skills, Sales Experience, Customer Service',
                'placement' => 'Hybrid',
                'description' => 'We are looking for a dynamic Sales Representative to drive revenue growth and build client relationships.',
                'videourl' => 'https://example.com/sales-rep-video',
            ],
            [
                'title' => 'Business Development Manager',
                'salary' => '35000-80000',
                'requirements' => 'Business Development, Negotiation, Strategic Planning',
                'placement' => 'On-site',
                'description' => 'Join our team as a Business Development Manager to identify new market opportunities and partnerships.',
                'videourl' => 'https://example.com/biz-dev-video',
            ],
            [
                'title' => 'Inside Sales Specialist',
                'salary' => '18000-50000',
                'requirements' => 'Phone Sales, CRM Software, Lead Generation',
                'placement' => 'Remote',
                'description' => 'We are seeking an Inside Sales Specialist to convert leads into customers through phone and email outreach.',
                'videourl' => 'https://example.com/inside-sales-video',
            ],
            [
                'title' => 'Account Manager',
                'salary' => '25000-70000',
                'requirements' => 'Account Management, Relationship Building, Sales Analytics',
                'placement' => 'Hybrid',
                'description' => 'We need an Account Manager to maintain and grow relationships with existing clients.',
                'videourl' => 'https://example.com/account-manager-video',
            ],
            [
                'title' => 'Sales Coordinator',
                'salary' => '15000-40000',
                'requirements' => 'Administrative Skills, Sales Support, Data Entry',
                'placement' => 'On-site',
                'description' => 'We are looking for a Sales Coordinator to support our sales team with administrative tasks and client communication.',
                'videourl' => 'https://example.com/sales-coordinator-video',
            ],

            // TUTORING CATEGORY - 5 entries
            [
                'title' => 'Mathematics Tutor',
                'salary' => '12000-35000',
                'requirements' => 'Mathematics Degree, Teaching Experience, Patience',
                'placement' => 'Remote',
                'description' => 'We are seeking a qualified Mathematics Tutor to help students excel in math subjects from elementary to high school level.',
                'videourl' => 'https://example.com/math-tutor-video',
            ],
            [
                'title' => 'English Language Tutor',
                'salary' => '10000-30000',
                'requirements' => 'English Proficiency, ESL Certification, Communication Skills',
                'placement' => 'Remote',
                'description' => 'Join our team as an English Language Tutor to help non-native speakers improve their English skills.',
                'videourl' => 'https://example.com/english-tutor-video',
            ],
            [
                'title' => 'Science Tutor',
                'salary' => '13000-38000',
                'requirements' => 'Science Background, Laboratory Experience, Curriculum Knowledge',
                'placement' => 'Hybrid',
                'description' => 'We are looking for a Science Tutor to provide personalized instruction in biology, chemistry, and physics.',
                'videourl' => 'https://example.com/science-tutor-video',
            ],
            [
                'title' => 'Programming Tutor',
                'salary' => '20000-55000',
                'requirements' => 'Programming Skills, Web Development, Teaching Ability',
                'placement' => 'Remote',
                'description' => 'We need a Programming Tutor to teach coding skills including HTML, CSS, JavaScript, and Python to students.',
                'videourl' => 'https://example.com/programming-tutor-video',
            ],
            [
                'title' => 'Test Prep Tutor',
                'salary' => '15000-45000',
                'requirements' => 'Test Preparation, Academic Coaching, Study Strategies',
                'placement' => 'Hybrid',
                'description' => 'We are seeking a Test Prep Tutor to help students prepare for standardized tests and entrance exams.',
                'videourl' => 'https://example.com/test-prep-video',
            ],

            // FREELANCE CATEGORY - 5 entries
            [
                'title' => 'Freelance Graphic Designer',
                'salary' => '8000-45000',
                'requirements' => 'Adobe Creative Suite, Portfolio, Design Thinking',
                'placement' => 'Remote',
                'description' => 'We are looking for a talented Freelance Graphic Designer to create visual content for various client projects.',
                'videourl' => 'https://example.com/graphic-designer-video',
            ],
            [
                'title' => 'Freelance Content Writer',
                'salary' => '6000-35000',
                'requirements' => 'Writing Skills, SEO Knowledge, Research Abilities',
                'placement' => 'Remote',
                'description' => 'Join our network as a Freelance Content Writer to create engaging articles, blog posts, and web content.',
                'videourl' => 'https://example.com/content-writer-video',
            ],
            [
                'title' => 'Freelance Web Developer',
                'salary' => '15000-75000',
                'requirements' => 'HTML/CSS, JavaScript, Responsive Design, Version Control',
                'placement' => 'Remote',
                'description' => 'We need a skilled Freelance Web Developer to build and maintain websites for our diverse client base.',
                'videourl' => 'https://example.com/web-developer-video',
            ],
            [
                'title' => 'Freelance Social Media Manager',
                'salary' => '10000-40000',
                'requirements' => 'Social Media Strategy, Content Creation, Analytics Tools',
                'placement' => 'Remote',
                'description' => 'We are seeking a Freelance Social Media Manager to handle social media accounts and campaigns for multiple clients.',
                'videourl' => 'https://example.com/social-media-video',
            ],
            [
                'title' => 'Freelance Virtual Assistant',
                'salary' => '5000-25000',
                'requirements' => 'Administrative Skills, Time Management, Communication',
                'placement' => 'Remote',
                'description' => 'We are looking for a reliable Freelance Virtual Assistant to provide administrative support to busy professionals.',
                'videourl' => 'https://example.com/virtual-assistant-video',
            ],
        ]);
    }
}

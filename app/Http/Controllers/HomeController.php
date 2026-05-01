<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $services = [
            [
                'icon' => 'bi bi-globe2',
                'title' => 'Web Development',
                'description' => 'Responsive business websites, landing pages, portals, and user-friendly web experiences built to present your brand clearly.',
                'points' => ['Company Website', 'Landing Page', 'Responsive Layout'],
            ],
            [
                'icon' => 'bi bi-code-slash',
                'title' => 'Software Development',
                'description' => 'Custom Laravel software, dashboards, admin panels, workflow tools, and scalable applications designed around real business operations.',
                'points' => ['Laravel App', 'Dashboard', 'Business Automation'],
            ],
            [
                'icon' => 'bi bi-palette2',
                'title' => 'Graphic Design',
                'description' => 'Brand graphics, digital creatives, social media designs, and visual assets that keep your business presentation polished and consistent.',
                'points' => ['Brand Visuals', 'Social Design', 'Marketing Creative'],
            ],
            [
                'icon' => 'bi bi-megaphone',
                'title' => 'Digital Marketing',
                'description' => 'SEO, paid promotions, campaign planning, and conversion-focused marketing support to grow visibility and bring in better leads.',
                'points' => ['SEO', 'Paid Campaign', 'Lead Generation'],
            ],
            [
                'icon' => 'bi bi-cpu',
                'title' => 'AI Solutions',
                'description' => 'AI-powered assistants, smart workflows, chatbot ideas, and productivity solutions that help businesses save time and scale service delivery.',
                'points' => ['AI Automation', 'Smart Assistant', 'Workflow Support'],
            ],
        ];

        $heroHighlights = [
            [
                'title' => 'Clean design that feels easy to use',
                'text' => 'Simple structure, better spacing, and clear calls to action that help visitors understand your services quickly.',
            ],
            [
                'title' => 'Solid Laravel development',
                'text' => 'Reliable business websites and custom software built on a maintainable Laravel and Bootstrap 5 foundation.',
            ],
            [
                'title' => 'Growth support beyond the website',
                'text' => 'Design, marketing, and AI services work together so your online presence keeps improving after launch.',
            ],
        ];

        $whyChoose = [
            [
                'title' => 'User-friendly by default',
                'text' => 'Every section is structured to feel clean, readable, and easy for clients to navigate on desktop or mobile.',
            ],
            [
                'title' => 'Business-focused development',
                'text' => 'The goal is not just to make something look nice. It should help your business present services, build trust, and generate leads.',
            ],
            [
                'title' => 'One partner for multiple needs',
                'text' => 'dotOrbit combines web, software, design, marketing, and AI support so your digital work stays aligned.',
            ],
        ];

        $capabilities = [
            'Professional service-focused homepage layout',
            'Laravel-based structure with Bootstrap 5 frontend',
            'Clear service presentation for better conversion',
            'Graphic and marketing support-ready brand positioning',
            'AI service integration for future-ready offerings',
            'Responsive design that stays clean on mobile devices',
        ];

        $processSteps = [
            [
                'step' => '01',
                'title' => 'Discover',
                'text' => 'We understand your business, target audience, service priorities, and the exact result you want the website or system to achieve.',
            ],
            [
                'step' => '02',
                'title' => 'Design',
                'text' => 'We shape a clean structure, polished visuals, and a user-friendly experience that reflects your brand properly.',
            ],
            [
                'step' => '03',
                'title' => 'Develop',
                'text' => 'We build the website or software in Laravel and Bootstrap 5 with responsive layout, maintainable code, and practical performance.',
            ],
            [
                'step' => '04',
                'title' => 'Launch & Grow',
                'text' => 'After launch, dotOrbit can continue with updates, design support, marketing execution, and AI-driven improvements.',
            ],
        ];

        $audienceCards = [
            [
                'title' => 'Service businesses',
                'text' => 'Ideal for businesses that need a polished website to explain services clearly and bring in more quality inquiries.',
            ],
            [
                'title' => 'Growing companies',
                'text' => 'A strong fit for teams that need custom software, better internal systems, and consistent digital presentation.',
            ],
            [
                'title' => 'Modern brands',
                'text' => 'Perfect for businesses ready to combine design, marketing, and AI ideas into one stronger online presence.',
            ],
        ];

        return view('home', compact(
            'services',
            'heroHighlights',
            'whyChoose',
            'capabilities',
            'processSteps',
            'audienceCards',
        ));
    }
}

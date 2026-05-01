@extends('layouts.app')

@section('title', 'dotOrbit | Web Development, Software, Design, Marketing & AI')
@section('meta_description', 'dotOrbit provides Web Development, Software Development, Graphic Design, Digital Marketing, and AI solutions for modern businesses.')

@section('content')
    <nav class="navbar navbar-expand-lg fixed-top site-navbar">
        <div class="container">
            <a class="navbar-brand brand-wrap" href="#home">
                <img src="{{ asset('assets/images/logo.png') }}" alt="dotOrbit" class="brand-logo" width="151" height="29">
                <span class="visually-hidden">dotOrbit</span>
            </a>

            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="mainNav">
                <ul class="navbar-nav align-items-lg-center gap-lg-2">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#process">Process</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    <li class="nav-item ms-lg-2 mt-3 mt-lg-0">
                        <a class="btn btn-brand" href="mailto:hello@dotorbits.com?subject=Project%20Inquiry">Start Project</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="hero-section" id="home">
        <div class="hero-glow glow-left"></div>
        <div class="hero-glow glow-right"></div>

        <div class="container position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="hero-badge">Web Development / Software Development / Graphic Design / Digital Marketing / AI</span>
                    <h1 class="hero-title mt-4">
                        Clean digital solutions that help your business look professional and grow faster.
                    </h1>
                    <p class="hero-copy mt-4 mb-0">
                        dotOrbit builds modern websites, custom software, creative visuals, digital marketing campaigns, and
                        AI-powered solutions for businesses that want a stronger online presence.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a class="btn btn-brand" href="#contact">Book a Consultation</a>
                        <a class="btn btn-soft" href="#services">View Services</a>
                    </div>

                    <div class="hero-pill-row mt-5">
                        @foreach ($services as $service)
                            <span class="hero-pill">{{ $service['title'] }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="showcase-card">
                        <div class="showcase-top">
                            <span class="mini-kicker">Why dotOrbit</span>
                            <h2 class="showcase-title">Simple, polished, and built to support real business goals.</h2>
                            <p class="showcase-copy mb-0">
                                A cleaner structure, clearer service messaging, and a better user experience make the whole
                                website feel more trustworthy.
                            </p>
                        </div>

                        <div class="showcase-list mt-4">
                            @foreach ($heroHighlights as $item)
                                <div class="showcase-item">
                                    <h3>{{ $item['title'] }}</h3>
                                    <p>{{ $item['text'] }}</p>
                                </div>
                            @endforeach
                        </div>

                        <div class="showcase-footer mt-4">
                            <span>Built with Laravel + Bootstrap 5</span>
                            <span class="status-chip">Ready for launch</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="section-block" id="services">
        <div class="container">
            <div class="section-head text-center mx-auto">
                <span class="section-label">Core Services</span>
                <h2 class="section-title mt-3">Everything your business needs to build a stronger digital presence.</h2>
                <p class="section-copy mt-3 mb-0">
                    dotOrbit combines development, design, marketing, and AI into one clean service structure so clients can
                    understand your value quickly.
                </p>
            </div>

            <div class="row g-4 mt-4">
                @foreach ($services as $service)
                    <div class="col-md-6 col-xl">
                        <article class="service-card h-100">
                            <span class="service-icon">
                                <i class="{{ $service['icon'] }}"></i>
                            </span>
                            <h3 class="service-title mt-4">{{ $service['title'] }}</h3>
                            <p class="service-copy mt-3 mb-4">{{ $service['description'] }}</p>

                            <div class="service-points">
                                @foreach ($service['points'] as $point)
                                    <span>{{ $point }}</span>
                                @endforeach
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-block section-soft" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <span class="section-label">About dotOrbit</span>
                    <h2 class="section-title mt-3">A modern digital partner for businesses that want clean execution.</h2>
                    <p class="section-copy mt-4">
                        dotOrbit is built for businesses that need more than a basic online presence. The goal is to combine
                        strong design, smart development, practical marketing, and AI-ready thinking in one consistent brand
                        experience.
                    </p>

                    <ul class="capability-list list-unstyled mt-4 mb-0">
                        @foreach ($capabilities as $capability)
                            <li>
                                <i class="bi bi-check2-circle"></i>
                                <span>{{ $capability }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-lg-6">
                    <div class="row g-4">
                        @foreach ($whyChoose as $item)
                            <div class="col-md-6 col-lg-12">
                                <div class="why-card">
                                    <h3>{{ $item['title'] }}</h3>
                                    <p class="mb-0">{{ $item['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-block" id="process">
        <div class="container">
            <div class="section-head text-center mx-auto">
                <span class="section-label">Work Process</span>
                <h2 class="section-title mt-3">A simple process that keeps the project clean and easy to follow.</h2>
                <p class="section-copy mt-3 mb-0">
                    We keep things practical so your website or software moves from idea to launch without feeling confusing.
                </p>
            </div>

            <div class="row g-4 mt-4">
                @foreach ($processSteps as $step)
                    <div class="col-md-6 col-xl-3">
                        <div class="process-card h-100">
                            <span class="step-number">{{ $step['step'] }}</span>
                            <h3 class="mt-4">{{ $step['title'] }}</h3>
                            <p class="mb-0">{{ $step['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-block section-soft">
        <div class="container">
            <div class="section-head text-center mx-auto">
                <span class="section-label">Best For</span>
                <h2 class="section-title mt-3">A strong fit for businesses that want a cleaner and smarter online setup.</h2>
            </div>

            <div class="row g-4 mt-4">
                @foreach ($audienceCards as $card)
                    <div class="col-md-6 col-xl-4">
                        <div class="audience-card h-100">
                            <h3>{{ $card['title'] }}</h3>
                            <p class="mb-0">{{ $card['text'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section-block" id="contact">
        <div class="container">
            <div class="contact-panel">
                <div class="row align-items-center g-4">
                    <div class="col-lg-7">
                        <span class="contact-badge">Start with dotOrbit</span>
                        <h2 class="contact-title mt-3">Need a professional website, software system, design support, or AI service?</h2>
                        <p class="contact-copy mt-3 mb-0">
                            Let&apos;s turn your business idea into a cleaner digital experience with better presentation, better
                            usability, and better growth potential.
                        </p>
                    </div>

                    <div class="col-lg-5">
                        <div class="contact-grid">
                            <div class="contact-box">
                                <small>Email</small>
                                <a href="mailto:hello@dotorbits.com">hello@dotorbits.com</a>
                            </div>
                            <div class="contact-box">
                                <small>Services</small>
                                <span>Web, Software, Design, Marketing, AI</span>
                            </div>
                            <div class="contact-box">
                                <small>Availability</small>
                                <span>Open for new business projects</span>
                            </div>
                        </div>

                        <div class="d-flex flex-wrap gap-3 mt-4">
                            <a class="btn btn-light btn-contact" href="mailto:hello@dotorbits.com?subject=Project%20Inquiry">Send Email</a>
                            <a class="btn btn-outline-light btn-contact" href="#home">Back to Top</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container footer-wrap">
            <div class="footer-brand">
                <img src="{{ asset('assets/images/logo.png') }}" alt="dotOrbit" class="footer-logo" width="151" height="29">
                <p class="mb-0">dotOrbit provides Web Development, Software Development, Graphic Design, Digital Marketing, and AI solutions.</p>
            </div>

            <a class="footer-mail" href="mailto:hello@dotorbits.com">hello@dotorbits.com</a>
        </div>
    </footer>
@endsection

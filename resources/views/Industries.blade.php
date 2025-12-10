@extends('layouts.app')

@section('content')
    <div class="industries-page">

        <!-- Hero Section -->
        <section class="industries-hero">
            <div class="container text-center">
                <h1 class="hero-title">Industries We Serve</h1>
                <p class="hero-description">
                    Empowering businesses across diverse sectors with cutting-edge digital solutions.
                </p>
            </div>
        </section>

        <!-- PRIMARY INDUSTRIES Section -->
        <section class="industries-section">
            <div class="container industry-container">
                <h2 class="section-header">PRIMARY INDUSTRIES</h2>
                <div class="industries-grid">
                    @forelse($primaryIndustries as $industry)
                        <div class="industry-card">
                            <div class="industry-icon {{ $industry->icon_class }}">
                                @if($industry->icon_url)
                                    <img src="{{ $industry->icon_url }}" class="industry-svg" alt="{{ $industry->name }}" />
                                @else
                                    <span class="industry-icon-text">{{ $industry->name[0] }}</span>
                                @endif
                            </div>
                            <h3 class="industry-title">{{ $industry->name }}</h3>
                            <p class="industry-description">{{ $industry->description }}</p>
                        </div>
                    @empty
                        <p>No Primary Industries available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- TECH & SERVICES Section -->
        <section class="industries-section">
            <div class="container industry-container">
                <h2 class="section-header">TECH & SERVICES</h2>
                <div class="industries-grid">
                    @forelse($techIndustries as $industry)
                        <div class="industry-card">
                            <div class="industry-icon {{ $industry->icon_class }}">
                                @if($industry->icon_url)
                                    <img src="{{ $industry->icon_url }}" class="industry-svg" alt="{{ $industry->name }}" />
                                @else
                                    <span class="industry-icon-text">{{ $industry->name[0] }}</span>
                                @endif
                            </div>
                            <h3 class="industry-title">{{ $industry->name }}</h3>
                            <p class="industry-description">{{ $industry->description }}</p>
                        </div>
                    @empty
                        <p>No Tech & Services Industries available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- EMERGING SECTORS Section -->
        <section class="industries-section">
            <div class="container industry-container">
                <h2 class="section-header">EMERGING SECTORS</h2>
                <div class="industries-grid">
                    @forelse($emergingIndustries as $industry)
                        <div class="industry-card">
                            <div class="industry-icon {{ $industry->icon_class }}">
                                @if($industry->icon_url)
                                    <img src="{{ $industry->icon_url }}" class="industry-svg" alt="{{ $industry->name }}" />
                                @else
                                    <span class="industry-icon-text">{{ $industry->name[0] }}</span>
                                @endif
                            </div>
                            <h3 class="industry-title">{{ $industry->name }}</h3>
                            <p class="industry-description">{{ $industry->description }}</p>
                        </div>
                    @empty
                        <p>No Emerging Sectors available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container text-center">
                <h2 class="cta-title">Ready to Transform Your Industry?</h2>
                <p class="cta-description">Let's discuss how we can deliver tailored solutions for your business sector.</p>
                <a href="#contact" class="cta-button">Get Started</a>
            </div>
        </section>
    </div>

    <!-- Styles -->
    <style>
        .industries-hero {
            background: #023c2d;
            padding: 80px 20px;
            text-align: center;
            color: white;
        }
        .hero-title { font-size: 3rem; margin-bottom: 20px; font-weight: 700; }
        .hero-description { font-size: 1.25rem; max-width: 700px; margin: 0 auto; color:#fff; }

        .industries-section { padding: 60px 20px; background: #f8f9fa; }
        .industry-container { max-width: 1200px; margin: 0 auto; }
        .industries-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }

        .industry-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .industry-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .industry-icon { width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; border-radius: 12px; background: #e0e0e0; }
        .industry-svg { width: 50px; height: 50px; }
        .industry-title { font-size: 1.5rem; margin-bottom: 10px; color: #000000; }
        .industry-description { color: #666; line-height: 1.6; }


        .section-header {
            font-size: 2rem;        /* Adjust the size */
            font-weight: 700;       /* Bold text */
            color: #0eb7ea;         /* Dark green color to match your theme */
            margin-bottom: 30px;    /* Space below the heading */
            text-align: center;     /* Center the heading */
            position: relative;     /* For adding decorative underline if needed */
        }

        .cta-section { background: #023c2d; padding: 60px 20px; text-align: center; color: white; }
        .cta-title { font-size: 2.5rem; margin-bottom: 20px; }
        .cta-description { font-size: 1.25rem; margin-bottom: 30px; }
        .cta-button {
            display: inline-block; background: white; color: #023c2d; padding: 15px 40px;
            border-radius: 30px; font-weight: 700; text-decoration: none;
            transition: transform 0.3s;
        }
        .cta-button:hover { transform: scale(1.05); }

        @media (max-width: 768px) {
            .industries-grid { grid-template-columns: 1fr !important; }
            .hero-title { font-size: 2rem !important; }
            .hero-description { font-size: 1rem !important; }
        }
    </style>

@endsection

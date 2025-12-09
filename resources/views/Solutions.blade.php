@extends('layouts.app')

@section('content')
    <div class="solutions-page">

        <!-- Hero Section -->
        <section class="solutions-hero">
            <div class="container text-center">
                <h1 class="hero-title">Our Solutions</h1>
                <p class="hero-description">
                    Explore our expert solutions designed to transform your business digitally.
                </p>
            </div>
        </section>

        <!-- TOP SOLUTIONS Section -->
        <section class="solutions-section">
            <div class="container solution-container">
                <h2 class="section-header">TOP SOLUTIONS</h2>
                <div class="solutions-grid">
                    @forelse($topSolutions as $solution)
                        <div class="solution-card">
                            <div class="solution-icon {{ $solution->icon_class }}">
                                @if($solution->icon_url)
                                    <img src="{{ $solution->icon_url }}" class="solution-svg" alt="{{ $solution->name }}" />
                                @else
                                    <span class="solution-icon-text">{{ $solution->name[0] }}</span>
                                @endif
                            </div>
                            <h3 class="solution-title">{{ $solution->name }}</h3>
                            <p class="solution-description">{{ $solution->description }}</p>
                        </div>
                    @empty
                        <p>No Top Solutions available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- ENTERPRISE FOCUSED Section -->
        <section class="solutions-section">
            <div class="container solution-container">
                <h2 class="section-header">ENTERPRISE FOCUSED</h2>
                <div class="solutions-grid">
                    @forelse($enterpriseSolutions as $solution)
                        <div class="solution-card">
                            <div class="solution-icon {{ $solution->icon_class }}">
                                @if($solution->icon_url)
                                    <img src="{{ $solution->icon_url }}" class="solution-svg" alt="{{ $solution->name }}" />
                                @else
                                    <span class="solution-icon-text">{{ $solution->name[0] }}</span>
                                @endif
                            </div>
                            <h3 class="solution-title">{{ $solution->name }}</h3>
                            <p class="solution-description">{{ $solution->description }}</p>
                        </div>
                    @empty
                        <p>No Enterprise Solutions available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container text-center">
                <h2 class="cta-title">Ready to Build with Us?</h2>
                <p class="cta-description">Let’s discuss how our expert team can bring your project to life.</p>
                <a href="#contact" class="cta-button">Get Started</a>
            </div>
        </section>
    </div>

    <!-- Styles -->
    <style>
        .solutions-hero {
            background: #023c2d;
            padding: 80px 20px;
            text-align: center;
            color: white;
        }
        .hero-title { font-size: 3rem; margin-bottom: 20px; font-weight: 700; }
        .hero-description { font-size: 1.25rem; max-width: 700px; margin: 0 auto; color:#fff; }

        .solutions-section { padding: 60px 20px; background: #f8f9fa; }
        .solution-container { max-width: 1200px; margin: 0 auto; }
        .solutions-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }

        .solution-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .solution-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .solution-icon { width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; border-radius: 12px; background: #e0e0e0; }
        .solution-svg { width: 50px; height: 50px; }
        .solution-title { font-size: 1.5rem; margin-bottom: 10px; color: #000000; }
        .solution-description { color: #666; line-height: 1.6; }


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
            .solutions-grid { grid-template-columns: 1fr !important; }
            .hero-title { font-size: 2rem !important; }
            .hero-description { font-size: 1rem !important; }
        }
    </style>

@endsection

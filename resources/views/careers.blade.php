@extends('layouts.app')

@section('content')
    <div class="careers-page">

        <!-- Hero Section -->
        <section class="careers-hero">
            <div class="container text-center">
                <h1 class="hero-title">Join Our Team</h1>
                <p class="hero-description">
                    Explore exciting career opportunities and become part of our innovative team.
                </p>
            </div>
        </section>

        <!-- CAREERS Section -->
        <section class="careers-section">
            <div class="container career-container">
                <h2 class="section-header">OPEN POSITIONS</h2>
                <div class="careers-grid">
                    @forelse($careers as $career)
                        <div class="career-card">
                            <div class="career-icon {{ $career->icon_class }}">
                                @if($career->icon_url)
                                    <img src="{{ $career->icon_url }}" class="career-svg" alt="{{ $career->name }}" />
                                @else
                                    <span class="career-icon-text">{{ $career->name[0] }}</span>
                                @endif
                            </div>
                            <h3 class="career-title">{{ $career->name }}</h3>
                            <p class="career-description">{{ $career->description }}</p>
                        </div>
                    @empty
                        <p>No Careers available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container text-center">
                <h2 class="cta-title">Ready to Join Us?</h2>
                <p class="cta-description">Let's discuss how you can contribute to our growing team.</p>
                <a href="#contact" class="cta-button">Apply Now</a>
            </div>
        </section>
    </div>

    <!-- Styles -->
    <style>
        .careers-hero {
            background: #023c2d;
            padding: 80px 20px;
            text-align: center;
            color: white;
        }
        .hero-title { font-size: 3rem; margin-bottom: 20px; font-weight: 700; }
        .hero-description { font-size: 1.25rem; max-width: 700px; margin: 0 auto; color:#fff; }

        .careers-section { padding: 60px 20px; background: #f8f9fa; }
        .career-container { max-width: 1200px; margin: 0 auto; }
        .careers-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; }

        .career-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        .career-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.2);
        }
        .career-icon { width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; margin: 0 auto 15px; border-radius: 12px; background: #e0e0e0; }
        .career-svg { width: 50px; height: 50px; }
        .career-title { font-size: 1.5rem; margin-bottom: 10px; color: #000000; }
        .career-description { color: #666; line-height: 1.6; }


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
            .careers-grid { grid-template-columns: 1fr !important; }
            .hero-title { font-size: 2rem !important; }
            .hero-description { font-size: 1rem !important; }
        }
    </style>

@endsection

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
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .industries-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(14, 183, 234, 0.15) 0%, transparent 50%);
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: -0.02em;
            position: relative;
            z-index: 1;
            color: #ffffff;
        }

        .hero-description {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            position: relative;
            z-index: 1;
        }

        .industries-section {
            padding: 80px 20px;
            background: #ffffff;
        }

        .industry-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .industries-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 35px;
        }

        .industry-card {
            background: white;
            padding: 40px 30px;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid rgba(0, 0, 0, 0.08);
            position: relative;
            overflow: hidden;
        }

        .industry-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: #0eb7ea;
            transform: scaleX(0);
            transition: transform 0.4s ease;
        }

        .industry-card:hover::before {
            transform: scaleX(1);
        }

        .industry-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 60px rgba(14, 183, 234, 0.2);
            border-color: #0eb7ea;
        }

        .industry-icon {
            width: 75px;
            height: 75px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border-radius: 16px;
            background: #f8f9fa;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .industry-card:hover .industry-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 32px rgba(14, 183, 234, 0.3);
            background: #ffffff;
        }

        .industry-svg {
            width: 50px;
            height: 50px;
        }

        .industry-title {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #000000;
            font-weight: 700;
            letter-spacing: -0.01em;
            transition: color 0.3s ease;
        }

        .industry-card:hover .industry-title {
            color: #0eb7ea;
        }

        .industry-description {
            color: #666666;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        .section-header {
            font-size: 2.5rem;
            font-weight: 800;
            color: #000000;
            margin-bottom: 50px;
            text-align: center;
            position: relative;
            letter-spacing: -0.02em;
        }

        .section-header::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #0eb7ea;
            border-radius: 2px;
        }

        .cta-section {
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 80px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .cta-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 50%, rgba(14, 183, 234, 0.15) 0%, transparent 50%);
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 800;
            letter-spacing: -0.02em;
            position: relative;
            z-index: 1;
            color: #ffffff;
        }

        .cta-description {
            font-size: 1.25rem;
            margin-bottom: 35px;
            color: rgba(255, 255, 255, 0.9);
            line-height: 1.8;
            position: relative;
            z-index: 1;
        }

        .cta-button {
            display: inline-block;
            background: #0eb7ea;
            color: #ffffff;
            padding: 16px 45px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            box-shadow: 0 10px 30px rgba(14, 183, 234, 0.3);
            font-size: 1.1rem;
            position: relative;
            z-index: 1;
        }

        .cta-button:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 15px 40px rgba(14, 183, 234, 0.5);
            background: #ffffff;
            color: #000000;
        }

        @media (max-width: 768px) {
            .industries-hero {
                padding: 70px 20px;
            }

            .industries-grid {
                grid-template-columns: 1fr !important;
                gap: 25px;
            }

            .hero-title {
                font-size: 2rem !important;
            }

            .hero-description {
                font-size: 1rem !important;
            }

            .section-header {
                font-size: 2rem;
                margin-bottom: 35px;
            }

            .industry-card {
                padding: 30px 25px;
            }

            .cta-section {
                padding: 60px 20px;
            }

            .cta-title {
                font-size: 2rem;
            }

            .cta-button {
                padding: 14px 35px;
                font-size: 1rem;
            }
        }
    </style>

@endsection

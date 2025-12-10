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
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .solutions-hero::before {
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

        .solutions-section {
            padding: 80px 20px;
            background: #ffffff;
        }

        .solution-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 35px;
        }

        .solution-card {
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

        .solution-card::before {
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

        .solution-card:hover::before {
            transform: scaleX(1);
        }

        .solution-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 60px rgba(14, 183, 234, 0.2);
            border-color: #0eb7ea;
        }

        .solution-icon {
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

        .solution-card:hover .solution-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 32px rgba(14, 183, 234, 0.3);
            background: #ffffff;
        }

        .solution-svg {
            width: 45px;
            height: 45px;
        }

        .solution-title {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #000000;
            font-weight: 700;
            letter-spacing: -0.01em;
            transition: color 0.3s ease;
        }

        .solution-card:hover .solution-title {
            color: #0eb7ea;
        }

        .solution-description {
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
            .solutions-hero {
                padding: 70px 20px;
            }
            .solutions-grid {
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
            .solution-card {
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

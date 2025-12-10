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
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .careers-hero::before {
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

        .careers-section {
            padding: 80px 20px;
            background: #ffffff;
        }

        .career-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .careers-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 35px;
        }

        .career-card {
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

        .career-card::before {
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

        .career-card:hover::before {
            transform: scaleX(1);
        }

        .career-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 60px rgba(14, 183, 234, 0.2);
            border-color: #0eb7ea;
        }

        .career-icon {
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

        .career-card:hover .career-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 32px rgba(14, 183, 234, 0.3);
            background: #ffffff;
        }

        .career-svg {
            width: 50px;
            height: 50px;
        }

        .career-title {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #000000;
            font-weight: 700;
            letter-spacing: -0.01em;
            transition: color 0.3s ease;
        }

        .career-card:hover .career-title {
            color: #0eb7ea;
        }

        .career-description {
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
            .careers-hero {
                padding: 70px 20px;
            }

            .careers-grid {
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

            .career-card {
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

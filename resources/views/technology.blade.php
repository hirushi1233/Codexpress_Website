@extends('layouts.app')

@section('content')
    <div class="technology-page">
        <!-- Hero Section -->
        <section class="technology-hero">
            <div class="container">
                <h1 class="hero-title">Our Technologies</h1>
                <p class="hero-description">
                    Get experts in 100+ technologies. We cover any tech stack to bring your vision to life.
                </p>
            </div>
        </section>

        <!-- Technologies Grid -->
        <section class="technologies-section">
            <div class="container tech-container">
                <div class="technologies-grid">

                    @forelse($technologies as $technology)
                        <div class="tech-card">
                            <div class="tech-icon {{ $technology->icon_class }}">
                                <img src="{{ $technology->icon_url }}" class="tech-svg" alt="{{ $technology->name }}" />
                            </div>
                            <h3 class="tech-title">{{ $technology->name }}</h3>
                            <p class="tech-description">
                                {{ $technology->description }}
                            </p>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No technologies available at the moment.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Ready to Build with Us?</h2>
                <p class="cta-description">Let's discuss how our expert developers can help bring your project to life.</p>
                <a href="#contact" class="cta-button">Get Started</a>
            </div>
        </section>
    </div>

    <br>

    <!-- All Styles Below -->
    <style>
        /* Hero Section Styles */
        .technology-hero {
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .technology-hero::before {
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

        /* Technologies Section Styles */
        .technologies-section {
            padding: 80px 20px;
            background: #ffffff;
        }

        .tech-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .technologies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
        }

        /* Tech Card Styles */
        .tech-card {
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

        .tech-card::before {
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

        .tech-card:hover::before {
            transform: scaleX(1);
        }

        .tech-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 60px rgba(14, 183, 234, 0.2);
            border-color: #0eb7ea;
        }

        /* Tech Icon Base Styles */
        .tech-icon {
            width: 75px;
            height: 75px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            transition: all 0.4s ease;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }

        .tech-card:hover .tech-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 32px rgba(14, 183, 234, 0.3);
        }

        .tech-icon-text {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .tech-icon-dark {
            color: #1a1a1a;
        }

        .tech-svg {
            width: 50px;
            height: 50px;
        }

        /* Individual Tech Icon Gradients - Keep Original Colors */
        .tech-icon-dotnet {
            background: linear-gradient(135deg, #512BD4, #7B3FF2);
        }

        .tech-icon-dotnet .tech-icon-text {
            font-size: 24px;
        }

        .tech-icon-aws {
            background: linear-gradient(135deg, #FF9900, #FFC300);
        }

        .tech-icon-django {
            background: linear-gradient(135deg, #092E20, #0C4B33);
        }

        .tech-icon-django .tech-icon-text {
            font-size: 18px;
        }

        .tech-icon-java {
            background: linear-gradient(135deg, #007396, #00A4CC);
        }

        .tech-icon-ml {
            background: linear-gradient(135deg, #FF6B6B, #FF8E53);
        }

        .tech-icon-ml .tech-icon-text {
            font-size: 18px;
        }

        .tech-icon-php {
            background: linear-gradient(135deg, #777BB4, #9999CC);
        }

        .tech-icon-react {
            background: linear-gradient(135deg, #61DAFB, #21A1C4);
        }

        .tech-icon-react .tech-icon-text {
            font-size: 18px;
        }

        .tech-icon-typescript {
            background: linear-gradient(135deg, #3178C6, #5599DD);
        }

        .tech-icon-ai {
            background: linear-gradient(135deg, #8B5CF6, #A78BFA);
        }

        .tech-icon-csharp {
            background: linear-gradient(135deg, #239120, #68BC71);
        }

        .tech-icon-golang {
            background: linear-gradient(135deg, #00ADD8, #5DC9E2);
        }

        .tech-icon-javascript {
            background: linear-gradient(135deg, #F7DF1E, #F0DB4F);
        }

        .tech-icon-azure {
            background: linear-gradient(135deg, #0078D4, #50E6FF);
        }

        .tech-icon-azure .tech-icon-text {
            font-size: 18px;
        }

        .tech-icon-powerbi {
            background: linear-gradient(135deg, #F2C811, #FDD835);
        }

        .tech-icon-powerbi .tech-icon-text {
            font-size: 18px;
        }

        .tech-icon-ruby {
            background: linear-gradient(135deg, #CC342D, #E85D54);
        }

        .tech-icon-ruby .tech-icon-text {
            font-size: 18px;
        }

        /* Tech Card Text Styles */
        .tech-title {
            font-size: 1.5rem;
            margin-bottom: 12px;
            color: #000000;
            font-weight: 700;
            letter-spacing: -0.01em;
            transition: color 0.3s ease;
        }

        .tech-card:hover .tech-title {
            color: #0eb7ea;
        }

        .tech-description {
            color: #666666;
            line-height: 1.8;
            font-size: 1.05rem;
        }

        /* Section Header */
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

        /* CTA Section Styles */
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
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 35px;
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

        /* Responsive Styles */
        @media (max-width: 768px) {
            .technology-hero {
                padding: 70px 20px;
            }

            .technologies-grid {
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

            .tech-card {
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

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
            background: #023c2d;
            padding: 80px 20px;
            text-align: center;
            color: white;
        }

        .hero-title {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-description {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto;
            color: #ffffff;
        }

        /* Technologies Section Styles */
        .technologies-section {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .tech-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .technologies-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        /* Tech Card Styles */
        .tech-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .tech-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }

        /* Tech Icon Base Styles */
        .tech-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .tech-icon-text {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        .tech-icon-dark {
            color: #1a1a1a;
        }

        /* Individual Tech Icon Gradients */
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
            margin-bottom: 15px;
            color: #1a1a1a;
        }

        .tech-description {
            color: #666;
            line-height: 1.6;
        }

        /* CTA Section Styles */
        .cta-section {
            background: #023c2d;
            padding: 60px 20px;
            text-align: center;
            color: white;
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-description {
            font-size: 1.25rem;
            color: white;
            margin-bottom: 30px;
        }

        .cta-button {
            display: inline-block;
            background: white;
            color: #667eea;
            padding: 15px 40px;
            border-radius: 30px;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.3s;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .technologies-grid {
                grid-template-columns: 1fr !important;
            }

            .hero-title {
                font-size: 2rem !important;
            }

            .hero-description {
                font-size: 1rem !important;
            }

        <style>
        .tech-svg {
            width: 50px;
            height: 50px;
        }

            .tech-icon {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 15px;
            }

            .tech-card {
                background: rgba(255, 255, 255, 0.08);
                border-radius: 20px;
                padding: 28px;
                text-align: center;
                backdrop-filter: blur(12px);
                border: 1px solid rgba(255, 255, 255, 0.18);
                transition: all 0.35s ease;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.25);
                transform: translateY(0);
                position: relative;
                overflow: hidden;
            }

            /* Hover Effect */
            .tech-card:hover {
                transform: translateY(-8px) scale(1.03);
                border-color: rgba(255, 255, 255, 0.45);
                background: rgba(255, 255, 255, 0.18);
                box-shadow: 0 8px 30px rgba(0, 0, 0, 0.35);
            }

            .tech-card {
                position: relative;
                transition: 0.3s ease-in-out;
            }

            /* Hidden line */
            .tech-card::after {
                content: "";
                position: absolute;
                left: 50%;
                bottom: 0;
                width: 0;
                height: 3px;
                background: #0dcaf0;
                transition: 0.3s ease;
                transform: translateX(-50%);
            }

            /* Show line on hover */
            .tech-card:hover::after {
                width: 80%;
            }

            @keyframes glowMove {
                0% { background-position: 0% 50%; }
                50% { background-position: 100% 50%; }
                100% { background-position: 0% 50%; }
            }



        }
    </style>


@endsection

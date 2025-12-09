@extends('layouts.app')

@section('content')
    <div class="industries-page">
        <!-- Hero Section -->
        <section class="section-hero">
            <div class="container">
                <h1 class="hero-title">Industry</h1>
                <p class="hero-description">
                    Tailored solutions for your industry. Deep expertise in diverse sectors.
                    Industry Expertise, Success Stories, Custom Solutions
                </p>
            </div>
        </section>

        <!-- Industries Grid -->
        <section class="industries-section">
            <div class="container industries-container">

                <!-- PRIMARY INDUSTRIES -->
                <div class="section-header">
                    <h2 class="section-title">PRIMARY INDUSTRIES</h2>
                </div>

                <div class="industries-grid">
                    <!-- Healthcare & Medical -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-healthcare">
                            <span class="industries-icon-text">HC</span>
                        </div>
                        <h3 class="industries-title">Healthcare & Medical</h3>
                        <p class="industries-description">
                            Digital health solutions, patient management systems, telemedicine platforms, and healthcare analytics.
                        </p>
                    </div>

                    <!-- Finance & Banking -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-finance">
                            <span class="industries-icon-text">FB</span>
                        </div>
                        <h3 class="industries-title">Finance & Banking</h3>
                        <p class="industries-description">
                            Secure banking applications, payment gateways, financial management tools, and fraud detection systems.
                        </p>
                    </div>

                    <!-- E-Commerce & Retail -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-ecommerce">
                            <span class="industries-icon-text">EC</span>
                        </div>
                        <h3 class="industries-title">E-Commerce & Retail</h3>
                        <p class="industries-description">
                            Online stores, inventory management, customer analytics, and omnichannel retail solutions.
                        </p>
                    </div>

                    <!-- Education & E-Learning -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-education">
                            <span class="industries-icon-text">ED</span>
                        </div>
                        <h3 class="industries-title">Education & E-Learning</h3>
                        <p class="industries-description">
                            Learning management systems, virtual classrooms, student portals, and educational content platforms.
                        </p>
                    </div>

                    <!-- Manufacturing -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-manufacturing">
                            <span class="industries-icon-text">MF</span>
                        </div>
                        <h3 class="industries-title">Manufacturing</h3>
                        <p class="industries-description">
                            Production automation, quality control systems, supply chain optimization, and IoT manufacturing solutions.
                        </p>
                    </div>

                    <!-- Logistics & Supply Chain -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-logistics">
                            <span class="tech-icon-text">LS</span>
                        </div>
                        <h3 class="industries-title">Logistics & Supply Chain</h3>
                        <p class="industries-description">
                            Fleet management, warehouse automation, shipment tracking, and supply chain visibility platforms.
                        </p>
                    </div>
                </div>

                <!-- TECH & SERVICES -->
                <div class="section-header mt-5">
                    <h2 class="section-title">TECH & SERVICES</h2>
                </div>

                <div class="industries-grid">
                    <!-- SaaS & Software -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-saas">
                            <span class="industries-icon-text">SS</span>
                        </div>
                        <h3 class="industries-title">SaaS & Software</h3>
                        <p class="industries-description">
                            Cloud-based applications, subscription platforms, API integrations, and enterprise software solutions.
                        </p>
                    </div>

                    <!-- FinTech -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-fintech">
                            <span class="industries-icon-text">FT</span>
                        </div>
                        <h3 class="industries-title">FinTech</h3>
                        <p class="industries-description">
                            Digital payments, cryptocurrency platforms, robo-advisors, and peer-to-peer lending solutions.
                        </p>
                    </div>

                    <!-- Real Estate & PropTech -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-proptech">
                            <span class="industries-icon-text">RE</span>
                        </div>
                        <h3 class="industries-title">Real Estate & PropTech</h3>
                        <p class="industries-description">
                            Property management systems, virtual tours, smart building solutions, and real estate marketplaces.
                        </p>
                    </div>

                    <!-- Media & Entertainment -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-media">
                            <span class="industries-icon-text">ME</span>
                        </div>
                        <h3 class="industries-title">Media & Entertainment</h3>
                        <p class="industries-description">
                            Streaming platforms, content management, digital publishing, and interactive media applications.
                        </p>
                    </div>

                    <!-- Telecommunications -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-telecom">
                            <span class="industries-icon-text">TC</span>
                        </div>
                        <h3 class="industries-title">Telecommunications</h3>
                        <p class="industries-description">
                            Network management, billing systems, customer portals, and unified communication platforms.
                        </p>
                    </div>

                    <!-- Travel & Hospitality -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-travel">
                            <span class="industries-icon-text">TH</span>
                        </div>
                        <h3 class="industries-title">Travel & Hospitality</h3>
                        <p class="industries-description">
                            Booking systems, hotel management, travel planning apps, and guest experience platforms.
                        </p>
                    </div>
                </div>

                <!-- EMERGING SECTORS -->
                <div class="section-header mt-5">
                    <h2 class="section-title">EMERGING SECTORS</h2>
                </div>

                <div class="industries-grid">
                    <!-- Energy & Utilities -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-energy">
                            <span class="industries-icon-text">EU</span>
                        </div>
                        <h3 class="industries-title">Energy & Utilities</h3>
                        <p class="industries-description">
                            Smart grid solutions, renewable energy management, utility billing systems, and energy monitoring platforms.
                        </p>
                    </div>

                    <!-- Automotive & Mobility -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-automotive">
                            <span class="industries-icon-text">AM</span>
                        </div>
                        <h3 class="industries-title">Automotive & Mobility</h3>
                        <p class="industries-description">
                            Connected vehicles, ride-sharing platforms, EV charging networks, and fleet management solutions.
                        </p>
                    </div>

                    <!-- Insurance & InsurTech -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-insurance">
                            <span class="industries-icon-text">IT</span>
                        </div>
                        <h3 class="industries-title">Insurance & InsurTech</h3>
                        <p class="industries-description">
                            Policy management, claims automation, risk assessment tools, and digital insurance platforms.
                        </p>
                    </div>

                    <!-- Agriculture & AgriTech -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-agriculture">
                            <span class="industries-icon-text">AG</span>
                        </div>
                        <h3 class="industries-title">Agriculture & AgriTech</h3>
                        <p class="industries-description">
                            Precision farming, crop monitoring, agricultural marketplaces, and farm management systems.
                        </p>
                    </div>

                    <!-- Government & Public Sector -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-government">
                            <span class="industries-icon-text">GP</span>
                        </div>
                        <h3 class="industries-title">Government & Public Sector</h3>
                        <p class="industries-description">
                            Citizen portals, digital identity systems, e-governance platforms, and public service automation.
                        </p>
                    </div>

                    <!-- Non-Profit Organizations -->
                    <div class="industries-card">
                        <div class="industries-icon industries-icon-nonprofit">
                            <span class="industries-icon-text">NP</span>
                        </div>
                        <h3 class="industries-title">Non-Profit Organizations</h3>
                        <p class="industries-description">
                            Donor management, volunteer coordination, fundraising platforms, and impact tracking systems.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Ready to Transform Your Industry?</h2>
                <p class="cta-description">Let's discuss how we can help bring innovation to your sector</p>
                <a href="#contact" class="cta-button">Get Started</a>
            </div>
        </section>
    </div>

    <style>
        /* Hero Section Styles */
        .section-hero {
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

        /* industries Section Styles */
        .industries-section {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .industries-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-header {
            margin-bottom: 40px;
            text-align: left;
        }

        .section-title {
            font-size: 1.2rem;
            color: #6c757d;
            font-weight: 600;
            letter-spacing: 1px;
            position: relative;
            padding-bottom: 10px;
        }

        .section-title::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 3px;
            background: #0dcaf0;
        }

        .mt-5 {
            margin-top: 60px;
        }

        .industries-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        /* industries Card Styles */
        .industries-card {
            background: white;
            border-radius: 20px;
            padding: 28px;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, 0.08);
            transition: all 0.35s ease;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transform: translateY(0);
            position: relative;
            overflow: hidden;
        }

        /* Hover Effect */
        .industries-card:hover {
            transform: translateY(-8px) scale(1.03);
            border-color: rgba(13, 202, 240, 0.45);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        /* Bottom line animation */
        .industries-card::after {
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

        .industries-card:hover::after {
            width: 80%;
        }

        /* industries Icon Styles */
        .industries-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .industries-icon-text {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        /* Individual Icon Colors - PRIMARY INDUSTRIES */
        .industries-icon-healthcare {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .industries-icon-finance {
            background: linear-gradient(135deg, #f093fb, #f5576c);
        }

        .industries-icon-ecommerce {
            background: linear-gradient(135deg, #30cfd0, #330867);
        }

        .industries-icon-education {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .industries-icon-manufacturing {
            background: linear-gradient(135deg, #43e97b, #38f9d7);
        }

        .industries-icon-logistics {
            background: linear-gradient(135deg, #fa709a, #fee140);
        }

        /* TECH & SERVICES */
        .industries-icon-saas {
            background: linear-gradient(135deg, #ff9a56, #ff6a88);
        }

        .industries-icon-fintech {
            background: linear-gradient(135deg, #a8edea, #fed6e3);
        }

        .industries-icon-proptech {
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
        }

        .industries-icon-media {
            background: linear-gradient(135deg, #f77062, #fe5196);
        }

        .industries-icon-telecom {
            background: linear-gradient(135deg, #7f7fd5, #91eae4);
        }

        .industries-icon-travel {
            background: linear-gradient(135deg, #3f2b96, #a8c0ff);
        }

        /* EMERGING SECTORS */
        .industries-icon-energy {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .industries-icon-automotive {
            background: linear-gradient(135deg, #f093fb, #f5576c);
        }

        .industries-icon-insurance {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .industries-icon-agriculture {
            background: linear-gradient(135deg, #43e97b, #38f9d7);
        }

        .industries-icon-government {
            background: linear-gradient(135deg, #fa709a, #fee140);
        }

        .industries-icon-nonprofit {
            background: linear-gradient(135deg, #30cfd0, #330867);
        }

        /* Tech Card Text Styles */
        .industries-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #1a1a1a;
            font-weight: 600;
        }

        .industries-description {
            color: #666;
            line-height: 1.6;
            font-size: 0.95rem;
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
            color: #023c2d;
            padding: 15px 40px;
            border-radius: 30px;
            font-weight: 700;
            text-decoration: none;
            transition: transform 0.3s;
        }

        .cta-button:hover {
            transform: scale(1.05);
            color: #023c2d;
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

            .cta-title {
                font-size: 1.8rem !important;
            }

            .section-title {
                text-align: center;
            }

            .section-title::after {
                left: 50%;
                transform: translateX(-50%);
            }
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
    <div class="solutions-page">
        <!-- Hero Section -->
        <section class="section-hero">
            <div class="container">
                <h1 class="hero-title">Our Solution</h1>
                <p class="hero-description">
                    Get software development services, built around your needs:
                    Staff Augmentation, Dedicated Teams, Software Outsourcing
                </p>
            </div>
        </section>

        <!-- Solutions Grid -->
        <section class="solutions-section">
            <div class="container solutions-container">

                <!-- TOP SOLUTIONS -->
                <div class="section-header">
                    <h2 class="section-title">TOP SOLUTIONS</h2>
                </div>

                <div class="solutions-grid">
                    <!-- Back-End Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-backend">
                            <span class="tech-icon-text">BE</span>
                        </div>
                        <h3 class="solutions-title">Back-End Development</h3>
                        <p class="solutions-description">
                            Robust server-side solutions with Laravel, Node.js, Python, and .NET for scalable applications.
                        </p>
                    </div>

                    <!-- Front-End Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-frontend">
                            <span class="solutions-icon-text">FE</span>
                        </div>
                        <h3 class="solutions-title">Front-End Development</h3>
                        <p class="solutions-description">
                            Modern, responsive interfaces using React, Vue.js, and Angular for seamless user experiences.
                        </p>
                    </div>

                    <!-- UX/UI Design -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-design">
                            <span class="solutions-icon-text">UI</span>
                        </div>
                        <h3 class="solutions-title">UX/UI Design</h3>
                        <p class="solutions-description">
                            User-centered designs that combine aesthetics with functionality for maximum engagement.
                        </p>
                    </div>

                    <!-- Android App Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-android">
                            <span class="solutions-icon-text">AD</span>
                        </div>
                        <h3 class="solutions-title">Android App Development</h3>
                        <p class="solutions-description">
                            Native Android apps with Kotlin and Java for performance and reliability.
                        </p>
                    </div>

                    <!-- Business Intelligence -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-bi">
                            <span class="solutions-icon-text">BI</span>
                        </div>
                        <h3 class="solutions-title">Business Intelligence</h3>
                        <p class="solutions-description">
                            Data-driven insights with Power BI, Tableau, and custom analytics dashboards.
                        </p>
                    </div>

                    <!-- ECommerce Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-ecommerce">
                            <span class="solutions-icon-text">EC</span>
                        </div>
                        <h3 class="solutions-title">ECommerce Development</h3>
                        <p class="solutions-description">
                            Complete online stores with Shopify, WooCommerce, and custom platforms.
                        </p>
                    </div>

                    <!-- Mobile App Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-mobile">
                            <span class="solutions-icon-text">MA</span>
                        </div>
                        <h3 class="solutions-title">Mobile App Development</h3>
                        <p class="solutions-description">
                            Cross-platform apps with Flutter and React Native for iOS and Android.
                        </p>
                    </div>

                    <!-- SaaS Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-saas">
                            <span class="solutions-icon-text">SS</span>
                        </div>
                        <h3 class="solutions-title">SaaS Development</h3>
                        <p class="solutions-description">
                            Cloud-based software solutions with multi-tenancy, subscription management, and scalability.
                        </p>
                    </div>

                    <!-- Web Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-web">
                            <span class="solutions-icon-text">WD</span>
                        </div>
                        <h3 class="solutions-title">Web Development</h3>
                        <p class="solutions-description">
                            Full-stack web applications tailored to your business needs and goals.
                        </p>
                    </div>
                </div>

                <!-- ENTERPRISE FOCUSED -->
                <div class="section-header mt-5">
                    <h2 class="section-title">ENTERPRISE FOCUSED</h2>
                </div>

                <div class="solutions-grid">
                    <!-- Backup Solutions -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-backup">
                            <span class="solutions-icon-text">BK</span>
                        </div>
                        <h3 class="solutions-title">Backup Solutions</h3>
                        <p class="solutions-description">
                            Automated backup systems and disaster recovery plans to protect your critical business data.
                        </p>
                    </div>

                    <!-- Digital Transformation -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-digital">
                            <span class="solutions-icon-text">DT</span>
                        </div>
                        <h3 class="solutions-title">Digital Transformation</h3>
                        <p class="solutions-description">
                            Modernize operations with cloud migration, process automation, and digital strategy.
                        </p>
                    </div>

                    <!-- ERP Development -->
                    <div class="solutions-card">
                        <div class="solutions-icon solutions-icon-erp">
                            <span class="solutions-icon-text">ER</span>
                        </div>
                        <h3 class="solutions-title">ERP Development</h3>
                        <p class="solutions-description">
                            Custom Enterprise Resource Planning systems to streamline your business processes.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Ready to Start Your Project?</h2>
                <p class="cta-description">Let's discuss how we can help bring your vision to life</p>
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

        /*solutions Section Styles */
        .solutions-section {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .solutions-container {
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

        .solutions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        /* solutions Card Styles */
        .solutions-card {
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
        .solutions-card:hover {
            transform: translateY(-8px) scale(1.03);
            border-color: rgba(13, 202, 240, 0.45);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
        }

        /* Bottom line animation */
        .solutions-card::after {
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

        .solutions-card:hover::after {
            width: 80%;
        }

        /* solutions Icon Styles */
        .solutions-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
        }

        .solutions-icon-text {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }

        /* Individual Icon Colors */
        .solutions-icon-backend {
            background: linear-gradient(135deg, #667eea, #764ba2);
        }

        .solutions-icon-frontend {
            background: linear-gradient(135deg, #f093fb, #f5576c);
        }

        .solutions-icon-design {
            background: linear-gradient(135deg, #4facfe, #00f2fe);
        }

        .solutions-icon-android {
            background: linear-gradient(135deg, #43e97b, #38f9d7);
        }

        .solutions-icon-bi {
            background: linear-gradient(135deg, #fa709a, #fee140);
        }

        .solutions-icon-ecommerce {
            background: linear-gradient(135deg, #30cfd0, #330867);
        }

        .solutions-icon-mobile {
            background: linear-gradient(135deg, #a8edea, #fed6e3);
        }

        .solutions-icon-saas {
            background: linear-gradient(135deg, #ff9a56, #ff6a88);
        }

        .solutions-icon-web {
            background: linear-gradient(135deg, #ffecd2, #fcb69f);
        }

        .solutions-icon-backup {
            background: linear-gradient(135deg, #f77062, #fe5196);
        }

        .solutions-icon-digital {
            background: linear-gradient(135deg, #7f7fd5, #91eae4);
        }

        .solutions-icon-erp {
            background: linear-gradient(135deg, #3f2b96, #a8c0ff);
        }

        /* solutions Card Text Styles */
        .solutions-title {
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: #1a1a1a;
            font-weight: 600;
        }

        .solutions-description {
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

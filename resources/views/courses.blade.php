@extends('layouts.app')

@section('content')
    <div class="courses-page">
        <!-- Hero Section -->
        <section class="courses-hero">
            <div class="container">
                <h1 class="hero-title">Our Courses</h1>
                <p class="hero-description">
                    Learn from experts in cutting-edge technologies. Master the skills you need to build your career.
                </p>
            </div>
        </section>

        <!-- Courses Grid -->
        <section class="courses-section">
            <div class="container course-container">
                <div class="courses-grid">

                    @forelse($courses as $course)
                        <div class="course-card">
                            <div class="course-icon">
                                @if(isset($course->icon_url) && $course->icon_url)
                                    <img src="{{ $course->icon_url }}" class="course-svg" alt="{{ $course->name }}" />
                                @else
                                    <span class="course-emoji">📚</span>
                                @endif
                            </div>
                            <h3 class="course-title">{{ $course->name }}</h3>
                            <p class="course-description">
                                {{ $course->description }}
                            </p>

                            <!-- Course Content Toggle -->
                            <button class="toggle-content-btn" onclick="toggleCourseContent({{ $course->id }})">
                                <span id="toggle-text-{{ $course->id }}">View Course Content</span>
                                <svg id="toggle-icon-{{ $course->id }}" class="toggle-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>

                            <!-- Course Content (Hidden by default) -->
                            <div class="course-content" id="course-content-{{ $course->id }}">
                                <h4 class="content-heading">Course Content:</h4>
                                <ul class="content-list">
                                    @if(isset($course->content) && is_array($course->content))
                                        @foreach($course->content as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    @endif
                                </ul>

                                @if(isset($course->projects))
                                    <div class="projects-section">
                                        <h5 class="projects-heading">Projects:</h5>
                                        <p class="projects-text">{{ $course->projects }}</p>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @empty
                        <div class="col-12 text-center">
                            <p>No courses available at the moment.</p>
                        </div>
                    @endforelse

                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <div class="container">
                <h2 class="cta-title">Ready to Learn with Us?</h2>
                <p class="cta-description">Join our interactive learning platform and upskill with hands-on experience.</p>
                <a href="#contact" class="cta-button">Enroll Now</a>
            </div>
        </section>
    </div>

    <br>

    <!-- JavaScript for Toggle Functionality -->
    <script>
        function toggleCourseContent(courseId) {
            const content = document.getElementById(`course-content-${courseId}`);
            const toggleText = document.getElementById(`toggle-text-${courseId}`);
            const toggleIcon = document.getElementById(`toggle-icon-${courseId}`);

            if (content.classList.contains('active')) {
                content.classList.remove('active');
                toggleText.textContent = 'View Course Content';
                toggleIcon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.add('active');
                toggleText.textContent = 'Hide Course Content';
                toggleIcon.style.transform = 'rotate(180deg)';
            }
        }
    </script>

    <!-- All Styles Below -->
    <style>
        /* Hero Section Styles */
        .courses-hero {
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .courses-hero::before {
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

        /* Courses Section Styles */
        .courses-section {
            padding: 80px 20px;
            background: #ffffff;
        }

        .course-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 35px;
        }

        /* Course Card Styles */
        .course-card {
            background: white;
            padding: 40px 30px;
            border-radius: 16px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            border: 1px solid rgba(0, 0, 0, 0.08);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .course-card::before {
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

        .course-card:hover::before {
            transform: scaleX(1);
        }

        .course-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 20px 60px rgba(14, 183, 234, 0.2);
            border-color: #0eb7ea;
        }

        .course-icon {
            width: 80px;
            height: 80px;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            background: #f8f9fa;
            padding: 10px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
        }

        .course-card:hover .course-icon {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 12px 32px rgba(14, 183, 234, 0.3);
            background: #ffffff;
        }

        .course-svg {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .course-emoji {
            font-size: 2.5rem;
        }

        /* Course Card Text Styles */
        .course-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #000000;
            font-weight: 700;
            letter-spacing: -0.01em;
            transition: color 0.3s ease;
        }

        .course-card:hover .course-title {
            color: #0eb7ea;
        }

        .course-description {
            color: #666666;
            line-height: 1.8;
            margin-bottom: 20px;
            font-size: 1.05rem;
        }

        /* Toggle Button Styles */
        .toggle-content-btn {
            background: #0eb7ea;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
            margin-top: 10px;
            box-shadow: 0 4px 12px rgba(14, 183, 234, 0.3);
        }

        .toggle-content-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(14, 183, 234, 0.4);
            background: #000000;
        }

        .toggle-icon {
            transition: transform 0.3s ease;
        }

        /* Course Content Styles */
        .course-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease, margin-top 0.4s ease;
            text-align: left;
            margin-top: 0;
        }

        .course-content.active {
            max-height: 1000px;
            margin-top: 20px;
        }

        .content-heading {
            font-size: 1.1rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 15px;
        }

        .content-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 20px;
        }

        .content-list li {
            padding: 8px 0 8px 25px;
            position: relative;
            color: #555;
            line-height: 1.6;
        }

        .content-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #0eb7ea;
            font-weight: bold;
        }

        .projects-section {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            border-left: 3px solid #0eb7ea;
        }

        .projects-heading {
            font-size: 1rem;
            font-weight: 700;
            color: #000000;
            margin-bottom: 8px;
        }

        .projects-text {
            color: #666;
            margin: 0;
            line-height: 1.6;
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

        /* Responsive */
        @media (max-width: 768px) {
            .courses-hero {
                padding: 70px 20px;
            }

            .courses-grid {
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

            .course-card {
                padding: 30px 25px;
            }

            .cta-section {
                padding: 60px 20px;
            }

            .cta-title {
                font-size: 2rem !important;
            }

            .cta-description {
                font-size: 1rem !important;
            }

            .cta-button {
                padding: 14px 35px;
                font-size: 1rem;
            }
        }
    </style>
@endsection

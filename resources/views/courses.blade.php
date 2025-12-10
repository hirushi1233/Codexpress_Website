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

                            <!-- Courses Content Toggle -->
                            <button class="toggle-content-btn" onclick="toggleCourseContent({{ $course->id }})">
                                <span id="toggle-text-{{ $course->id }}">View Course Content</span>
                                <svg id="toggle-icon-{{ $course->id }}" class="toggle-icon" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </button>

                            <!-- Courses Content (Hidden by default) -->
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
                toggleText.textContent = 'View Courses Content';
                toggleIcon.style.transform = 'rotate(0deg)';
            } else {
                content.classList.add('active');
                toggleText.textContent = 'Hide Courses Content';
                toggleIcon.style.transform = 'rotate(180deg)';
            }
        }
    </script>

    <!-- All Styles Below -->
    <style>
        /* Hero Section Styles */
        .courses-hero {
            background: linear-gradient(135deg, #023c2d 0%, #035a44 100%);
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

        /* Courses Section Styles */
        .courses-section {
            padding: 80px 20px;
            background: #f8f9fa;
        }

        .course-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        /* Courses Card Styles */
        .course-card {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .course-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0,0,0,0.2);
        }

        .course-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 10px;
        }

        .course-svg {
            width: 60px;
            height: 60px;
            object-fit: contain;
        }

        .course-emoji {
            font-size: 2.5rem;
        }

        /* Courses Card Text Styles */
        .course-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #1a1a1a;
            font-weight: 600;
        }

        .course-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        /* Toggle Button Styles */
        .toggle-content-btn {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            margin-top: 10px;
        }

        .toggle-content-btn:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }

        .toggle-icon {
            transition: transform 0.3s ease;
        }

        /* Courses Content Styles */
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
            font-weight: 600;
            color: #023c2d;
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
            color: #667eea;
            font-weight: bold;
        }

        .projects-section {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
        }

        .projects-heading {
            font-size: 1rem;
            font-weight: 600;
            color: #023c2d;
            margin-bottom: 8px;
        }

        .projects-text {
            color: #666;
            margin: 0;
            line-height: 1.6;
        }

        /* CTA Section Styles */
        .cta-section {
            background: linear-gradient(135deg, #023c2d 0%, #035a44 100%);
            padding: 60px 20px;
            text-align: center;
            color: white;
        }

        .cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            font-weight: 700;
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
            transition: all 0.3s ease;
        }

        .cta-button:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .courses-grid {
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

            .cta-description {
                font-size: 1rem !important;
            }
        }
    </style>
@endsection

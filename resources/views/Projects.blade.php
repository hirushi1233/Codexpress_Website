@extends('layouts.app')

@section('content')
    <div class="projects-page">

        <!-- Hero Section -->
        <section class="projects-hero">
            <div class="container text-center">
                <h1 class="hero-title">Our Projects</h1>
                <p class="hero-description">
                    Explore our successfully delivered projects built with modern technologies.
                </p>
            </div>
        </section>

        <!-- FEATURED PROJECTS -->
        <section class="projects-section">
            <div class="container project-container">
                <h2 class="section-header" style="color: #000000;">FEATURED PROJECTS</h2>


                <div class="projects-grid">
                    @forelse($featuredProjects as $project)
                        <div class="project-card">
                            <div class="project-image">
                                <img src="{{ $project->image_url }}" alt="{{ $project->name }}">
                            </div>

                            <div class="project-content">
                                <h3 class="project-title">{{ $project->name }}</h3>
                                <p class="project-description">{{ $project->description }}</p>

                                @if($project->tech_stack)
                                    <p class="project-tech">
                                        <strong>Tech Stack:</strong> {{ $project->tech_stack }}
                                    </p>
                                @endif

                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" target="_blank" class="project-button">
                                        View Project
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p>No Featured Projects found.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- CLIENT PROJECTS -->
        <section class="projects-section">
            <div class="container project-container">
                <h2 class="section-header" style="color: #000000;">CLIENT PROJECTS</h2>


                <div class="projects-grid">
                    @forelse($clientProjects as $project)
                        <div class="project-card">
                            <div class="project-image">
                                <img src="{{ $project->image_url }}" alt="{{ $project->name }}">
                            </div>

                            <div class="project-content">
                                <h3 class="project-title">{{ $project->name }}</h3>
                                <p class="project-description">{{ $project->description }}</p>

                                @if($project->tech_stack)
                                    <p class="project-tech">
                                        <strong>Tech Stack:</strong> {{ $project->tech_stack }}
                                    </p>
                                @endif

                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" target="_blank" class="project-button">
                                        View Project
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p>No Client Projects available.</p>
                    @endforelse
                </div>
            </div>
        </section>

        <!-- INTERNAL PROJECTS -->
        <section class="projects-section">
            <div class="container project-container">
                <h2 class="section-header" style="color: #000000;">INTERNAL PROJECTS</h2>

                <div class="projects-grid">
                    @forelse($internalProjects as $project)
                        <div class="project-card">
                            <div class="project-image">
                                <img src="{{ $project->image_url }}" alt="{{ $project->name }}">
                            </div>

                            <div class="project-content">
                                <h3 class="project-title">{{ $project->name }}</h3>
                                <p class="project-description">{{ $project->description }}</p>

                                @if($project->tech_stack)
                                    <p class="project-tech">
                                        <strong>Tech Stack:</strong> {{ $project->tech_stack }}
                                    </p>
                                @endif

                                @if($project->project_url)
                                    <a href="{{ $project->project_url }}" target="_blank" class="project-button">
                                        View Project
                                    </a>
                                @endif
                            </div>
                        </div>
                    @empty
                        <p>No Internal Projects available.</p>
                    @endforelse
                </div>
            </div>
        </section>

    </div>

    <!-- Styles -->
    <style>
        /* HERO */
        .projects-hero {
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 100%);
            padding: 100px 20px;
            text-align: center;
            color: white;
            position: relative;
        }

        .hero-title {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .hero-description {
            font-size: 1.25rem;
            max-width: 700px;
            margin: 0 auto;
            color: rgba(255, 255, 255, 0.85);
            line-height: 1.8;
        }

        /* SECTION */
        .projects-section {
            padding: 80px 20px;
            background: #ffffff;
        }

        .project-container {
            max-width: 1200px;
            margin: auto;
        }

        /* GRID */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        /* CARD */
        .project-card {
            background: #ffffff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.08);
            transition: 0.4s ease;
            border: 1px solid rgba(0, 0, 0, 0.08);
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(14, 183, 234, 0.25);
            border-color: #0eb7ea;
        }

        .project-image img {
            width: 100%;
            height: 230px;
            object-fit: cover;
        }

        .project-content {
            padding: 25px;
        }

        .project-title {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .project-description {
            color: #666;
            line-height: 1.7;
            margin-bottom: 15px;
        }

        .project-tech {
            color: #333;
            font-size: 0.95rem;
            margin-bottom: 20px;
        }

        .project-button {
            display: inline-block;
            background: #0eb7ea;
            color: white;
            padding: 12px 25px;
            border-radius: 50px;
            font-weight: 700;
            text-decoration: none;
            transition: 0.3s ease;
            box-shadow: 0 8px 25px rgba(14, 183, 234, 0.4);
        }

        .project-button:hover {
            background: #ffffff;
            color: #000;
            transform: translateY(-3px);
        }

        .section-header {
            font-size: 2.5rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 50px;
            position: relative;
        }

        .section-header::after {
            content: '';
            width: 80px;
            height: 4px;
            position: absolute;
            background: #0eb7ea;
            bottom: -12px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        @media(max-width: 768px) {
            .hero-title { font-size: 2rem; }
            .hero-description { font-size: 1rem; }
            .projects-grid { grid-template-columns: 1fr; }
        }
    </style>

@endsection

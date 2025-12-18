<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            padding: 40px;
            background: #f8f9fa;
        }

        .content-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .section-header h2 {
            color: #2c3e50;
            font-weight: 600;
            margin: 0;
        }

        .section-header i {
            color: #667eea;
            margin-right: 8px;
        }

        .toolbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            margin-bottom: 24px;
            flex-wrap: wrap;
        }

        .search-container {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 45px 12px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 25px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .search-input:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 4px rgba(102, 126, 234, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            pointer-events: none;
        }

        .clear-search {
            position: absolute;
            right: 16px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #6c757d;
            cursor: pointer;
            padding: 4px;
            display: none;
        }

        .clear-search:hover {
            color: #495057;
        }

        .btn-add-main {
            background: linear-gradient(135deg, #34d710 0%, #026149 100%);
            color: white;
            border: none;
            padding: 12px 28px;
            border-radius: 25px;
            font-weight: 500;
            transition: all 0.3s;
            white-space: nowrap;
            box-shadow: 0 4px 15px rgba(102, 126, 234, 0.3);
        }

        .btn-add-main:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(102, 126, 234, 0.4);
        }

        .btn-add-main i {
            margin-right: 8px;
        }

        .modal-content {
            border: none;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            background: linear-gradient(135deg, #026149 0%, #ffffff 100%);
            color: white;
            border-radius: 12px 12px 0 0;
            padding: 20px 24px;
            border: none;
        }

        .modal-header h5 {
            margin: 0;
            font-weight: 600;
        }

        .modal-header .btn-close {
            filter: brightness(0) invert(1);
            opacity: 0.8;
        }

        .modal-header .btn-close:hover {
            opacity: 1;
        }

        .modal-body {
            padding: 24px;
        }

        .form-label {
            font-weight: 500;
            color: #495057;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .form-control, .form-select {
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 10px 12px;
            font-size: 14px;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.15);
        }

        .btn-add {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-add:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        .btn-cancel {
            background: #6c757d;
            color: white;
            border: none;
            padding: 10px 24px;
            border-radius: 6px;
            font-weight: 500;
            transition: all 0.3s;
        }

        .btn-cancel:hover {
            background: #5c636a;
        }

        .text-danger {
            color: #dc3545;
        }

        /* Demo table styling */
        .solutions-table {
            margin-top: 20px;
        }

        .table-responsive {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        @media (max-width: 768px) {
            .toolbar {
                flex-direction: column;
                align-items: stretch;
            }

            .search-container {
                max-width: 100%;
            }

            .btn-add-main {
                width: 100%;
                justify-content: center;
            }
        }


        body {
            background: #f0fdf4;
            overflow-x: hidden;
        }

        .navbar {
            box-shadow: 0 2px 8px rgba(0,128,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
            background: #ffffff;
        }

        .dashboard-container {
            display: flex;
            margin-top: 56px;
            min-height: calc(100vh - 56px);
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #026149 0%, #065f46 100%);
            color: white;
            position: fixed;
            left: 0;
            top: 56px;
            bottom: 0;
            overflow-y: auto;
            box-shadow: 2px 0 15px rgba(0,128,0,0.15);
            z-index: 1020;
        }

        .sidebar-header {
            padding: 20px;
            background: rgba(0,0,0,0.2);
            border-bottom: 1px solid rgba(152,251,152,0.2);
        }

        .sidebar-header h4 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            color: #98fb98;
        }

        .sidebar-menu {
            list-style: none;
            padding: 15px 0;
        }

        .sidebar-menu li {
            margin: 5px 0;
        }

        .sidebar-menu a {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #d1fae5;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }

        .sidebar-menu a:hover {
            background: rgba(152,251,152,0.1);
            border-left-color: #90ee90;
            padding-left: 25px;
        }

        .sidebar-menu a.active {
            background: rgba(144,238,144,0.2);
            border-left-color: #90ee90;
            font-weight: bold;
        }

        .sidebar-menu a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
            color: #98fb98;
        }

        .main-content {
            margin-left: 250px;
            flex: 1;
            padding: 30px;
            width: calc(100% - 250px);
        }

        .content-section {
            display: none;
        }

        .content-section.active {
            display: block;
        }

        .section-header {
            background: linear-gradient(135deg, #026149 0%, #ffffff 100%);
            color: white;
            padding: 20px 25px;
            border-radius: 12px 12px 0 0;
            margin-bottom: 0;
            box-shadow: 0 4px 12px rgba(5,150,105,0.25);
        }

        .section-header h2 {
            margin: 0;
            font-size: 26px;
            font-weight: 700;
            letter-spacing: 0.3px;
            color: #ffffff;
        }

        .add-form {
            background: #ffffff;
            padding: 25px;
            border-radius: 0 0 12px 12px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            border-left: 5px solid #10b981;
        }

        .add-form h5 {
            color: #064e3b;
            margin-bottom: 18px;
            font-weight: 700;
            font-size: 18px;
        }

        .add-form label {
            color: #064e3b;
            font-weight: 600;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .item-card {
            background: white;
            border-radius: 12px;
            margin-bottom: 18px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
            border-left: 5px solid #059669;
            padding: 20px;
        }

        .item-card h5, .item-card h6 {
            color: #064e3b;
            font-weight: 700;
        }

        .item-card p, .item-card span {
            color: #065f46;
            font-weight: 500;
        }

        .btn-group-actions {
            display: flex;
            gap: 8px;
        }

        .action-label {
            font-weight: 700;
            color: #064e3b;
            margin-bottom: 8px;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .btn-update {
            background: #059669;
            color: white;
            font-weight: 600;
            padding: 8px 16px;
            border: none;
            font-size: 0.9rem;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-update:hover {
            background: #047857;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(5,150,105,0.4);
        }

        .btn-delete {
            background: #dc2626;
            color: white;
            font-weight: 600;
            padding: 8px 16px;
            border: none;
            font-size: 0.9rem;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-delete:hover {
            background: #b91c1c;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220,38,38,0.4);
        }

        .btn-add {
            background: #10b981;
            color: white;
            font-weight: 600;
            font-size: 0.9rem;
            padding: 8px 16px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-add:hover {
            background: #059669;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16,185,129,0.4);
        }

        .btn-primary {
            background: #059669;
            border: none;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: #047857;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(5,150,105,0.4);
        }

        /* Quick Actions Buttons */
        .btn-outline-primary {
            border: 2px solid #059669;
            color: #059669;
            background: transparent;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-outline-primary:hover {
            background: #059669;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(5,150,105,0.3);
        }

        .btn-outline-success {
            border: 2px solid #10b981;
            color: #10b981;
            background: transparent;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-outline-success:hover {
            background: #10b981;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16,185,129,0.3);
        }

        .btn-outline-warning {
            border: 2px solid #8fbc8f;
            color: #047857;
            background: transparent;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-outline-warning:hover {
            background: #8fbc8f;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(143,188,143,0.3);
        }

        .btn-outline-danger {
            border: 2px solid #dc2626;
            color: #dc2626;
            background: transparent;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 6px;
            transition: all 0.3s;
        }

        .btn-outline-danger:hover {
            background: #dc2626;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220,38,38,0.3);
        }

        .form-control, .form-select {
            border: 2px solid #d1fae5;
            border-radius: 6px;
            padding: 10px 14px;
            font-size: 14px;
            transition: all 0.3s;
            color: #064e3b;
        }

        .form-control:focus, .form-select:focus {
            border-color: #059669;
            box-shadow: 0 0 0 3px rgba(5,150,105,0.15);
            outline: none;
        }

        .btn-update i, .btn-delete i, .btn-add i {
            font-size: 0.85rem;
        }

        /* Dashboard Statistics Cards */
        .card {
            border-radius: 10px;
            transition: all 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.15);
        }

        /* List Group Styling */
        .list-group-item {
            border-color: #d1fae5;
        }

        .text-info {
            color: #059669 !important;
        }

        .text-success {
            color: #10b981 !important;
        }

        .text-warning {
            color: #8fbc8f !important;
        }

        .text-muted {
            color: #6b7280 !important;
        }

        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .main-content {
                margin-left: 200px;
                width: calc(100% - 200px);
            }

        }
</style>
</head>
<body>
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">
            <i class="fas fa-cog"></i> CodeXpress Admin Panel
        </span>
        <a href="/admin-logout" class="btn btn-danger btn-sm">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
</nav>

<div class="dashboard-container">
    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h4><i class="fas fa-bars"></i> Management</h4>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="#" class="menu-link active" data-section="dashboard">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="solutions">
                    <i class="fas fa-cogs"></i>
                    <span>Solutions</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="technologies">
                    <i class="fas fa-microchip"></i>
                    <span>Technologies</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="industries">
                    <i class="fas fa-industry"></i>
                    <span>Industries</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="careers">
                    <i class="fas fa-briefcase"></i>
                    <span>Careers</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="courses">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Courses</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="projects">
                    <i class="fas fa-project-diagram"></i>
                    <span>Projects</span>
                </a>
            </li>
            <li>
                <a href="#" class="menu-link" data-section="feedback">
                    <i class="fas fa-comment-dots"></i>
                    <span>Feedback</span>
                </a>
            </li>


        </ul>
    </div>

    <!-- MAIN CONTENT -->
    <div class="main-content">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

            <!-- ========== DASHBOARD SECTION ========== -->
            <div class="content-section active" id="dashboard-section">
                <div class="section-header">
                    <h2><i class="fas fa-tachometer-alt"></i> Dashboard Overview</h2>
                </div>

                <div style="background: white; padding: 30px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
                    <!-- Statistics Cards -->
                    <div class="row g-4 mb-4">
                        <div class="col-md-3">
                            <div class="card text-center" style="border-left: 5px solid #667eea; background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);">
                                <div class="card-body">
                                    <i class="fas fa-cogs fa-3x mb-3" style="color: #667eea;"></i>
                                    <h3 class="mb-0">{{ count($solutions) }}</h3>
                                    <p class="text-muted mb-0">Total Solutions</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-center" style="border-left: 5px solid #28a745; background: linear-gradient(135deg, #e0f7e9 0%, #a8e6cf 100%);">
                                <div class="card-body">
                                    <i class="fas fa-microchip fa-3x mb-3" style="color: #28a745;"></i>
                                    <h3 class="mb-0">{{ count($technologies) }}</h3>
                                    <p class="text-muted mb-0">Technologies</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-center" style="border-left: 5px solid #ffc107; background: linear-gradient(135deg, #fff9e6 0%, #ffe082 100%);">
                                <div class="card-body">
                                    <i class="fas fa-industry fa-3x mb-3" style="color: #ffc107;"></i>
                                    <h3 class="mb-0">{{ count($industries) }}</h3>
                                    <p class="text-muted mb-0">Industries</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-center" style="border-left: 5px solid #dc3545; background: linear-gradient(135deg, #ffe6e9 0%, #ffb3ba 100%);">
                                <div class="card-body">
                                    <i class="fas fa-briefcase fa-3x mb-3" style="color: #dc3545;"></i>
                                    <h3 class="mb-0">{{ count($careers) }}</h3>
                                    <p class="text-muted mb-0">Career Openings</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Stats -->
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="card" style="border-left: 5px solid #17a2b8;">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-chart-line"></i> Recent Activity</h5>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span><i class="fas fa-graduation-cap text-info"></i> Total Courses</span>
                                            <strong>{{ count($courses) }}</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span><i class="fas fa-layer-group text-success"></i> Solution Categories</span>
                                            <strong>2</strong>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-between">
                                            <span><i class="fas fa-building text-warning"></i> Industry Categories</span>
                                            <strong>3</strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card" style="border-left: 5px solid #6610f2;">
                                <div class="card-body">
                                    <h5 class="card-title"><i class="fas fa-info-circle"></i> Quick Actions</h5>
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=courses]').click()">
                                            <i class="fas fa-graduation-cap"></i> Manage Courses
                                        </button>
                                        <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=solutions]').click()">
                                            <i class="fas fa-cogs"></i> Manage Solutions
                                        </button>
                                        <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=technologies]').click()">
                                            <i class="fas fa-microchip"></i> Manage Technologies
                                        </button>
                                        <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=industries]').click()">
                                            <i class="fas fa-industry"></i> Manage Industries
                                        </button>
                                        <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=careers]').click()">
                                            <i class="fas fa-briefcase"></i> Manage Careers
                                        </button>
                                        <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=projects]').click()">
                                            <i class="fas fa-project-diagram"></i> Manage Projects
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ========== SOLUTIONS SECTION ========== -->
            <div class="content-section" id="solutions-section">
                <div class="section-header">
                    <h2><i class="fas fa-cogs"></i> Solutions Management</h2>
                </div>
                <br>

                <!-- Toolbar with Search and Add Button -->
                <div class="toolbar">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input
                            type="text"
                            class="search-input"
                            id="searchSolutions"
                            placeholder="Search solutions by name, category, or description..."
                            autocomplete="off"
                        >
                        <button class="clear-search" id="clearSearch">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-add-main" data-bs-toggle="modal" data-bs-target="#addSolutionModal">
                        <i class="fas fa-plus-circle"></i> Add New Solution
                    </button>
                </div>

                <!-- add solution model -->

                <div class="modal fade" id="addSolutionModal" tabindex="-1" aria-labelledby="addSolutionModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addSolutionModalLabel">
                                    <i class="fas fa-plus-circle"></i> Add New Solution
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/admin/solution/add" id="addSolutionForm">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Solution Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter solution name..." required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Icon URL</label>
                                            <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL...">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Icon Class</label>
                                            <input type="text" name="icon_class" class="form-control" placeholder="fas fa-icon...">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Category <span class="text-danger">*</span></label>
                                            <select name="category" class="form-select" required>
                                                <option value="">Select category...</option>
                                                <option value="TOP SOLUTIONS">TOP SOLUTIONS</option>
                                                <option value="ENTERPRISE FOCUSED">ENTERPRISE FOCUSED</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Display Order</label>
                                            <input type="number" name="order" class="form-control" placeholder="0" value="0">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" class="form-control" placeholder="Enter solution description..." rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-4">
                                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn-add">
                                            <i class="fas fa-plus"></i> Add Solution
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>



            <!-- Solutions Table -->
                <div class="table-responsive mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 80px;">Icon</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="width: 150px;">Category</th>
                            <th style="width: 100px;">Order</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($solutions as $solution)
                            <tr>
                                <td class="text-center">
                                    @if(isset($solution->icon_url) && $solution->icon_url)
                                        <img src="{{ $solution->icon_url }}" alt="{{ $solution->name }}"
                                             style="width: 50px; height: 50px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 5px; background: #f8f9fa;">
                                    @elseif(isset($solution->icon_class) && $solution->icon_class)
                                        <div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                            <i class="{{ $solution->icon_class }}" style="font-size: 24px; color: #6c5ce7;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $solution->name }}</strong>
                                </td>
                                <td>
                                    <small>{{ $solution->description }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-primary">{{ $solution->category }}</span>
                                </td>
                                <td class="text-center">
                                    {{ $solution->order ?? 0 }}
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-update" data-bs-toggle="modal" data-bs-target="#editModal{{ $solution->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $solution->id }}" data-type="solution">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Edit Modals -->
                @foreach($solutions as $solution)
                    <div class="modal fade" id="editModal{{ $solution->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Solution</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="/admin/solution/{{ $solution->id }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Solution Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $solution->name }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Category</label>
                                                <select name="category" class="form-select" required>
                                                    <option value="TOP SOLUTIONS" {{ $solution->category=='TOP SOLUTIONS' ? 'selected':'' }}>TOP SOLUTIONS</option>
                                                    <option value="ENTERPRISE FOCUSED" {{ $solution->category=='ENTERPRISE FOCUSED' ? 'selected':'' }}>ENTERPRISE FOCUSED</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Icon URL</label>
                                                <input type="url" name="icon_url" class="form-control" value="{{ $solution->icon_url ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Icon Class</label>
                                                <input type="text" name="icon_class" class="form-control" value="{{ $solution->icon_class ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Display Order</label>
                                                <input type="number" name="order" class="form-control" value="{{ $solution->order ?? 0 }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control" rows="4" required>{{ $solution->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-update">
                                            <i class="fas fa-save"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
    </div>


        <!-- ========== TECHNOLOGIES SECTION ========== -->

    <!-- ========== TECHNOLOGIES SECTION ========== -->
    <div class="content-section" id="technologies-section">
        <div class="section-header">
            <h2><i class="fas fa-microchip"></i> Technologies Management</h2>
        </div>
        <br>

        <!-- Toolbar with Search and Add Button -->
        <div class="toolbar">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input
                    type="text"
                    class="search-input"
                    id="searchTechnologies"
                    placeholder="Search technologies by name or description..."
                    autocomplete="off"
                >
                <button class="clear-search" id="clearSearchTech">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <button type="button" class="btn-add-main" data-bs-toggle="modal" data-bs-target="#addTechnologyModal">
                <i class="fas fa-plus-circle"></i> Add New Technology
            </button>
        </div>

        <!-- Add Technology Modal -->
        <div class="modal fade" id="addTechnologyModal" tabindex="-1" aria-labelledby="addTechnologyModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addTechnologyModalLabel">
                            <i class="fas fa-plus-circle"></i> Add New Technology
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/admin/technology/add" id="addTechnologyForm">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label">Technology Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter technology name..." required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Icon URL <span class="text-danger">*</span></label>
                                    <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL..." required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" placeholder="fas fa-icon...">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Description <span class="text-danger">*</span></label>
                                    <textarea name="description" class="form-control" placeholder="Enter technology description..." rows="3" required></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end gap-2 mt-4">
                                <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                    <i class="fas fa-times"></i> Cancel
                                </button>
                                <button type="submit" class="btn-add">
                                    <i class="fas fa-plus"></i> Add Technology
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Technologies Table -->
        <div class="table-responsive mt-4">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th style="width: 80px;">Icon</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th style="width: 150px;" class="text-center">Actions</th>
                </tr>
                </thead>
                <tbody id="technologiesTableBody">
                @foreach($technologies as $tech)
                    <tr>
                        <td class="text-center">
                            @if(isset($tech->icon_url) && $tech->icon_url)
                                <img src="{{ $tech->icon_url }}" alt="{{ $tech->name }}"
                                     style="width: 50px; height: 50px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 5px; background: #f8f9fa;">
                            @elseif(isset($tech->icon_class) && $tech->icon_class)
                                <div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                    <i class="{{ $tech->icon_class }}" style="font-size: 24px; color: #6c5ce7;"></i>
                                </div>
                            @endif
                        </td>
                        <td>
                            <strong>{{ $tech->name }}</strong>
                        </td>
                        <td>
                            <small>{{ $tech->description }}</small>
                        </td>
                        <td class="text-center">
                            <button type="button" class="btn btn-sm btn-update" data-bs-toggle="modal" data-bs-target="#editModalTech{{ $tech->id }}">
                                <i class="fas fa-edit"></i>
                            </button>
                            <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $tech->id }}" data-type="technology">
                                <i class="fas fa-trash-alt"></i>
                            </button>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <!-- Edit Modals -->
        @foreach($technologies as $tech)
            <div class="modal fade" id="editModalTech{{ $tech->id }}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Technology</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form method="POST" action="/admin/technology/{{ $tech->id }}">
                            @csrf
                            <div class="modal-body">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label class="form-label">Technology Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $tech->name }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="form-label">Icon URL</label>
                                        <input type="url" name="icon_url" class="form-control" value="{{ $tech->icon_url }}" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Icon Class</label>
                                        <input type="text" name="icon_class" class="form-control" value="{{ $tech->icon_class ?? '' }}">
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label">Description</label>
                                        <textarea name="description" class="form-control" rows="4" required>{{ $tech->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-update">
                                    <i class="fas fa-save"></i> Save Changes
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

            <!-- ========== INDUSTRIES SECTION ========== -->
            <!-- ========== INDUSTRIES SECTION ========== -->
            <!-- ========== INDUSTRIES SECTION ========== -->
            <div class="content-section" id="industries-section">
                <div class="section-header">
                    <h2><i class="fas fa-industry"></i> Industries Management</h2>
                </div>
                <br>

                <!-- Toolbar with Search and Add Button -->
                <div class="toolbar">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input
                            type="text"
                            class="search-input"
                            id="searchIndustries"
                            placeholder="Search industries by name, category, or description..."
                            autocomplete="off"
                        >
                        <button class="clear-search" id="clearSearchIndustries">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-add-main" data-bs-toggle="modal" data-bs-target="#addIndustryModal">
                        <i class="fas fa-plus-circle"></i> Add New Industry
                    </button>
                </div>

                <!-- Add Industry Modal -->
                <div class="modal fade" id="addIndustryModal" tabindex="-1" aria-labelledby="addIndustryModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addIndustryModalLabel">
                                    <i class="fas fa-plus-circle"></i> Add New Industry
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/admin/industry/add" id="addIndustryForm">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Industry Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter industry name..." required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Icon URL</label>
                                            <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL...">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Icon Class</label>
                                            <input type="text" name="icon_class" class="form-control" placeholder="fas fa-icon...">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Category <span class="text-danger">*</span></label>
                                            <select name="category" class="form-select" required>
                                                <option value="">Select category...</option>
                                                <option value="PRIMARY INDUSTRIES">PRIMARY INDUSTRIES</option>
                                                <option value="TECH & SERVICES">TECH & SERVICES</option>
                                                <option value="EMERGING SECTORS">EMERGING SECTORS</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Display Order</label>
                                            <input type="number" name="order" class="form-control" placeholder="0" value="0">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" class="form-control" placeholder="Enter industry description..." rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-4">
                                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn-add">
                                            <i class="fas fa-plus"></i> Add Industry
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Industries Table -->
                <div class="table-responsive mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 80px;">Icon</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="width: 150px;">Category</th>
                            <th style="width: 100px;">Order</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="industriesTableBody">
                        @foreach($industries as $industry)
                            <tr>
                                <td class="text-center">
                                    @if(isset($industry->icon_url) && $industry->icon_url)
                                        <img src="{{ $industry->icon_url }}" alt="{{ $industry->name }}"
                                             style="width: 50px; height: 50px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 5px; background: #f8f9fa;">
                                    @elseif(isset($industry->icon_class) && $industry->icon_class)
                                        <div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                            <i class="{{ $industry->icon_class }}" style="font-size: 24px; color: #6c5ce7;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $industry->name }}</strong>
                                </td>
                                <td>
                                    <small>{{ $industry->description }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-primary">{{ $industry->category }}</span>
                                </td>
                                <td class="text-center">
                                    {{ $industry->order ?? 0 }}
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-update" data-bs-toggle="modal" data-bs-target="#editModalIndustry{{ $industry->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $industry->id }}" data-type="industry">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Edit Modals -->
                @foreach($industries as $industry)
                    <div class="modal fade" id="editModalIndustry{{ $industry->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Industry</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="/admin/industry/{{ $industry->id }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Industry Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $industry->name }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Category</label>
                                                <select name="category" class="form-select" required>
                                                    <option value="PRIMARY INDUSTRIES" {{ $industry->category=='PRIMARY INDUSTRIES' ? 'selected':'' }}>PRIMARY INDUSTRIES</option>
                                                    <option value="TECH & SERVICES" {{ $industry->category=='TECH & SERVICES' ? 'selected':'' }}>TECH & SERVICES</option>
                                                    <option value="EMERGING SECTORS" {{ $industry->category=='EMERGING SECTORS' ? 'selected':'' }}>EMERGING SECTORS</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Icon URL</label>
                                                <input type="url" name="icon_url" class="form-control" value="{{ $industry->icon_url ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Icon Class</label>
                                                <input type="text" name="icon_class" class="form-control" value="{{ $industry->icon_class ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Display Order</label>
                                                <input type="number" name="order" class="form-control" value="{{ $industry->order ?? 0 }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control" rows="4" required>{{ $industry->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-update">
                                            <i class="fas fa-save"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        <!-- ========== CAREERS SECTION ========== -->
            <!-- ========== CAREERS SECTION ========== -->
            <div class="content-section" id="careers-section">
                <div class="section-header">
                    <h2><i class="fas fa-briefcase"></i> Careers Management</h2>
                </div>
                <br>

                <!-- Toolbar with Search and Add Button -->
                <div class="toolbar">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input
                            type="text"
                            class="search-input"
                            id="searchCareers"
                            placeholder="Search careers by name, category, or description..."
                            autocomplete="off"
                        >
                        <button class="clear-search" id="clearSearchCareers">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-add-main" data-bs-toggle="modal" data-bs-target="#addCareerModal">
                        <i class="fas fa-plus-circle"></i> Add New Career
                    </button>
                </div>

                <!-- Add Career Modal -->
                <div class="modal fade" id="addCareerModal" tabindex="-1" aria-labelledby="addCareerModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCareerModalLabel">
                                    <i class="fas fa-plus-circle"></i> Add New Career
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/admin/career/add" id="addCareerForm">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-3">
                                            <label class="form-label">Career Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter career name..." required>
                                        </div>
                                        <div class="col-md-3">
                                            <label class="form-label">Icon URL</label>
                                            <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL...">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Icon Class</label>
                                            <input type="text" name="icon_class" class="form-control" placeholder="fas fa-icon...">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Category <span class="text-danger">*</span></label>
                                            <select name="category" class="form-select" required>
                                                <option value="">Select category...</option>
                                                <option value="OPEN POSITIONS">OPEN POSITIONS</option>
                                            </select>
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Display Order</label>
                                            <input type="number" name="order" class="form-control" placeholder="0" value="0">
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" class="form-control" placeholder="Enter career description..." rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-4">
                                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn-add">
                                            <i class="fas fa-plus"></i> Add Career
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Careers Table -->
                <div class="table-responsive mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 80px;">Icon</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="width: 150px;">Category</th>
                            <th style="width: 100px;">Order</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="careersTableBody">
                        @foreach($careers as $career)
                            <tr>
                                <td class="text-center">
                                    @if(isset($career->icon_url) && $career->icon_url)
                                        <img src="{{ $career->icon_url }}" alt="{{ $career->name }}"
                                             style="width: 50px; height: 50px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 5px; background: #f8f9fa;">
                                    @elseif(isset($career->icon_class) && $career->icon_class)
                                        <div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                            <i class="{{ $career->icon_class }}" style="font-size: 24px; color: #6c5ce7;"></i>
                                        </div>
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $career->name }}</strong>
                                </td>
                                <td>
                                    <small>{{ $career->description }}</small>
                                </td>
                                <td>
                                    <span class="badge bg-primary">{{ $career->category }}</span>
                                </td>
                                <td class="text-center">
                                    {{ $career->order ?? 0 }}
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-update" data-bs-toggle="modal" data-bs-target="#editModalCareer{{ $career->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $career->id }}" data-type="career">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Edit Modals -->
                @foreach($careers as $career)
                    <div class="modal fade" id="editModalCareer{{ $career->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Career</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="/admin/career/{{ $career->id }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Career Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $career->name }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Category</label>
                                                <select name="category" class="form-select" required>
                                                    <option value="OPEN POSITIONS" {{ $career->category=='OPEN POSITIONS' ? 'selected':'' }}>OPEN POSITIONS</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Icon URL</label>
                                                <input type="url" name="icon_url" class="form-control" value="{{ $career->icon_url ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Icon Class</label>
                                                <input type="text" name="icon_class" class="form-control" value="{{ $career->icon_class ?? '' }}">
                                            </div>
                                            <div class="col-md-3">
                                                <label class="form-label">Display Order</label>
                                                <input type="number" name="order" class="form-control" value="{{ $career->order ?? 0 }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control" rows="4" required>{{ $career->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-update">
                                            <i class="fas fa-save"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- ========== COURSES SECTION ========== -->
            <!-- ========== COURSES SECTION ========== -->
            <div class="content-section" id="courses-section">
                <div class="section-header">
                    <h2><i class="fas fa-graduation-cap"></i> Courses Management</h2>
                </div>
                <br>

                <!-- Toolbar with Search and Add Button -->
                <div class="toolbar">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input
                            type="text"
                            class="search-input"
                            id="searchCourses"
                            placeholder="Search courses by name or description..."
                            autocomplete="off"
                        >
                        <button class="clear-search" id="clearSearchCourses">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-add-main" data-bs-toggle="modal" data-bs-target="#addCourseModal">
                        <i class="fas fa-plus-circle"></i> Add New Course
                    </button>
                </div>

                <!-- Add Course Modal -->
                <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="addCourseModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addCourseModalLabel">
                                    <i class="fas fa-plus-circle"></i> Add New Course
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/admin/course/add" id="addCourseForm">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Course Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter course name..." required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Icon URL</label>
                                            <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL...">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description <span class="text-danger">*</span></label>
                                            <textarea name="description" class="form-control" placeholder="Enter course description..." rows="3" required></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Course Content (one item per line)</label>
                                            <textarea name="content" class="form-control" placeholder="Enter course content, one item per line..." rows="5"></textarea>
                                            <small class="text-muted">Each line will be displayed as a separate content item with a checkmark</small>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Projects</label>
                                            <input type="text" name="projects" class="form-control" placeholder="Project 1, Project 2, Project 3">
                                            <small class="text-muted">Comma-separated list of projects</small>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-4">
                                        <button type="button" class="btn-cancel" data-bs-dismiss="modal">
                                            <i class="fas fa-times"></i> Cancel
                                        </button>
                                        <button type="submit" class="btn-add">
                                            <i class="fas fa-plus"></i> Add Course
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Courses Table -->
                <div class="table-responsive mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 80px;">Icon</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th style="width: 150px;">Projects</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="coursesTableBody">
                        @foreach($courses as $course)
                            <tr>
                                <td class="text-center">
                                    @if(isset($course->icon_url) && $course->icon_url)
                                        <img src="{{ $course->icon_url }}" alt="{{ $course->name }}"
                                             style="width: 50px; height: 50px; object-fit: contain; border: 2px solid #0eb7ea; border-radius: 8px; padding: 5px; background: #f8f9fa;">
                                    @endif
                                </td>
                                <td>
                                    <strong>{{ $course->name }}</strong>
                                </td>
                                <td>
                                    <small>{{ $course->description }}</small>
                                </td>
                                <td>
                                    <small class="text-muted">{{ $course->projects ?? 'N/A' }}</small>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-update" data-bs-toggle="modal" data-bs-target="#editModalCourse{{ $course->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $course->id }}" data-type="course">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Edit Modals -->
                @foreach($courses as $course)
                    <div class="modal fade" id="editModalCourse{{ $course->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Course</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="/admin/course/{{ $course->id }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Course Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Icon URL</label>
                                                <input type="url" name="icon_url" class="form-control" value="{{ $course->icon_url ?? '' }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control" rows="3" required>{{ $course->description }}</textarea>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Course Content (one item per line)</label>
                                                <textarea name="content" class="form-control" rows="6" placeholder="Enter course content, one item per line...">{{ is_array($course->content) ? implode("\n", $course->content) : (is_string($course->content) ? implode("\n", json_decode($course->content, true) ?? []) : '') }}</textarea>
                                                <small class="text-muted">Each line will be displayed as a separate content item with a checkmark</small>
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Projects</label>
                                                <input type="text" name="projects" class="form-control" value="{{ $course->projects ?? '' }}" placeholder="Project 1, Project 2">
                                                <small class="text-muted">Comma-separated list of projects</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-update">
                                            <i class="fas fa-save"></i> Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- ========== PROJECTS SECTION ========== -->
            <!-- ========== PROJECTS SECTION ========== -->
            <div class="content-section" id="projects-section">
                <div class="section-header">
                    <h2><i class="fas fa-project-diagram"></i> Projects Management</h2>
                </div>
                <br>

                <!-- Toolbar with Search and Add Button -->
                <div class="toolbar">
                    <div class="search-container">
                        <i class="fas fa-search search-icon"></i>
                        <input
                            type="text"
                            class="search-input"
                            id="searchProjects"
                            placeholder="Search projects by name, description, or category..."
                            autocomplete="off"
                        >
                        <button class="clear-search" id="clearSearchProjects">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <button type="button" class="btn-add-main" data-bs-toggle="modal" data-bs-target="#addProjectModal">
                        <i class="fas fa-plus-circle"></i> Add New Project
                    </button>
                </div>

                <!-- Add Project Modal -->
                <div class="modal fade" id="addProjectModal" tabindex="-1" aria-labelledby="addProjectModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addProjectModalLabel"><i class="fas fa-plus-circle"></i> Add New Project</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="/admin/project/add" id="addProjectForm">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <label class="form-label">Project Name <span class="text-danger">*</span></label>
                                            <input type="text" name="name" class="form-control" placeholder="Enter project name..." required>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Category</label>
                                            <input type="text" name="category" class="form-control" placeholder="Enter category...">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Description</label>
                                            <textarea name="description" class="form-control" rows="3" placeholder="Enter project description..."></textarea>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Image URL</label>
                                            <input type="url" name="image_url" class="form-control" placeholder="Enter image URL...">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Tech Stack</label>
                                            <input type="text" name="tech_stack" class="form-control" placeholder="Tech stack, e.g., Laravel, Vue.js">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label">Project URL</label>
                                            <input type="url" name="project_url" class="form-control" placeholder="Enter live project URL">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Featured?</label>
                                            <select name="is_featured" class="form-control">
                                                <option value="1">Yes</option>
                                                <option value="0" selected>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="form-label">Active?</label>
                                            <select name="is_active" class="form-control">
                                                <option value="1" selected>Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end gap-2 mt-4">
                                        <button type="button" class="btn-cancel" data-bs-dismiss="modal"><i class="fas fa-times"></i> Cancel</button>
                                        <button type="submit" class="btn-add"><i class="fas fa-plus"></i> Add Project</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Projects Table -->
                <div class="table-responsive mt-4">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th style="width: 80px;">Image</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Category</th>
                            <th style="width: 120px;">Featured</th>
                            <th style="width: 150px;" class="text-center">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="projectsTableBody">
                        @foreach($projects as $project)
                            <tr>
                                <td class="text-center">
                                    @if(isset($project->image_url) && $project->image_url)
                                        <img src="{{ $project->image_url }}" alt="{{ $project->name ?? 'Project' }}" style="width: 50px; height: 50px; object-fit: contain; border: 2px solid #0eb7ea; border-radius: 8px; padding: 5px; background: #f8f9fa;">
                                    @endif
                                </td>
                                <td><strong>{{ $project->name ?? 'N/A' }}</strong></td>
                                <td><small>{{ $project->description ?? 'N/A' }}</small></td>
                                <td><small>{{ $project->category ?? 'N/A' }}</small></td>
                                <td class="text-center">
                                    @if(isset($project->is_featured) && $project->is_featured)
                                        <span class="badge bg-success">Yes</span>
                                    @else
                                        <span class="badge bg-secondary">No</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-sm btn-update" data-bs-toggle="modal" data-bs-target="#editModalProject{{ $project->id }}">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $project->id }}" data-type="project">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

                <!-- Edit Modals -->
                @foreach($projects as $project)
                    <div class="modal fade" id="editModalProject{{ $project->id }}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title"><i class="fas fa-edit"></i> Edit Project</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="/admin/project/{{ $project->id }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <label class="form-label">Project Name</label>
                                                <input type="text" name="name" class="form-control" value="{{ $project->name ?? '' }}" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Category</label>
                                                <input type="text" name="category" class="form-control" value="{{ $project->category ?? '' }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Description</label>
                                                <textarea name="description" class="form-control" rows="3">{{ $project->description ?? '' }}</textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Image URL</label>
                                                <input type="url" name="image_url" class="form-control" value="{{ $project->image_url ?? '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Tech Stack</label>
                                                <input type="text" name="tech_stack" class="form-control" value="{{ $project->tech_stack ?? '' }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label class="form-label">Project URL</label>
                                                <input type="url" name="project_url" class="form-control" value="{{ $project->project_url ?? '' }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Featured?</label>
                                                <select name="is_featured" class="form-control">
                                                    <option value="1" {{ ($project->is_featured ?? 0) ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ !($project->is_featured ?? 0) ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Active?</label>
                                                <select name="is_active" class="form-control">
                                                    <option value="1" {{ ($project->is_active ?? 1) ? 'selected' : '' }}>Yes</option>
                                                    <option value="0" {{ !($project->is_active ?? 1) ? 'selected' : '' }}>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-update"><i class="fas fa-save"></i> Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>



<!-- ========== FEEDBACK SECTION ========== -->

<div class="content-section" id="feedback-section">
    <div class="section-header">
        <h2><i class="fas fa-comments"></i> Client Feedback Management</h2>
    </div>
    <br>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Toolbar with Search and Filters -->
    <div class="toolbar">
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input
                type="text"
                class="search-input"
                id="searchFeedback"
                placeholder="Search feedback by name, company, or message..."
                autocomplete="off"
            >
            <button class="clear-search" id="clearFeedbackSearch">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div style="display: flex; gap: 8px;">
            <button type="button" class="btn btn-sm btn-primary" id="filterAll">
                All ({{ $reviews->count() }})
            </button>
            <button type="button" class="btn btn-sm btn-outline-success" id="filterApproved">
                Approved ({{ $reviews->where('is_approved', true)->count() }})
            </button>
            <button type="button" class="btn btn-sm btn-outline-warning" id="filterPending">
                Pending ({{ $reviews->where('is_approved', false)->count() }})
            </button>
        </div>
    </div>

    <!-- Feedback Table -->
    <div class="table-responsive mt-4" style="max-width: 1200px; margin-left: auto; margin-right: auto;">
        <table class="table table-hover table-sm" style="font-size: 0.85rem;">
            <thead>
            <tr style="line-height: 1.2;">
                <th style="width: 120px; padding: 8px;">Name</th>
                <th style="width: 140px; padding: 8px;">Title</th>
                <th style="width: 120px; padding: 8px;">Company</th>
                <th style="padding: 8px;">Message</th>
                <th style="width: 90px; padding: 8px;" class="text-center">Status</th>
                <th style="width: 130px; padding: 8px;" class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody id="feedbackTableBody">
            @foreach($reviews as $review)
                <tr data-status="{{ $review->is_approved ? 'approved' : 'pending' }}" style="line-height: 1.3;">
                    <td style="padding: 8px;">
                        <strong style="font-size: 0.85rem;">{{ $review->name }}</strong>
                    </td>
                    <td style="padding: 8px; font-size: 0.85rem;">{{ $review->title }}</td>
                    <td style="padding: 8px; font-size: 0.85rem;">{{ $review->company ?? '—' }}</td>
                    <td style="padding: 8px;">
                        <small style="font-size: 0.8rem;">{{ Str::limit($review->message, 60) }}</small>
                        @if(strlen($review->message) > 60)
                            <a href="#" data-bs-toggle="modal" data-bs-target="#viewModal{{ $review->id }}" style="color: #059669; text-decoration: none; font-size: 0.75rem;">
                                Read more
                            </a>
                        @endif
                    </td>
                    <td class="text-center" style="padding: 8px;">
                        @if($review->is_approved)
                            <span class="badge bg-success" style="font-size: 0.7rem; padding: 4px 8px;">
                                    <i class="fas fa-check"></i> Approved
                                </span>
                        @else
                            <span class="badge bg-warning" style="font-size: 0.7rem; padding: 4px 8px;">
                                    <i class="fas fa-clock"></i> Pending
                                </span>
                        @endif
                    </td>
                    <td class="text-center" style="padding: 8px;">
                        <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#viewModal{{ $review->id }}" title="View" style="padding: 4px 8px; font-size: 0.75rem;">
                            <i class="fas fa-eye"></i>
                        </button>
                        @if(!$review->is_approved)
                            <form action="/secret-admin-panel/reviews/{{ $review->id }}/approve" method="POST" style="display:inline; margin: 0;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-update" title="Approve" style="padding: 4px 8px; font-size: 0.75rem;">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                        @endif
                        <button class="btn btn-sm btn-delete delete-btn" data-id="{{ $review->id }}" data-type="review" title="Delete" style="padding: 4px 8px; font-size: 0.75rem;">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- View Message Modals -->
@foreach($reviews as $review)
    <div class="modal fade" id="viewModal{{ $review->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="fas fa-comment-dots"></i> Feedback Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label"><strong>Name:</strong></label>
                            <p>{{ $review->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Title:</strong></label>
                            <p>{{ $review->title }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Company:</strong></label>
                            <p>{{ $review->company ?? '—' }}</p>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label"><strong>Status:</strong></label>
                            <p>
                                @if($review->is_approved)
                                    <span class="badge bg-success">
                                        <i class="fas fa-check"></i> Approved
                                    </span>
                                @else
                                    <span class="badge bg-warning">
                                        <i class="fas fa-clock"></i> Pending
                                    </span>
                                @endif
                            </p>
                        </div>
                        <div class="col-12">
                            <label class="form-label"><strong>Full Message:</strong></label>
                            <div class="alert alert-info" style="white-space: pre-wrap;">{{ $review->message }}</div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    @if(!$review->is_approved)
                        <form action="/secret-admin-panel/reviews/{{ $review->id }}/approve" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-update">
                                <i class="fas fa-check"></i> Approve
                            </button>
                        </form>
                    @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endforeach

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Save and restore active section
    function saveActiveSection(section) {
        localStorage.setItem('activeSection', section);
    }

    function getActiveSection() {
        return localStorage.getItem('activeSection') || 'dashboard';
    }

    function showSection(sectionName) {
        // Remove active class from all links
        document.querySelectorAll('.menu-link').forEach(l => l.classList.remove('active'));

        // Add active class to corresponding link
        const activeLink = document.querySelector(`[data-section="${sectionName}"]`);
        if (activeLink) {
            activeLink.classList.add('active');
        }

        // Hide all sections
        document.querySelectorAll('.content-section').forEach(section => {
            section.classList.remove('active');
        });

        // Show selected section
        const targetSection = document.getElementById(sectionName + '-section');
        if (targetSection) {
            targetSection.classList.add('active');
        }

        // Save the active section
        saveActiveSection(sectionName);
    }

    // Restore active section on page load
    document.addEventListener('DOMContentLoaded', function() {
        const activeSection = getActiveSection();
        showSection(activeSection);
    });

    // Sidebar navigation
    document.querySelectorAll('.menu-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const sectionName = this.getAttribute('data-section');
            showSection(sectionName);

            // Scroll to top of content
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });

    // Save section before form submission
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function() {
            const section = this.closest('.content-section');
            if (section) {
                const sectionId = section.id.replace('-section', '');
                saveActiveSection(sectionId);
            }
        });
    });

    // Sweet Alert Delete
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const type = this.getAttribute('data-type');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dc3545',
                    cancelButtonColor: '#6c757d',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = `/admin/${type}/delete/${id}`;
                    }
                });
            });
        });
    });


    // Solution Search Functionality for Laravel Blade Table
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchSolutions');
        const clearButton = document.getElementById('clearSearch');
        const tableBody = document.querySelector('.table-responsive tbody');
        const tableRows = tableBody.querySelectorAll('tr');

        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();

            // Show/hide clear button
            clearButton.style.display = searchTerm ? 'block' : 'none';

            let visibleCount = 0;

            // Filter table rows
            tableRows.forEach(row => {
                // Get all text content from the row
                const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const category = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

                // Check if search term matches name, description, or category
                if (name.includes(searchTerm) ||
                    description.includes(searchTerm) ||
                    category.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide "no results" message
            let noResultsRow = document.getElementById('noResultsRow');

            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResultsRow) {
                    noResultsRow = document.createElement('tr');
                    noResultsRow.id = 'noResultsRow';
                    noResultsRow.innerHTML = `
                    <td colspan="6" class="text-center py-4">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i> No solutions found matching "<strong>${searchTerm}</strong>"
                        </div>
                    </td>
                `;
                    tableBody.appendChild(noResultsRow);
                } else {
                    noResultsRow.querySelector('strong').textContent = searchTerm;
                }
            } else if (noResultsRow) {
                noResultsRow.remove();
            }
        });

        // Clear button functionality
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            clearButton.style.display = 'none';

            // Show all rows
            tableRows.forEach(row => {
                row.style.display = '';
            });

            // Remove no results message
            const noResultsRow = document.getElementById('noResultsRow');
            if (noResultsRow) {
                noResultsRow.remove();
            }

            // Focus back to search input
            searchInput.focus();
        });

        // Optional: Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                clearButton.click();
            }
        });
    });


    <!-- JavaScript for Technologies Search -->

        document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchTechnologies');
        const clearButton = document.getElementById('clearSearchTech');
        const tableBody = document.getElementById('technologiesTableBody');
        const tableRows = tableBody.querySelectorAll('tr');

        // Search functionality
        searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();

        // Show/hide clear button
        clearButton.style.display = searchTerm ? 'block' : 'none';

        let visibleCount = 0;

        // Filter table rows
        tableRows.forEach(row => {
        // Get text content from name and description columns
        const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
        const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

        // Check if search term matches name or description
        if (name.includes(searchTerm) || description.includes(searchTerm)) {
        row.style.display = '';
        visibleCount++;
    } else {
        row.style.display = 'none';
    }
    });

        // Show/hide "no results" message
        let noResultsRow = document.getElementById('noResultsRowTech');

        if (visibleCount === 0 && searchTerm !== '') {
        if (!noResultsRow) {
        noResultsRow = document.createElement('tr');
        noResultsRow.id = 'noResultsRowTech';
        noResultsRow.innerHTML = `
                    <td colspan="4" class="text-center py-4">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i> No technologies found matching "<strong>${searchTerm}</strong>"
                        </div>
                    </td>
                `;
        tableBody.appendChild(noResultsRow);
    } else {
        noResultsRow.querySelector('strong').textContent = searchTerm;
    }
    } else if (noResultsRow) {
        noResultsRow.remove();
    }
    });

        // Clear button functionality
        clearButton.addEventListener('click', function() {
        searchInput.value = '';
        clearButton.style.display = 'none';

        // Show all rows
        tableRows.forEach(row => {
        row.style.display = '';
    });

        // Remove no results message
        const noResultsRow = document.getElementById('noResultsRowTech');
        if (noResultsRow) {
        noResultsRow.remove();
    }

        // Focus back to search input
        searchInput.focus();
    });

        // Optional: Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
        clearButton.click();
    }
    });
    });

    // industry search
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchIndustries');
        const clearButton = document.getElementById('clearSearchIndustries');
        const tableBody = document.getElementById('industriesTableBody');
        const tableRows = tableBody.querySelectorAll('tr');

        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();

            // Show/hide clear button
            clearButton.style.display = searchTerm ? 'block' : 'none';

            let visibleCount = 0;

            // Filter table rows
            tableRows.forEach(row => {
                // Get text content from name, description, and category columns
                const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const category = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

                // Check if search term matches name, description, or category
                if (name.includes(searchTerm) || description.includes(searchTerm) || category.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide "no results" message
            let noResultsRow = document.getElementById('noResultsRowIndustries');

            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResultsRow) {
                    noResultsRow = document.createElement('tr');
                    noResultsRow.id = 'noResultsRowIndustries';
                    noResultsRow.innerHTML = `
                    <td colspan="6" class="text-center py-4">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i> No industries found matching "<strong>${searchTerm}</strong>"
                        </div>
                    </td>
                `;
                    tableBody.appendChild(noResultsRow);
                } else {
                    noResultsRow.querySelector('strong').textContent = searchTerm;
                }
            } else if (noResultsRow) {
                noResultsRow.remove();
            }
        });

        // Clear button functionality
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            clearButton.style.display = 'none';

            // Show all rows
            tableRows.forEach(row => {
                row.style.display = '';
            });

            // Remove no results message
            const noResultsRow = document.getElementById('noResultsRowIndustries');
            if (noResultsRow) {
                noResultsRow.remove();
            }

            // Focus back to search input
            searchInput.focus();
        });

        // Optional: Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                clearButton.click();
            }
        });
    });


    //careers
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchCareers');
        const clearButton = document.getElementById('clearSearchCareers');
        const tableBody = document.getElementById('careersTableBody');
        const tableRows = tableBody.querySelectorAll('tr');

        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();

            // Show/hide clear button
            clearButton.style.display = searchTerm ? 'block' : 'none';

            let visibleCount = 0;

            // Filter table rows
            tableRows.forEach(row => {
                // Get text content from name, description, and category columns
                const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const category = row.querySelector('td:nth-child(4)').textContent.toLowerCase();

                // Check if search term matches name, description, or category
                if (name.includes(searchTerm) || description.includes(searchTerm) || category.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide "no results" message
            let noResultsRow = document.getElementById('noResultsRowCareers');

            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResultsRow) {
                    noResultsRow = document.createElement('tr');
                    noResultsRow.id = 'noResultsRowCareers';
                    noResultsRow.innerHTML = `
                    <td colspan="6" class="text-center py-4">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i> No careers found matching "<strong>${searchTerm}</strong>"
                        </div>
                    </td>
                `;
                    tableBody.appendChild(noResultsRow);
                } else {
                    noResultsRow.querySelector('strong').textContent = searchTerm;
                }
            } else if (noResultsRow) {
                noResultsRow.remove();
            }
        });

        // Clear button functionality
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            clearButton.style.display = 'none';

            // Show all rows
            tableRows.forEach(row => {
                row.style.display = '';
            });

            // Remove no results message
            const noResultsRow = document.getElementById('noResultsRowCareers');
            if (noResultsRow) {
                noResultsRow.remove();
            }

            // Focus back to search input
            searchInput.focus();
        });

        // Optional: Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                clearButton.click();
            }
        });
    });


//courses

    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchCourses');
        const clearButton = document.getElementById('clearSearchCourses');
        const tableBody = document.getElementById('coursesTableBody');
        const tableRows = tableBody.querySelectorAll('tr');

        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();

            // Show/hide clear button
            clearButton.style.display = searchTerm ? 'block' : 'none';

            let visibleCount = 0;

            // Filter table rows
            tableRows.forEach(row => {
                // Get text content from name and description columns
                const name = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();

                // Check if search term matches name or description
                if (name.includes(searchTerm) || description.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide "no results" message
            let noResultsRow = document.getElementById('noResultsRowCourses');

            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResultsRow) {
                    noResultsRow = document.createElement('tr');
                    noResultsRow.id = 'noResultsRowCourses';
                    noResultsRow.innerHTML = `
                    <td colspan="5" class="text-center py-4">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i> No courses found matching "<strong>${searchTerm}</strong>"
                        </div>
                    </td>
                `;
                    tableBody.appendChild(noResultsRow);
                } else {
                    noResultsRow.querySelector('strong').textContent = searchTerm;
                }
            } else if (noResultsRow) {
                noResultsRow.remove();
            }
        });

        // Clear button functionality
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            clearButton.style.display = 'none';

            // Show all rows
            tableRows.forEach(row => {
                row.style.display = '';
            });

            // Remove no results message
            const noResultsRow = document.getElementById('noResultsRowCourses');
            if (noResultsRow) {
                noResultsRow.remove();
            }

            // Focus back to search input
            searchInput.focus();
        });

        // Optional: Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                clearButton.click();
            }
        });
    });

    // Projects Search Functionality for Laravel Blade Table
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchProjects');
        const clearButton = document.getElementById('clearSearchProjects');
        const tableBody = document.querySelector('#projectsTableBody');
        const tableRows = tableBody.querySelectorAll('tr');

        // Search functionality
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase().trim();

            // Show/hide clear button
            clearButton.style.display = searchTerm ? 'block' : 'none';

            let visibleCount = 0;

            // Filter table rows
            tableRows.forEach(row => {
                // Get all relevant text content from the row
                const title = row.querySelector('td:nth-child(2)').textContent.toLowerCase();
                const description = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
                const category = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
                const featured = row.querySelector('td:nth-child(5)').textContent.toLowerCase();

                // Check if search term matches any column
                if (title.includes(searchTerm) ||
                    description.includes(searchTerm) ||
                    category.includes(searchTerm) ||
                    featured.includes(searchTerm)) {
                    row.style.display = '';
                    visibleCount++;
                } else {
                    row.style.display = 'none';
                }
            });

            // Show/hide "no results" message
            let noResultsRow = document.getElementById('noResultsProjectsRow');

            if (visibleCount === 0 && searchTerm !== '') {
                if (!noResultsRow) {
                    noResultsRow = document.createElement('tr');
                    noResultsRow.id = 'noResultsProjectsRow';
                    noResultsRow.innerHTML = `
                    <td colspan="6" class="text-center py-4">
                        <div class="alert alert-info mb-0">
                            <i class="fas fa-info-circle"></i> No projects found matching "<strong>${searchTerm}</strong>"
                        </div>
                    </td>
                `;
                    tableBody.appendChild(noResultsRow);
                } else {
                    noResultsRow.querySelector('strong').textContent = searchTerm;
                }
            } else if (noResultsRow) {
                noResultsRow.remove();
            }
        });

        // Clear button functionality
        clearButton.addEventListener('click', function() {
            searchInput.value = '';
            clearButton.style.display = 'none';

            // Show all rows
            tableRows.forEach(row => {
                row.style.display = '';
            });

            // Remove no results message
            const noResultsRow = document.getElementById('noResultsProjectsRow');
            if (noResultsRow) {
                noResultsRow.remove();
            }

            // Focus back to search input
            searchInput.focus();
        });

        // Optional: Clear search with Escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                clearButton.click();
            }
        });
    });


    //feedback
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchFeedback');
        const clearSearch = document.getElementById('clearFeedbackSearch');
        const tableBody = document.getElementById('feedbackTableBody');

        if (searchInput && tableBody) {
            const rows = tableBody.getElementsByTagName('tr');

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                clearSearch.style.display = searchTerm ? 'block' : 'none';

                Array.from(rows).forEach(row => {
                    const text = row.textContent.toLowerCase();
                    row.style.display = text.includes(searchTerm) ? '' : 'none';
                });
            });

            clearSearch.addEventListener('click', function() {
                searchInput.value = '';
                this.style.display = 'none';
                Array.from(rows).forEach(row => row.style.display = '');
            });
        }

        const filterAll = document.getElementById('filterAll');
        const filterApproved = document.getElementById('filterApproved');
        const filterPending = document.getElementById('filterPending');

        function setActiveFilter(activeBtn) {
            [filterAll, filterApproved, filterPending].forEach(btn => {
                if (btn) {
                    btn.classList.remove('btn-primary', 'btn-success', 'btn-warning');
                    if (btn === filterAll) btn.classList.add('btn-outline-primary');
                    else if (btn === filterApproved) btn.classList.add('btn-outline-success');
                    else if (btn === filterPending) btn.classList.add('btn-outline-warning');
                }
            });

            if (activeBtn === filterAll) {
                activeBtn.classList.remove('btn-outline-primary');
                activeBtn.classList.add('btn-primary');
            } else if (activeBtn === filterApproved) {
                activeBtn.classList.remove('btn-outline-success');
                activeBtn.classList.add('btn-success');
            } else if (activeBtn === filterPending) {
                activeBtn.classList.remove('btn-outline-warning');
                activeBtn.classList.add('btn-warning');
            }
        }

        if (filterAll && tableBody) {
            const rows = tableBody.getElementsByTagName('tr');

            filterAll.addEventListener('click', function() {
                Array.from(rows).forEach(row => row.style.display = '');
                setActiveFilter(this);
            });

            if (filterApproved) {
                filterApproved.addEventListener('click', function() {
                    Array.from(rows).forEach(row => {
                        row.style.display = row.getAttribute('data-status') === 'approved' ? '' : 'none';
                    });
                    setActiveFilter(this);
                });
            }

            if (filterPending) {
                filterPending.addEventListener('click', function() {
                    Array.from(rows).forEach(row => {
                        row.style.display = row.getAttribute('data-status') === 'pending' ? '' : 'none';
                    });
                    setActiveFilter(this);
                });
            }
        }

        document.querySelectorAll('.delete-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const id = this.getAttribute('data-id');
                const type = this.getAttribute('data-type');

                if (confirm('Are you sure you want to delete this ' + type + '?')) {
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/secret-admin-panel/reviews/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        });
    });

</script>

    </div>
</div>

</body>
</html>

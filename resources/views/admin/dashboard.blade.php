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
            background: linear-gradient(180deg, #064e3b 0%, #065f46 100%);
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
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
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

                <div class="add-form">
                    <h5><i class="fas fa-plus-circle"></i> Add New Solution</h5>
                    <form method="POST" action="/admin/solution/add">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Solution Name</label>
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
                                <label class="form-label">Category</label>
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
                            <div class="col-md-10">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter solution description..." rows="2" required></textarea>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-add w-100">
                                    <i class="fas fa-plus"></i> ADD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @foreach($solutions as $solution)
                    <div class="card item-card mb-3">
                        <div class="card-body">
                            <form method="POST" action="/admin/solution/{{ $solution->id }}">
                                @csrf
                                <div class="row g-3">
                                    <!-- Icon Preview -->
                                    @if(isset($solution->icon_url) && $solution->icon_url)
                                        <div class="col-md-12 text-center mb-2">
                                            <img src="{{ $solution->icon_url }}" alt="{{ $solution->name }}" style="width: 60px; height: 60px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 8px; background: #f8f9fa;">
                                        </div>
                                    @elseif(isset($solution->icon_class) && $solution->icon_class)
                                        <div class="col-md-12 text-center mb-2">
                                            <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                                <i class="{{ $solution->icon_class }}" style="font-size: 30px; color: #6c5ce7;"></i>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Basic Info Row -->
                                    <div class="col-md-3">
                                        <label class="action-label">Solution Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $solution->name }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="action-label">Icon URL</label>
                                        <input type="url" name="icon_url" class="form-control" value="{{ $solution->icon_url ?? '' }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Icon Class</label>
                                        <input type="text" name="icon_class" class="form-control" value="{{ $solution->icon_class ?? '' }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Category</label>
                                        <select name="category" class="form-select" required>
                                            <option value="TOP SOLUTIONS" {{ $solution->category=='TOP SOLUTIONS' ? 'selected':'' }}>TOP SOLUTIONS</option>
                                            <option value="ENTERPRISE FOCUSED" {{ $solution->category=='ENTERPRISE FOCUSED' ? 'selected':'' }}>ENTERPRISE FOCUSED</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Display Order</label>
                                        <input type="number" name="order" class="form-control" value="{{ $solution->order ?? 0 }}">
                                    </div>

                                    <!-- Description Row -->
                                    <div class="col-md-12">
                                        <label class="action-label">Description</label>
                                        <textarea name="description" class="form-control" rows="3" required>{{ $solution->description }}</textarea>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="col-md-12">
                                        <div class="btn-group-actions justify-content-end">
                                            <button type="submit" class="btn btn-update">
                                                <i class="fas fa-save"></i> UPDATE
                                            </button>
                                            <a href="/admin/solution/delete/{{ $solution->id }}" class="btn btn-delete">
                                                <i class="fas fa-trash-alt"></i> DELETE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        <!-- ========== TECHNOLOGIES SECTION ========== -->
            <div class="content-section" id="technologies-section">
                <div class="section-header">
                    <h2><i class="fas fa-microchip"></i> Technologies Management</h2>
                </div>

                <div class="add-form">
                    <h5><i class="fas fa-plus-circle"></i> Add New Technology</h5>
                    <form method="POST" action="/admin/technology/add">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Technology Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter technology name..." required>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Icon URL</label>
                                <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL..." required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Icon Class</label>
                                <input type="text" name="icon_class" class="form-control" placeholder="fas fa-icon...">
                            </div>
                            <div class="col-md-10">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter technology description..." rows="2" required></textarea>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-add w-100">
                                    <i class="fas fa-plus"></i> ADD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @foreach($technologies as $tech)
                    <div class="card item-card mb-3">
                        <div class="card-body">
                            <form method="POST" action="/admin/technology/{{ $tech->id }}">
                                @csrf
                                <div class="row g-3">
                                    <!-- Icon Preview -->
                                    @if(isset($tech->icon_url) && $tech->icon_url)
                                        <div class="col-md-12 text-center mb-2">
                                            <img src="{{ $tech->icon_url }}" alt="{{ $tech->name }}" style="width: 60px; height: 60px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 8px; background: #f8f9fa;">
                                        </div>
                                    @elseif(isset($tech->icon_class) && $tech->icon_class)
                                        <div class="col-md-12 text-center mb-2">
                                            <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                                <i class="{{ $tech->icon_class }}" style="font-size: 30px; color: #6c5ce7;"></i>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Basic Info Row -->
                                    <div class="col-md-4">
                                        <label class="action-label">Technology Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $tech->name }}" required>
                                    </div>
                                    <div class="col-md-5">
                                        <label class="action-label">Icon URL</label>
                                        <input type="url" name="icon_url" class="form-control" value="{{ $tech->icon_url }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="action-label">Icon Class</label>
                                        <input type="text" name="icon_class" class="form-control" value="{{ $tech->icon_class ?? '' }}">
                                    </div>

                                    <!-- Description Row -->
                                    <div class="col-md-12">
                                        <label class="action-label">Description</label>
                                        <textarea name="description" class="form-control" rows="3" required>{{ $tech->description }}</textarea>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="col-md-12">
                                        <div class="btn-group-actions justify-content-end">
                                            <button type="submit" class="btn btn-update">
                                                <i class="fas fa-save"></i> UPDATE
                                            </button>
                                            <button type="button" class="btn btn-delete delete-btn" data-id="{{ $tech->id }}" data-type="technology">
                                                <i class="fas fa-trash-alt"></i> DELETE
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- ========== INDUSTRIES SECTION ========== -->
            <div class="content-section" id="industries-section">
                <div class="section-header">
                    <h2><i class="fas fa-industry"></i> Industries Management</h2>
                </div>

                <div class="add-form">
                    <h5><i class="fas fa-plus-circle"></i> Add New Industry</h5>
                    <form method="POST" action="/admin/industry/add">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Industry Name</label>
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
                                <label class="form-label">Category</label>
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
                            <div class="col-md-10">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter industry description..." rows="2" required></textarea>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-add w-100">
                                    <i class="fas fa-plus"></i> ADD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @foreach($industries as $industry)
                    <div class="card item-card mb-3">
                        <div class="card-body">
                            <form method="POST" action="/admin/industry/{{ $industry->id }}">
                                @csrf
                                <div class="row g-3">
                                    <!-- Icon Preview -->
                                    @if(isset($industry->icon_url) && $industry->icon_url)
                                        <div class="col-md-12 text-center mb-2">
                                            <img src="{{ $industry->icon_url }}" alt="{{ $industry->name }}" style="width: 60px; height: 60px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 8px; background: #f8f9fa;">
                                        </div>
                                    @elseif(isset($industry->icon_class) && $industry->icon_class)
                                        <div class="col-md-12 text-center mb-2">
                                            <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                                <i class="{{ $industry->icon_class }}" style="font-size: 30px; color: #6c5ce7;"></i>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Basic Info Row -->
                                    <div class="col-md-3">
                                        <label class="action-label">Industry Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $industry->name }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="action-label">Icon URL</label>
                                        <input type="url" name="icon_url" class="form-control" value="{{ $industry->icon_url ?? '' }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Icon Class</label>
                                        <input type="text" name="icon_class" class="form-control" value="{{ $industry->icon_class ?? '' }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Category</label>
                                        <select name="category" class="form-select" required>
                                            <option value="PRIMARY INDUSTRIES" {{ $industry->category=='PRIMARY INDUSTRIES' ? 'selected':'' }}>PRIMARY INDUSTRIES</option>
                                            <option value="TECH & SERVICES" {{ $industry->category=='TECH & SERVICES' ? 'selected':'' }}>TECH & SERVICES</option>
                                            <option value="EMERGING SECTORS" {{ $industry->category=='EMERGING SECTORS' ? 'selected':'' }}>EMERGING SECTORS</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Display Order</label>
                                        <input type="number" name="order" class="form-control" value="{{ $industry->order ?? 0 }}">
                                    </div>

                                    <!-- Description Row -->
                                    <div class="col-md-12">
                                        <label class="action-label">Description</label>
                                        <textarea name="description" class="form-control" rows="3" required>{{ $industry->description }}</textarea>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="col-md-12">
                                        <div class="btn-group-actions justify-content-end">
                                            <button type="submit" class="btn btn-update">
                                                <i class="fas fa-save"></i> UPDATE
                                            </button>
                                            <a href="/admin/industry/delete/{{ $industry->id }}" class="btn btn-delete">
                                                <i class="fas fa-trash-alt"></i> DELETE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        <!-- ========== CAREERS SECTION ========== -->
            <div class="content-section" id="careers-section">
                <div class="section-header">
                    <h2><i class="fas fa-briefcase"></i> Careers Management</h2>
                </div>

                <div class="add-form">
                    <h5><i class="fas fa-plus-circle"></i> Add New Career</h5>
                    <form method="POST" action="/admin/career/add">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Career Name</label>
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
                                <label class="form-label">Category</label>
                                <select name="category" class="form-select" required>
                                    <option value="">Select category...</option>
                                    <option value="OPEN POSITIONS">OPEN POSITIONS</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Display Order</label>
                                <input type="number" name="order" class="form-control" placeholder="0" value="0">
                            </div>
                            <div class="col-md-10">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter career description..." rows="2" required></textarea>
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-add w-100">
                                    <i class="fas fa-plus"></i> ADD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @foreach($careers as $career)
                    <div class="card item-card mb-3">
                        <div class="card-body">
                            <form method="POST" action="/admin/career/{{ $career->id }}">
                                @csrf
                                <div class="row g-3">
                                    <!-- Icon Preview -->
                                    @if(isset($career->icon_url) && $career->icon_url)
                                        <div class="col-md-12 text-center mb-2">
                                            <img src="{{ $career->icon_url }}" alt="{{ $career->name }}" style="width: 60px; height: 60px; object-fit: contain; border: 2px solid #6c5ce7; border-radius: 8px; padding: 8px; background: #f8f9fa;">
                                        </div>
                                    @elseif(isset($career->icon_class) && $career->icon_class)
                                        <div class="col-md-12 text-center mb-2">
                                            <div style="width: 60px; height: 60px; display: flex; align-items: center; justify-content: center; border: 2px solid #6c5ce7; border-radius: 8px; background: #f8f9fa; margin: 0 auto;">
                                                <i class="{{ $career->icon_class }}" style="font-size: 30px; color: #6c5ce7;"></i>
                                            </div>
                                        </div>
                                    @endif

                                    <!-- Basic Info Row -->
                                    <div class="col-md-3">
                                        <label class="action-label">Career Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $career->name }}" required>
                                    </div>
                                    <div class="col-md-3">
                                        <label class="action-label">Icon URL</label>
                                        <input type="url" name="icon_url" class="form-control" value="{{ $career->icon_url ?? '' }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Icon Class</label>
                                        <input type="text" name="icon_class" class="form-control" value="{{ $career->icon_class ?? '' }}">
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Category</label>
                                        <select name="category" class="form-select" required>
                                            <option value="OPEN POSITIONS" {{ $career->category=='OPEN POSITIONS' ? 'selected':'' }}>OPEN POSITIONS</option>
                                        </select>
                                    </div>
                                    <div class="col-md-2">
                                        <label class="action-label">Display Order</label>
                                        <input type="number" name="order" class="form-control" value="{{ $career->order ?? 0 }}">
                                    </div>

                                    <!-- Description Row -->
                                    <div class="col-md-12">
                                        <label class="action-label">Description</label>
                                        <textarea name="description" class="form-control" rows="3" required>{{ $career->description }}</textarea>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="col-md-12">
                                        <div class="btn-group-actions justify-content-end">
                                            <button type="submit" class="btn btn-update">
                                                <i class="fas fa-save"></i> UPDATE
                                            </button>
                                            <a href="/admin/career/delete/{{ $career->id }}" class="btn btn-delete">
                                                <i class="fas fa-trash-alt"></i> DELETE
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- ========== COURSES SECTION ========== -->
            <div class="content-section" id="courses-section">
                <div class="section-header">
                    <h2><i class="fas fa-graduation-cap"></i> Courses Management</h2>
                </div>

                <div class="add-form">
                    <h5><i class="fas fa-plus-circle"></i> Add New Course</h5>
                    <form method="POST" action="/admin/course/add">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label class="form-label">Course Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter name..." required>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label">Icon URL</label>
                                <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL...">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Description</label>
                                <textarea name="description" class="form-control" placeholder="Enter description..." rows="2" required></textarea>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Content (one per line)</label>
                                <textarea name="content" class="form-control" placeholder="Enter course content, one item per line..." rows="4"></textarea>
                                <small class="text-muted">Each line will be a separate content item</small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Projects</label>
                                <input type="text" name="projects" class="form-control" placeholder="Project 1, Project 2, Project 3">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">&nbsp;</label>
                                <button type="submit" class="btn btn-add w-100">
                                    <i class="fas fa-plus"></i> ADD
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                @foreach($courses as $course)
                    <div class="card item-card mb-3">
                        <div class="card-body">
                            <form method="POST" action="/admin/course/{{ $course->id }}">
                                @csrf
                                <div class="row g-3">
                                    <!-- Icon Preview -->
                                    @if(isset($course->icon_url) && $course->icon_url)
                                        <div class="col-md-12 text-center mb-2">
                                            <img src="{{ $course->icon_url }}" alt="{{ $course->name }}" style="width: 60px; height: 60px; object-fit: contain; border: 2px solid #0eb7ea; border-radius: 8px; padding: 8px; background: #f8f9fa;">
                                        </div>
                                    @endif

                                    <!-- Basic Info Row -->
                                    <div class="col-md-4">
                                        <label class="action-label">Course Name</label>
                                        <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label class="action-label">Icon URL</label>
                                        <input type="url" name="icon_url" class="form-control" value="{{ $course->icon_url ?? '' }}">
                                    </div>
                                    <div class="col-md-4">
                                        <label class="action-label">Projects</label>
                                        <input type="text" name="projects" class="form-control" value="{{ $course->projects ?? '' }}" placeholder="Project 1, Project 2">
                                    </div>

                                    <!-- Description Row -->
                                    <div class="col-md-12">
                                        <label class="action-label">Description</label>
                                        <textarea name="description" class="form-control" rows="2" required>{{ $course->description }}</textarea>
                                    </div>

                                    <!-- Content Row -->
                                    <div class="col-md-12">
                                        <label class="action-label">Course Content (one item per line)</label>
                                        <textarea name="content" class="form-control" rows="5" placeholder="Enter course content, one item per line...">{{ is_array($course->content) ? implode("\n", $course->content) : (is_string($course->content) ? implode("\n", json_decode($course->content, true) ?? []) : '') }}</textarea>
                                        <small class="text-muted">Each line will be displayed as a separate content item with a checkmark</small>
                                    </div>

                                    <!-- Action Buttons -->
                                    <div class="col-md-12">
                                        <div class="btn-group-actions justify-content-end">
                                            <button type="submit" class="btn btn-update">
                                                <i class="fas fa-save"></i> UPDATE
                                            </button>
                                            <button type="button" class="btn btn-delete delete-btn" data-id="{{ $course->id }}" data-type="course">
                                                <i class="fas fa-trash-alt"></i> DELETE
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

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
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', function() {
            const id = this.getAttribute('data-id');
            const type = this.getAttribute('data-type');

            // Save current section before delete
            const section = this.closest('.content-section');
            if (section) {
                const sectionId = section.id.replace('-section', '');
                saveActiveSection(sectionId);
            }

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

</script>
    </div>
</div>
</body>
</html>

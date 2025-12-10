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
            background: #f5f5f5;
            overflow-x: hidden;
        }

        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1030;
        }

        .dashboard-container {
            display: flex;
            margin-top: 56px;
            min-height: calc(100vh - 56px);
        }

        .sidebar {
            width: 250px;
            background: linear-gradient(180deg, #2c3e50 0%, #34495e 100%);
            color: white;
            position: fixed;
            left: 0;
            top: 56px;
            bottom: 0;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0,0,0,0.1);
            z-index: 1020;
        }

        .sidebar-header {
            padding: 20px;
            background: rgba(0,0,0,0.2);
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .sidebar-header h4 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
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
            color: #ecf0f1;
            text-decoration: none;
            transition: all 0.3s;
            border-left: 4px solid transparent;
        }

        .sidebar-menu a:hover {
            background: rgba(255,255,255,0.1);
            border-left-color: #3498db;
            padding-left: 25px;
        }

        .sidebar-menu a.active {
            background: rgba(52, 152, 219, 0.3);
            border-left-color: #3498db;
            font-weight: bold;
        }

        .sidebar-menu a i {
            margin-right: 12px;
            width: 20px;
            text-align: center;
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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 10px 10px 0 0;
            margin-bottom: 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .section-header h2 {
            margin: 0;
            font-size: 24px;
        }

        .add-form {
            background: #ffffff;
            padding: 20px;
            border-radius: 0 0 10px 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-left: 5px solid #28a745;
        }

        .add-form h5 {
            color: #28a745;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .item-card {
            background: white;
            border-radius: 10px;
            margin-bottom: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            border-left: 5px solid #007bff;
        }

        .btn-group-actions {
            display: flex;
            gap: 8px;
        }

        .action-label {
            font-weight: bold;
            color: #666;
            margin-bottom: 5px;
            font-size: 12px;
        }

        .btn-update {
            background: #007bff;
            color: white;
            font-weight: bold;
            padding: 4px 10px;
            border: none;
            font-size: 0.85rem;
        }

        .btn-update:hover {
            background: #0056b3;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,123,255,0.3);
        }

        .btn-delete {
            background: #dc3545;
            color: white;
            font-weight: bold;
            padding: 4px 10px;
            border: none;
            font-size: 0.85rem;
        }

        .btn-delete:hover {
            background: #c82333;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(220,53,69,0.3);
        }

        .btn-add {
            background: #28a745;
            color: white;
            font-weight: bold;
            font-size: 0.8rem;
            padding: 2px 6px;
        }

        .btn-add:hover {
            background: #218838;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(40,167,69,0.3);
        }

        .btn-update i, .btn-delete i, .btn-add i {
            font-size: 0.7rem;
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
                                    <button class="btn btn-outline-primary" onclick="document.querySelector('[data-section=solutions]').click()">
                                        <i class="fas fa-cogs"></i> Manage Solutions
                                    </button>
                                    <button class="btn btn-outline-success" onclick="document.querySelector('[data-section=technologies]').click()">
                                        <i class="fas fa-microchip"></i> Manage Technologies
                                    </button>
                                    <button class="btn btn-outline-warning" onclick="document.querySelector('[data-section=industries]').click()">
                                        <i class="fas fa-industry"></i> Manage Industries
                                    </button>
                                    <button class="btn btn-outline-danger" onclick="document.querySelector('[data-section=careers]').click()">
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

            <div class="add-form mb-4">
                <h5><i class="fas fa-plus-circle"></i> Add New Solution</h5>
                <form method="POST" action="/admin/solution/add">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-2">
                            <input type="text" name="name" class="form-control" placeholder="Solution Name" required>
                        </div>
                        <div class="col-md-3">
                            <input type="url" name="icon_url" class="form-control" placeholder="Icon URL (https://...)">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="icon_class" class="form-control" placeholder="Icon Class (optional)">
                        </div>
                        <div class="col-md-3">
                            <textarea name="description" class="form-control" placeholder="Description" rows="1" required></textarea>
                        </div>
                        <div class="col-md-1">
                            <select name="category" class="form-control" required>
                                <option value="">Category</option>
                                <option value="TOP SOLUTIONS">TOP SOLUTIONS</option>
                                <option value="ENTERPRISE FOCUSED">ENTERPRISE FOCUSED</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="order" class="form-control" placeholder="Order" value="0">
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="submit" class="btn btn-add btn-sm"><i class="fas fa-plus"></i> ADD</button>
                        </div>
                    </div>
                </form>
            </div>

            @foreach($solutions as $solution)
                <div class="card item-card mb-2">
                    <div class="card-body">
                        <form method="POST" action="/admin/solution/{{ $solution->id }}">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-1 d-flex justify-content-center align-items-center">
                                    @if($solution->icon_url)
                                        <img src="{{ $solution->icon_url }}" alt="{{ $solution->name }}" class="solution-icon-img" style="width:50px; height:50px; object-fit:contain;">
                                    @else
                                        <span class="solution-icon-placeholder">{{ strtoupper($solution->name[0]) }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $solution->name }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="action-label">Icon URL</label>
                                    <input type="url" name="icon_url" class="form-control" value="{{ $solution->icon_url }}">
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" value="{{ $solution->icon_class ?? '' }}">
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Description</label>
                                    <textarea name="description" class="form-control" rows="2" required>{{ $solution->description }}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="TOP SOLUTIONS" {{ $solution->category=='TOP SOLUTIONS' ? 'selected':'' }}>TOP SOLUTIONS</option>
                                        <option value="ENTERPRISE FOCUSED" {{ $solution->category=='ENTERPRISE FOCUSED' ? 'selected':'' }}>ENTERPRISE FOCUSED</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Order</label>
                                    <input type="number" name="order" class="form-control" value="{{ $solution->order }}">
                                </div>
                                <div class="col-md-2 d-flex gap-2">
                                    <button type="submit" class="btn btn-update"><i class="fas fa-save"></i> UPDATE</button>
                                    <a href="/admin/solution/delete/{{ $solution->id }}" class="btn btn-delete"><i class="fas fa-trash-alt"></i> DELETE</a>
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
                        <div class="col-md-2">
                            <input type="text" name="name" class="form-control" placeholder="Technology Name" required>
                        </div>
                        <div class="col-md-3">
                            <input type="url" name="icon_url" class="form-control" placeholder="Icon URL (https://...)" required>
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="icon_class" class="form-control" placeholder="Icon Class (optional)">
                        </div>
                        <div class="col-md-3">
                            <textarea name="description" class="form-control" placeholder="Description" rows="1" required></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-add w-100">
                                <i class="fas fa-plus"></i> ADD
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            @foreach($technologies as $tech)
                <div class="card item-card">
                    <div class="card-body">
                        <form method="POST" action="/admin/technology/{{ $tech->id }}">
                            @csrf
                            <div class="row g-3 align-items-end">
                                <div class="col-md-1 text-center">
                                    <img src="{{ $tech->icon_url }}" alt="{{ $tech->name }}" style="width: 50px; height: 50px; object-fit: contain; border: 1px solid #ddd; border-radius: 5px; padding: 5px;">
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $tech->name }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="action-label">Icon URL</label>
                                    <input type="url" name="icon_url" class="form-control" value="{{ $tech->icon_url }}" required>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" value="{{ $tech->icon_class ?? '' }}">
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Description</label>
                                    <textarea name="description" class="form-control" rows="2" required>{{ $tech->description }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn-group-actions">
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

            <div class="add-form mb-4">
                <h5><i class="fas fa-plus-circle"></i> Add New Industry</h5>
                <form method="POST" action="/admin/industry/add">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-2">
                            <input type="text" name="name" class="form-control" placeholder="Industry Name" required>
                        </div>
                        <div class="col-md-3">
                            <input type="url" name="icon_url" class="form-control" placeholder="Icon URL (https://...)">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="icon_class" class="form-control" placeholder="Icon Class (optional)">
                        </div>
                        <div class="col-md-3">
                            <textarea name="description" class="form-control" placeholder="Description" rows="1" required></textarea>
                        </div>
                        <div class="col-md-1">
                            <select name="category" class="form-control" required>
                                <option value="">Category</option>
                                <option value="PRIMARY INDUSTRIES">PRIMARY INDUSTRIES</option>
                                <option value="TECH & SERVICES">TECH & SERVICES</option>
                                <option value="EMERGING SECTORS">EMERGING SECTORS</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="order" class="form-control" placeholder="Order" value="0">
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="submit" class="btn btn-add btn-sm"><i class="fas fa-plus"></i> ADD</button>
                        </div>
                    </div>
                </form>
            </div>

            @foreach($industries as $industry)
                <div class="card item-card mb-2">
                    <div class="card-body">
                        <form method="POST" action="/admin/industry/{{ $industry->id }}">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-1 d-flex justify-content-center align-items-center">
                                    @if($industry->icon_url)
                                        <img src="{{ $industry->icon_url }}" alt="{{ $industry->name }}" class="industry-icon-img" style="width:50px; height:50px; object-fit:contain;">
                                    @else
                                        <span class="industry-icon-placeholder">{{ strtoupper($industry->name[0]) }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $industry->name }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="action-label">Icon URL</label>
                                    <input type="url" name="icon_url" class="form-control" value="{{ $industry->icon_url }}">
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" value="{{ $industry->icon_class ?? '' }}">
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Description</label>
                                    <textarea name="description" class="form-control" rows="2" required>{{ $industry->description }}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="PRIMARY INDUSTRIES" {{ $industry->category=='PRIMARY INDUSTRIES' ? 'selected':'' }}>PRIMARY INDUSTRIES</option>
                                        <option value="TECH & SERVICES" {{ $industry->category=='TECH & SERVICES' ? 'selected':'' }}>TECH & SERVICES</option>
                                        <option value="EMERGING SECTORS" {{ $industry->category=='EMERGING SECTORS' ? 'selected':'' }}>EMERGING SECTORS</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Order</label>
                                    <input type="number" name="order" class="form-control" value="{{ $industry->order }}">
                                </div>
                                <div class="col-md-2 d-flex gap-2">
                                    <button type="submit" class="btn btn-update"><i class="fas fa-save"></i> UPDATE</button>
                                    <a href="/admin/industry/delete/{{ $industry->id }}" class="btn btn-delete"><i class="fas fa-trash-alt"></i> DELETE</a>
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

            <div class="add-form mb-4">
                <h5><i class="fas fa-plus-circle"></i> Add New Career</h5>
                <form method="POST" action="/admin/career/add">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-md-2">
                            <input type="text" name="name" class="form-control" placeholder="Career Name" required>
                        </div>
                        <div class="col-md-3">
                            <input type="url" name="icon_url" class="form-control" placeholder="Icon URL (https://...)">
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="icon_class" class="form-control" placeholder="Icon Class (optional)">
                        </div>
                        <div class="col-md-3">
                            <textarea name="description" class="form-control" placeholder="Description" rows="1" required></textarea>
                        </div>
                        <div class="col-md-1">
                            <select name="category" class="form-control" required>
                                <option value="">Category</option>
                                <option value="OPEN POSITIONS">OPEN POSITIONS</option>
                            </select>
                        </div>
                        <div class="col-md-1">
                            <input type="number" name="order" class="form-control" placeholder="Order" value="0">
                        </div>
                        <div class="col-md-2 d-flex align-items-center">
                            <button type="submit" class="btn btn-add btn-sm"><i class="fas fa-plus"></i> ADD</button>
                        </div>
                    </div>
                </form>
            </div>

            @foreach($careers as $career)
                <div class="card item-card mb-2">
                    <div class="card-body">
                        <form method="POST" action="/admin/career/{{ $career->id }}">
                            @csrf
                            <div class="row g-3 align-items-center">
                                <div class="col-md-1 d-flex justify-content-center align-items-center">
                                    @if($career->icon_url)
                                        <img src="{{ $career->icon_url }}" alt="{{ $career->name }}" class="career-icon-img" style="width:50px; height:50px; object-fit:contain;">
                                    @else
                                        <span class="career-icon-placeholder">{{ strtoupper($career->name[0]) }}</span>
                                    @endif
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $career->name }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="action-label">Icon URL</label>
                                    <input type="url" name="icon_url" class="form-control" value="{{ $career->icon_url }}">
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Icon Class</label>
                                    <input type="text" name="icon_class" class="form-control" value="{{ $career->icon_class ?? '' }}">
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Description</label>
                                    <textarea name="description" class="form-control" rows="2" required>{{ $career->description }}</textarea>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Category</label>
                                    <select name="category" class="form-control" required>
                                        <option value="OPEN POSITIONS" {{ $career->category=='OPEN POSITIONS' ? 'selected':'' }}>OPEN POSITIONS</option>
                                    </select>
                                </div>
                                <div class="col-md-1">
                                    <label class="action-label">Order</label>
                                    <input type="number" name="order" class="form-control" value="{{ $career->order }}">
                                </div>
                                <div class="col-md-2 d-flex gap-2">
                                    <button type="submit" class="btn btn-update"><i class="fas fa-save"></i> UPDATE</button>
                                    <a href="/admin/career/delete/{{ $career->id }}" class="btn btn-delete"><i class="fas fa-trash-alt"></i> DELETE</a>
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
                            <input type="text" name="name" class="form-control" placeholder="Enter name..." required>
                        </div>
                        <div class="col-md-3">
                            <input type="url" name="icon_url" class="form-control" placeholder="Enter icon URL...">
                        </div>
                        <div class="col-md-4">
                            <textarea name="description" class="form-control" placeholder="Enter description..." rows="1" required></textarea>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-add w-100">
                                <i class="fas fa-plus"></i> ADD
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            @foreach($courses as $course)
                <div class="card item-card">
                    <div class="card-body">
                        <form method="POST" action="/admin/course/{{ $course->id }}">
                            @csrf
                            <div class="row g-3 align-items-end">
                                @if(isset($course->icon_url) && $course->icon_url)
                                    <div class="col-md-1 text-center">
                                        <img src="{{ $course->icon_url }}" alt="{{ $course->name }}" style="width: 50px; height: 50px; object-fit: contain; border: 1px solid #ddd; border-radius: 5px; padding: 5px;">
                                    </div>
                                @endif
                                <div class="col-md-{{ (isset($course->icon_url) && $course->icon_url) ? '3' : '4' }}">
                                    <label class="action-label">Name</label>
                                    <input type="text" name="name" class="form-control" value="{{ $course->name }}" required>
                                </div>
                                <div class="col-md-3">
                                    <label class="action-label">Icon URL</label>
                                    <input type="url" name="icon_url" class="form-control" value="{{ $course->icon_url ?? '' }}">
                                </div>
                                <div class="col-md-2">
                                    <label class="action-label">Description</label>
                                    <textarea name="description" class="form-control" rows="2" required>{{ $course->description }}</textarea>
                                </div>
                                <div class="col-md-3">
                                    <div class="btn-group-actions">
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
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    // Sidebar navigation
    document.querySelectorAll('.menu-link').forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();

            // Remove active class from all links
            document.querySelectorAll('.menu-link').forEach(l => l.classList.remove('active'));

            // Add active class to clicked link
            this.classList.add('active');

            // Hide all sections
            document.querySelectorAll('.content-section').forEach(section => {
                section.classList.remove('active');
            });

            // Show selected section
            const sectionName = this.getAttribute('data-section');
            document.getElementById(sectionName + '-section').classList.add('active');

            // Scroll to top of content
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    });

    // Sweet Alert Delete
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
</script>
</body>
</html>

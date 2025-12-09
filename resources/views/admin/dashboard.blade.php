<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- ADD SWEET ALERT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: #f5f5f5;
        }
        .section-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 10px 10px 0 0;
            margin-top: 30px;
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
        }
        .navbar {
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        /* BETTER BUTTON STYLES */
        .btn-update {
            background: #007bff;
            color: white;
            font-weight: bold;
            padding: 8px 20px;
            border: none;
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
            padding: 8px 20px;
            border: none;
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
            font-size: 16px;
            padding: 10px 25px;
        }
        .btn-add:hover {
            background: #218838;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(40,167,69,0.3);
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

<div class="container mt-4 mb-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible">
            <i class="fas fa-check-circle"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- ========== SOLUTIONS ========== -->
        <div class="section-header">
            <h2><i class="fas fa-cogs"></i> Solutions Management</h2>
        </div>

        <!-- Add New Solution Form -->
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

        <!-- List of Solutions -->
        @foreach($solutions as $solution)
            <div class="card item-card mb-2">
                <div class="card-body">
                    <form method="POST" action="/admin/solution/{{ $solution->id }}">
                        @csrf
                        <div class="row g-3 align-items-center">

                            <!-- Icon -->
                            <div class="col-md-1 d-flex justify-content-center align-items-center">
                                @if($solution->icon_url)
                                    <img src="{{ $solution->icon_url }}" alt="{{ $solution->name }}" class="solution-icon-img" style="width:50px; height:50px; object-fit:contain;">
                                @else
                                    <span class="solution-icon-placeholder">{{ strtoupper($solution->name[0]) }}</span>
                                @endif
                            </div>

                            <!-- Name -->
                            <div class="col-md-2">
                                <label class="action-label">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $solution->name }}" required>
                            </div>

                            <!-- Icon URL -->
                            <div class="col-md-3">
                                <label class="action-label">Icon URL</label>
                                <input type="url" name="icon_url" class="form-control" value="{{ $solution->icon_url }}">
                            </div>

                            <!-- Icon Class -->
                            <div class="col-md-1">
                                <label class="action-label">Icon Class</label>
                                <input type="text" name="icon_class" class="form-control" value="{{ $solution->icon_class ?? '' }}">
                            </div>

                            <!-- Description -->
                            <div class="col-md-2">
                                <label class="action-label">Description</label>
                                <textarea name="description" class="form-control" rows="2" required>{{ $solution->description }}</textarea>
                            </div>

                            <!-- Category -->
                            <div class="col-md-1">
                                <label class="action-label">Category</label>
                                <select name="category" class="form-control" required>
                                    <option value="TOP SOLUTIONS" {{ $solution->category=='TOP SOLUTIONS' ? 'selected':'' }}>TOP SOLUTIONS</option>
                                    <option value="ENTERPRISE FOCUSED" {{ $solution->category=='ENTERPRISE FOCUSED' ? 'selected':'' }}>ENTERPRISE FOCUSED</option>
                                </select>
                            </div>

                            <!-- Order -->
                            <div class="col-md-1">
                                <label class="action-label">Order</label>
                                <input type="number" name="order" class="form-control" value="{{ $solution->order }}">
                            </div>

                            <!-- Actions -->
                            <div class="col-md-2 d-flex gap-2">
                                <button type="submit" class="btn btn-update"><i class="fas fa-save"></i> UPDATE</button>
                                <a href="/admin/solution/delete/{{ $solution->id }}" class="btn btn-delete"><i class="fas fa-trash-alt"></i> DELETE</a>
                            </div>


                        </div>
                    </form>
                </div>
            </div>
        @endforeach
        <style>
            /* Reduce button padding and font size */
            .btn-update, .btn-delete {
                padding: 4px 10px;   /* smaller padding */
                font-size: 0.85rem;  /* smaller text */
            }

            .btn-update i, .btn-delete i {
                font-size: 0.8rem;   /* smaller icon */
            }

            .btn-update, .btn-delete, .btn-add {
                padding: 2px 6px;   /* smaller padding */
                font-size: 0.8rem;  /* smaller text */
            }

            .btn-update i, .btn-delete i, .btn-add i {
                font-size: 0.7rem;  /* smaller icon */
            }

        </style>


        <!-- ========== TECHNOLOGIES ========== -->
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

    <!-- ========== INDUSTRIES ========== -->
    <div class="section-header">
        <h2><i class="fas fa-industry"></i> Industries Management</h2>
    </div>

    <div class="add-form">
        <h5><i class="fas fa-plus-circle"></i> Add New Industry</h5>
        <form method="POST" action="/admin/industry/add">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="name" class="form-control" placeholder="Enter name..." required>
                </div>
                <div class="col-md-6">
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

    @foreach($industries as $industry)
        <div class="card item-card">
            <div class="card-body">
                <form method="POST" action="/admin/industry/{{ $industry->id }}">
                    @csrf
                    <div class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label class="action-label">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $industry->name }}" required>
                        </div>
                        <div class="col-md-5">
                            <label class="action-label">Description</label>
                            <textarea name="description" class="form-control" rows="2" required>{{ $industry->description }}</textarea>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group-actions">
                                <button type="submit" class="btn btn-update">
                                    <i class="fas fa-save"></i> UPDATE
                                </button>
                                <button type="button" class="btn btn-delete delete-btn" data-id="{{ $industry->id }}" data-type="industry">
                                    <i class="fas fa-trash-alt"></i> DELETE
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

    <!-- ========== CAREERS ========== -->
    <div class="section-header">
        <h2><i class="fas fa-briefcase"></i> Careers Management</h2>
    </div>

    <div class="add-form">
        <h5><i class="fas fa-plus-circle"></i> Add New Career</h5>
        <form method="POST" action="/admin/career/add">
            @csrf
            <div class="row g-3">
                <div class="col-md-4">
                    <input type="text" name="title" class="form-control" placeholder="Enter title..." required>
                </div>
                <div class="col-md-6">
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

    @foreach($careers as $career)
        <div class="card item-card">
            <div class="card-body">
                <form method="POST" action="/admin/career/{{ $career->id }}">
                    @csrf
                    <div class="row g-3 align-items-end">
                        <div class="col-md-4">
                            <label class="action-label">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $career->title }}" required>
                        </div>
                        <div class="col-md-5">
                            <label class="action-label">Description</label>
                            <textarea name="description" class="form-control" rows="2" required>{{ $career->description }}</textarea>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group-actions">
                                <button type="submit" class="btn btn-update">
                                    <i class="fas fa-save"></i> UPDATE
                                </button>
                                <button type="button" class="btn btn-delete delete-btn" data-id="{{ $career->id }}" data-type="career">
                                    <i class="fas fa-trash-alt"></i> DELETE
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach

        <!-- ========== COURSES ========== -->
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- SWEET ALERT DELETE SCRIPT -->
<script>
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

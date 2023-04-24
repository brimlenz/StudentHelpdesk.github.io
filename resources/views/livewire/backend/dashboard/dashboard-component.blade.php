<div>

    @role('Student')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">

                <div class="col-lg-12 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("pending")' >
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/chart-success.png" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="d-block">
                                            <span class="fw-semibold d-block mb-1">Pending</span>
                                            <h3 class="card-title mb-2">{{ App\Models\Request::where('status', 'pending')->count() }}
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("in progress")' >
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/hourglass-solid-24.png" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="d-block">
                                            <span class="fw-semibold d-block mb-1">In Progress</span>
                                            <h3 class="card-title mb-2">
                                                {{ App\Models\Request::where('status', 'in progress')->count() }}</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("solved")' >
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/check-circle-solid-24.png" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="d-block">
                                            <span class="fw-semibold d-block mb-1">Solved</span>
                                            <h3 class="card-title mb-2">{{ App\Models\Request::where('status', 'solved')->count() }}
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("all")' >
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="card-title d-flex align-items-start justify-content-between">
                                        <div class="avatar flex-shrink-0">
                                            <img src="../assets/img/icons/unicons/list-ul-regular-24.png" alt="chart success"
                                                class="rounded" />
                                        </div>
                                        <div class="d-block">
                                            <span class="fw-semibold d-block mb-1">All requests</span>
                                            <h3 class="card-title mb-2">{{ App\Models\Request::where('status', 'all')->count() }}</h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-4">
                    <!-- Hoverable Table rows -->
                    <div class="card">
                        <h5 class="card-header"></h5>
                        <div class="table-responsive text-nowrap">
                            <div id="requests-table">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($requests as $request)
                                        <tr>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $request->id }}</strong>
                                            </td>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $request->subject }}</strong>
                                            </td>
                                            <td>
                                                @if ($request->status == 'pending')
                                                <span class="badge rounded-pill bg-danger">{{ $request->status }}</span>
                                                @elseif($request->status == 'in progress')
                                                <span class="badge rounded-pill bg-warning">{{ $request->status }}</span>
                                                @elseif($request->status == 'solved')
                                                <span class="badge rounded-pill bg-success">{{ $request->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <span>{{ $request->created_at->toDayDateTimeString() }}</span>
                                            </td>
                                            <td>
                                                <a href="{{ route('chat', ['request' => $request->id]) }}" type="button"
                                                    class="btn btn-primary btn-sm">View Details</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/ Hoverable Table rows -->
                </div>
            </div>
            
        </div>
    @endrole

    @role('Support Agent')
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">



                <div class="col-lg-12 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("pending")' >
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/pendingHourGlass.png" alt="chart success"
                                                    class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">Unassigned</span>
                                                <h3 class="card-title mb-2">
                                                    {{ App\Models\Request::where('status', 'pending')->count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("in progress")' >
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/list-plus-regular-24.png" alt="chart success"
                                                    class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">Assigned</span>
                                                <h3 class="card-title mb-2">
                                                    {{ App\Models\Request::where('status', 'in progress')->where('solved_id', Auth::user()->id)->count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("solved")' >
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/check-circle-solid-24.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">Finished</span>
                                                <h3 class="card-title mb-2">
                                                    {{ App\Models\Request::where('status', 'solved')->where('solved_id', Auth::user()->id)->count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='updateFilter("all")'>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/list-ul-regular-24.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">All request</span>
                                                <h3 class="card-title mb-2">
                                                    
                                                    {{ App\Models\Request::where(function($query) {
                                                        $query->where('status', 'in progress')
                                                              ->orWhere('status', 'solved');
                                                    })->where('solved_id', Auth::user()->id)->count()
                                                }}
                                                </h3>
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12 col-md-4">
                    <!-- Hoverable Table rows -->
                    <div class="card">
                        <h5 class="card-header">All {{ $filterTerm }} requests</h5>
                        <div class="table-responsive text-nowrap">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Ticket ID</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    @foreach ($support_request as $request)
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $request->id }}</strong>
                                            </td>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $request->subject }}</strong>
                                            </td>

                                            <td>
                                                @if ($request->status == 'pending')
                                                    <span
                                                        class="badge rounded-pill bg-danger">{{ $request->status }}</span>
                                                @elseif($request->status == 'in progress')
                                                    <span
                                                        class="badge rounded-pill bg-warning">{{ $request->status }}</span>
                                                @elseif($request->status == 'solved')
                                                    <span
                                                        class="badge rounded-pill bg-success">{{ $request->status }}</span>
                                                @endif
                                            </td>


                                            <td><span
                                                    class="">{{ $request->created_at->toDayDateTimeString() }}</span>
                                            </td>
                                            <td>
                                                <a href="#" wire:click.prevent='updateRequest({{ $request->id }})'
                                                    type="button" class="btn btn-primary btn-sm">
                                                    @if ($request->status == 'pending')
                                                        Solve
                                                    @elseif($request->status == 'in progress')
                                                        Complete
                                                    @else
                                                        View Details
                                                    @endif
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Hoverable Table rows -->
                </div>
            </div>
        </div>
    @endrole

    @role('Super Admin')

        <div class="container-xxl flex-grow-1 container-p-y">


            <div class="row">

                <div class="col-lg-12 col-md-4 order-1">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='showPendingRequest'>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/pendingHourGlass.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">Pending requests</span>
                                                <h3 class="card-title mb-2">
                                                    {{ App\Models\Request::where('status', 'pending')->count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='showSupportAgent' >
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/user-badge-solid-24.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">Support Agents</span>
                                                <h3 class="card-title mb-2">
                                                    {{ $supports->count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='showStudent'>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/graduation-solid-24.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">Students</span>
                                                <h3 class="card-title mb-2">

                                                    {{ $students->count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 mb-4">
                            <a href="#" wire:click.prevent='allRequest'>
                                <div class="card">
                                    <div class="card-body pb-0">
                                        <div class="card-title d-flex align-items-start justify-content-between">
                                            <div class="avatar flex-shrink-0">
                                                <img src="../assets/img/icons/unicons/list-ul-regular-24.png"
                                                    alt="chart success" class="rounded" />
                                            </div>
                                            <div class="d-block">
                                                <span class="fw-semibold d-block mb-1">All request</span>
                                                <h3 class="card-title mb-2">
                                                    {{ App\Models\Request::count() }}
                                                </h3>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>



            </div>

            <div class="row">
                <div class="col-lg-12 col-md-4">
                    <!-- Hoverable Table rows -->
                    @if ($pending_request == true)
                        <div class="card">
                            <h5 class="card-header">Pending request</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($pendingRequests as $request)
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $request->id }}</strong>
                                                </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $request->subject }}</strong>
                                                </td>

                                                <td>
                                                    @if ($request->status == 'pending')
                                                        <span
                                                            class="badge rounded-pill bg-danger">{{ $request->status }}</span>
                                                    @elseif($request->status == 'in progress')
                                                        <span
                                                            class="badge rounded-pill bg-warning">{{ $request->status }}</span>
                                                    @elseif($request->status == 'solved')
                                                        <span
                                                            class="badge rounded-pill bg-success">{{ $request->status }}</span>
                                                    @endif
                                                </td>


                                                <td><span
                                                        class="">{{ $request->created_at->toDayDateTimeString() }}</span>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    @if ($support_agent == true)
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <h5 class="mt-1 ">All Support Agents</h5>
                                <button type="button" class="btn btn-primary" wire:click.prevent='showUserModal'>Create
                                    New
                                    User</button>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Faculty</th>
                                            <th>Department</th>
                                            <th>Registration</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($supports as $user)
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $user->name }}</strong>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->departments ? $user->departments->faculties->name : 'No Faculty' }}
                                                </td>
                                                <td>{{ $user->departments ? $user->departments->name : 'No Department' }}
                                                </td>
                                                <td>{{ $user->registration_no ? $user->registration_no : 'No reg_no' }}
                                                </td>


                                                <td>
                                                    <div class="delete">
                                                        <a class="btn btn-outline-danger"href="javascript:void(0);" wire:click="delete({{ $user->id }})"><i
                                                            class="bx bx-trash me-1" ></i> Delete</a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    @if ($student == true)
                        <div class="card">

                            <div class="card-header d-flex justify-content-between">
                                <h5 class="mt-1">All Students</h5>
                                <button type="button" class="btn btn-primary" wire:click.prevent='showUserModal'>Create
                                    New
                                    User</button>
                            </div>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Faculty</th>
                                            <th>Department</th>
                                            <th>Registration</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach ($students as $user)
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $user->name }}</strong>
                                                </td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->departments ? $user->departments->faculties->name : 'No Faculty' }}
                                                </td>
                                                <td>{{ $user->departments ? $user->departments->name : 'No Department' }}
                                                </td>
                                                <td>{{ $user->registration_no ? $user->registration_no : 'No reg_no' }}
                                                </td>


                                                <td>
                                                    <div class="delete">
                                                        <a class="btn btn-outline-danger"href="javascript:void(0);" wire:click="delete({{ $user->id }})"><i
                                                            class="bx bx-trash me-1" ></i> Delete</a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                    @if ($all_request == true)
                        <div class="card">
                            <h5 class="card-header">All Student's Requests</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ticket ID</th>
                                            <th>Subject</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        @foreach (App\Models\Request::all() as $request)
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $request->id }}</strong>
                                                </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong>{{ $request->subject }}</strong>
                                                </td>

                                                <td>
                                                    @if ($request->status == 'pending')
                                                        <span
                                                            class="badge rounded-pill bg-danger">{{ $request->status }}</span>
                                                    @elseif($request->status == 'in progress')
                                                        <span
                                                            class="badge rounded-pill bg-warning">{{ $request->status }}</span>
                                                    @elseif($request->status == 'solved')
                                                        <span
                                                            class="badge rounded-pill bg-success">{{ $request->status }}</span>
                                                    @endif
                                                </td>


                                                <td><span
                                                        class="">{{ $request->created_at->toDayDateTimeString() }}</span>
                                                </td>

                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif
                    <!--/ Hoverable Table rows -->
                </div>
            </div>
        </div>
    @endrole


    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form action="" wire:submit.prevent='createUser'>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-2">
                            <div class="col mb-0">
                                <label for="nameBasic" class="form-label">User fullname</label>
                                <input type="text" id="nameBasic" class="form-control"
                                    placeholder="Enter user's fullname" wire:model='name' />
                            </div>
                            <div class="col mb-0">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" id="email" class="form-control"
                                    placeholder="Enter email john@gmail.com" wire:model='email' />
                            </div>
                        </div>
                        <div class="row g-2 mt-2">

                            <div class="col mb-0">
                                <label for="dobBasic" class="form-label">Registration No</label>
                                <input type="text" id="dobBasic" class="form-control" placeholder="Enter reg.no"
                                    wire:model='reg' />
                            </div>
                            <div class="col mb-0">
                                <label for="emailBasic" class="form-label">Select Role</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01" wire:model='role'>
                                        <option selected>Select role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mt-2">

                            <div class="col mb-0">
                                <label for="dobBasic" class="form-label">Select Faculty</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01" wire:model='faculty'>
                                        <option selected>Select Faculty</option>
                                        @foreach ($faculties as $facuty)
                                            <option value="{{ $facuty->id }}">{{ $facuty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col mb-0">
                                <label for="dobBasic" class="form-label">Select Department</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01" wire:model='department'
                                        {{ $faculty ? ' ' : 'disabled' }}>

                                        @if ($faculty)
                                            <option selected>Select Department</option>
                                            @foreach ($departments as $department)
                                                <option value="{{ $department->id }}">{{ $department->name }}
                                                </option>
                                            @endforeach
                                        @else
                                            <option selected>Please select faculty</option>
                                        @endif
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- / Content -->
</div>

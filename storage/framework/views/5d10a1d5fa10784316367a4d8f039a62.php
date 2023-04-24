<div>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Student')): ?>
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
                                            <h3 class="card-title mb-2"><?php echo e(App\Models\Request::where('status', 'pending')->count()); ?>

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
                                                <?php echo e(App\Models\Request::where('status', 'in progress')->count()); ?></h3>
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
                                            <h3 class="card-title mb-2"><?php echo e(App\Models\Request::where('status', 'solved')->count()); ?>

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
                                            <h3 class="card-title mb-2"><?php echo e(App\Models\Request::where('status', 'all')->count()); ?></h3>
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
                                        <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo e($request->id); ?></strong>
                                            </td>
                                            <td>
                                                <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo e($request->subject); ?></strong>
                                            </td>
                                            <td>
                                                <?php if($request->status == 'pending'): ?>
                                                <span class="badge rounded-pill bg-danger"><?php echo e($request->status); ?></span>
                                                <?php elseif($request->status == 'in progress'): ?>
                                                <span class="badge rounded-pill bg-warning"><?php echo e($request->status); ?></span>
                                                <?php elseif($request->status == 'solved'): ?>
                                                <span class="badge rounded-pill bg-success"><?php echo e($request->status); ?></span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <span><?php echo e($request->created_at->toDayDateTimeString()); ?></span>
                                            </td>
                                            <td>
                                                <a href="<?php echo e(route('chat', ['request' => $request->id])); ?>" type="button"
                                                    class="btn btn-primary btn-sm">View Details</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--/ Hoverable Table rows -->
                </div>
            </div>
            
        </div>
    <?php endif; ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Support Agent')): ?>
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
                                                    <?php echo e(App\Models\Request::where('status', 'pending')->count()); ?>

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
                                                    <?php echo e(App\Models\Request::where('status', 'in progress')->where('solved_id', Auth::user()->id)->count()); ?>

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
                                                    <?php echo e(App\Models\Request::where('status', 'solved')->where('solved_id', Auth::user()->id)->count()); ?>

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
                                                    
                                                    <?php echo e(App\Models\Request::where(function($query) {
                                                        $query->where('status', 'in progress')
                                                              ->orWhere('status', 'solved');
                                                    })->where('solved_id', Auth::user()->id)->count()); ?>

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
                        <h5 class="card-header">All <?php echo e($filterTerm); ?> requests</h5>
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
                                    <?php $__currentLoopData = $support_request; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo e($request->id); ?></strong>
                                            </td>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong><?php echo e($request->subject); ?></strong>
                                            </td>

                                            <td>
                                                <?php if($request->status == 'pending'): ?>
                                                    <span
                                                        class="badge rounded-pill bg-danger"><?php echo e($request->status); ?></span>
                                                <?php elseif($request->status == 'in progress'): ?>
                                                    <span
                                                        class="badge rounded-pill bg-warning"><?php echo e($request->status); ?></span>
                                                <?php elseif($request->status == 'solved'): ?>
                                                    <span
                                                        class="badge rounded-pill bg-success"><?php echo e($request->status); ?></span>
                                                <?php endif; ?>
                                            </td>


                                            <td><span
                                                    class=""><?php echo e($request->created_at->toDayDateTimeString()); ?></span>
                                            </td>
                                            <td>
                                                <a href="#" wire:click.prevent='updateRequest(<?php echo e($request->id); ?>)'
                                                    type="button" class="btn btn-primary btn-sm">
                                                    <?php if($request->status == 'pending'): ?>
                                                        Solve
                                                    <?php elseif($request->status == 'in progress'): ?>
                                                        Complete
                                                    <?php else: ?>
                                                        View Details
                                                    <?php endif; ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Hoverable Table rows -->
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'Super Admin')): ?>

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
                                                    <?php echo e(App\Models\Request::where('status', 'pending')->count()); ?>

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
                                                    <?php echo e($supports->count()); ?>

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

                                                    <?php echo e($students->count()); ?>

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
                                                    <?php echo e(App\Models\Request::count()); ?>

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
                    <?php if($pending_request == true): ?>
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
                                        <?php $__currentLoopData = $pendingRequests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong><?php echo e($request->id); ?></strong>
                                                </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong><?php echo e($request->subject); ?></strong>
                                                </td>

                                                <td>
                                                    <?php if($request->status == 'pending'): ?>
                                                        <span
                                                            class="badge rounded-pill bg-danger"><?php echo e($request->status); ?></span>
                                                    <?php elseif($request->status == 'in progress'): ?>
                                                        <span
                                                            class="badge rounded-pill bg-warning"><?php echo e($request->status); ?></span>
                                                    <?php elseif($request->status == 'solved'): ?>
                                                        <span
                                                            class="badge rounded-pill bg-success"><?php echo e($request->status); ?></span>
                                                    <?php endif; ?>
                                                </td>


                                                <td><span
                                                        class=""><?php echo e($request->created_at->toDayDateTimeString()); ?></span>
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($support_agent == true): ?>
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
                                        <?php $__currentLoopData = $supports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong><?php echo e($user->name); ?></strong>
                                                </td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->departments ? $user->departments->faculties->name : 'No Faculty'); ?>

                                                </td>
                                                <td><?php echo e($user->departments ? $user->departments->name : 'No Department'); ?>

                                                </td>
                                                <td><?php echo e($user->registration_no ? $user->registration_no : 'No reg_no'); ?>

                                                </td>


                                                <td>
                                                    <div class="delete">
                                                        <a class="btn btn-outline-danger"href="javascript:void(0);" wire:click="delete(<?php echo e($user->id); ?>)"><i
                                                            class="bx bx-trash me-1" ></i> Delete</a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if($student == true): ?>
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
                                        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong><?php echo e($user->name); ?></strong>
                                                </td>
                                                <td><?php echo e($user->email); ?></td>
                                                <td><?php echo e($user->departments ? $user->departments->faculties->name : 'No Faculty'); ?>

                                                </td>
                                                <td><?php echo e($user->departments ? $user->departments->name : 'No Department'); ?>

                                                </td>
                                                <td><?php echo e($user->registration_no ? $user->registration_no : 'No reg_no'); ?>

                                                </td>


                                                <td>
                                                    <div class="delete">
                                                        <a class="btn btn-outline-danger"href="javascript:void(0);" wire:click="delete(<?php echo e($user->id); ?>)"><i
                                                            class="bx bx-trash me-1" ></i> Delete</a>
                                                    
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if($all_request == true): ?>
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
                                        <?php $__currentLoopData = App\Models\Request::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $request): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong><?php echo e($request->id); ?></strong>
                                                </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                    <strong><?php echo e($request->subject); ?></strong>
                                                </td>

                                                <td>
                                                    <?php if($request->status == 'pending'): ?>
                                                        <span
                                                            class="badge rounded-pill bg-danger"><?php echo e($request->status); ?></span>
                                                    <?php elseif($request->status == 'in progress'): ?>
                                                        <span
                                                            class="badge rounded-pill bg-warning"><?php echo e($request->status); ?></span>
                                                    <?php elseif($request->status == 'solved'): ?>
                                                        <span
                                                            class="badge rounded-pill bg-success"><?php echo e($request->status); ?></span>
                                                    <?php endif; ?>
                                                </td>


                                                <td><span
                                                        class=""><?php echo e($request->created_at->toDayDateTimeString()); ?></span>
                                                </td>

                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!--/ Hoverable Table rows -->
                </div>
            </div>
        </div>
    <?php endif; ?>


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
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                        <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $facuty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($facuty->id); ?>"><?php echo e($facuty->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col mb-0">
                                <label for="dobBasic" class="form-label">Select Department</label>
                                <div class="input-group mb-3">
                                    <select class="form-select" id="inputGroupSelect01" wire:model='department'
                                        <?php echo e($faculty ? ' ' : 'disabled'); ?>>

                                        <?php if($faculty): ?>
                                            <option selected>Select Department</option>
                                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($department->id); ?>"><?php echo e($department->name); ?>

                                                </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php else: ?>
                                            <option selected>Please select faculty</option>
                                        <?php endif; ?>
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
<?php /**PATH C:\xampp\htdocs\StudentHelpDesk\resources\views/livewire/backend/dashboard/dashboard-component.blade.php ENDPATH**/ ?>
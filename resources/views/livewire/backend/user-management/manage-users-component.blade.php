<div>
    <div class="container-xxl flex-grow-1 container-p-y">


        <div class="row">
            <div class="col-lg-12 col-md-4">
                <!-- Hoverable Table rows -->
                <div class="card">

                    <div class="card-header d-flex justify-content-between">
                        <h5 class="mt-1">System Users</h5>
                        <button type="button" class="btn btn-primary" wire:click.prevent='showUserModal'>Create New
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
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                @foreach ($users as $user)
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                            <strong>{{ $user->name }}</strong>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->departments ? $user->departments->faculties->name : 'No Faculty' }}
                                        </td>
                                        <td>{{ $user->departments ? $user->departments->name : 'No Department' }}</td>
                                        <td>{{ $user->registration_no ? $user->registration_no : 'No reg_no' }}</td>

                                        <td>
                                            @foreach ($user->roles as $role)
                                                <span class="badge bg-danger">{{ $role->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
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
    <!-- / Content -->


    <!-- Modal -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <form action="" wire:submit.prevent='createUser'>
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel1">Add New User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                <input type="text" id="email" class="form-control" placeholder="Enter email john@gmail.com"
                                    wire:model='email' />
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
</div>

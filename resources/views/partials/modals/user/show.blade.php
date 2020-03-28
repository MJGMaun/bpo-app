<div class="modal fade" id="modal-extra-large" tabindex="-1" role="dialog" aria-labelledby="modal-extra-large" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Add User</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="alert alert-info alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h3 class="alert-heading font-size-h5 font-w400">Note</h3>
                        <p class="mb-0">If no input in password, default password will be: <span class="font-w700"> 12345678</span></p>
                    </div>
                    <form class="js-validation-register" method="POST" action="{{ route('users.store') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6  @error('first_name') is-invalid @enderror">
                                <div class="form-material floating">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="first_name"
                                            name="first_name"
                                            value="{{ old('first_name') }}"
                                            autofocus>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <label for="first_name">First name</label>
                                </div>
                            </div>
                            <div class="col-md-6  @error('last_name') is-invalid @enderror">
                                <div class="form-material floating">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="last_name"
                                            value="{{ old('last_name') }}"
                                            name="last_name">
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <label for="last_name">Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6  @error('email') is-invalid @enderror">
                                <div class="form-material floating">
                                    <input
                                            type="email"
                                            class="form-control"
                                            id="material-email2"
                                            value="{{ old('email') }}"
                                            name="email">
                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    <label for="material-email2">Email</label>
                                </div>
                            </div>
                            <div class="col-md-6  @error('role') is-invalid @enderror">
                                <div class="form-material floating">
                                    <select class="form-control" id="role" name="role">
                                        <option disabled selected></option><!-- Empty value for demostrating material select box -->
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <label for="role">Role</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6  @error('job_title') is-invalid @enderror">
                                <div class="form-material floating">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="job_title"
                                            value="{{ old('job_title') }}"
                                            name="job_title">
                                            @error('job_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    <label for="job_title">Job Title</label>
                                </div>
                            </div>
                            <div class="col-md-6  @error('password') is-invalid @enderror">
                                <div class="form-material floating">
                                    <input
                                            type="text"
                                            class="form-control"
                                            id="password"
                                            value="{{ old('password') }}"
                                            name="password">
                                    <label for="password">Password</label>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-alt-success">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

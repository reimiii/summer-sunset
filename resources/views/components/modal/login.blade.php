<div {{ $attributes->class(['modal modal-blur fade']) }} id="modal-login" tabindex="-1" style="display: none;"
     aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login bang?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('login') }}" class="card">
                        @csrf
                        <div class="card-header">
                            <h3 class="card-title">Login form</h3>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label required">Email address</label>
                                <div>
                                    <input type="email" class="form-control" name="email"
                                           placeholder="Enter email"
                                           style="background-size: auto 26px !important; background-position: right center !important; background-repeat: no-repeat !important; background-origin: content-box !important; background-image: url(&quot;chrome-extension://bkdgflcldnnnapblkhphbgpggdiikppg/img/logo-small.svg&quot;) !important; transition: background 0s ease 0s !important;">
                                    @error('email')
                                    <small class="form-hint text-red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label required">Password</label>
                                <div>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    @error('password')
                                    <small class="form-hint text-red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <button type="submit" class="btn btn-primary">Submit</button>

                            <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                                Cancel
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
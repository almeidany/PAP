<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.backoffice.projects.head')

<body>
    <div id="main-wrapper">
        @include('layouts.backoffice.sidebar')
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    @include('layouts.backoffice.nav')
                </div>
            </header>
             <!--  Header End -->
             <div class="body-wrapper">
              
            <div class="card-body">
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-account" role="tabpanel" aria-labelledby="pills-account-tab" tabindex="0">
                  <div class="row">
                    <div class="col-lg-6 d-flex align-items-stretch">
                      <div class="card w-100 border position-relative overflow-hidden">
                        <div class="card-body p-4">
                          <h4 class="card-title">Change Profile</h4>
                          <p class="card-subtitle mb-4">Change your profile picture from here</p>
                          <div class="text-center">
                            <img src="../assets/images/profile/user-1.jpg" alt="modernize-img" class="img-fluid rounded-circle" width="120" height="120">
                            <div class="d-flex align-items-center justify-content-center my-4 gap-6">
                              <button class="btn btn-primary">Upload</button>
                              <button class="btn bg-danger-subtle text-danger">Reset</button>
                            </div>
                            <p class="mb-0">Permitido JPG, JPEG e PNG. Max size of 11MB</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-stretch">
                      <div class="card w-100 border position-relative overflow-hidden">
                        <div class="card-body p-4">
                          <h4 class="card-title">Change Password</h4>
                          <p class="card-subtitle mb-4">To change your password please confirm here</p>
                          <form>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Current Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" value="12345678910">
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword2" class="form-label">New Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword2" value="12345678910">
                            </div>
                            <div>
                              <label for="exampleInputPassword3" class="form-label">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword3" value="12345678910">
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="card w-100 border position-relative overflow-hidden mb-0">
                        <div class="card-body p-4">
                          <h4 class="card-title">Personal Details</h4>
                          <p class="card-subtitle mb-4">To change your personal detail , edit and save from here</p>
                          <form>
                            <div class="row">
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleInputtext" class="form-label">Your Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext" placeholder="Mathew Anderson">
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Location</label>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected="">United Kingdom</option>
                                    <option value="1">United States</option>
                                    <option value="2">United Kingdom</option>
                                    <option value="3">India</option>
                                    <option value="3">Russia</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputtext1" class="form-label">Email</label>
                                  <input type="email" class="form-control" id="exampleInputtext1" placeholder="info@modernize.com">
                                </div>
                              </div>
                              <div class="col-lg-6">
                                <div class="mb-3">
                                  <label for="exampleInputtext2" class="form-label">Store Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext2" placeholder="Maxima Studio">
                                </div>
                                <div class="mb-3">
                                  <label class="form-label">Currency</label>
                                  <select class="form-select" aria-label="Default select example">
                                    <option selected="">India (INR)</option>
                                    <option value="1">US Dollar ($)</option>
                                    <option value="2">United Kingdom (Pound)</option>
                                    <option value="3">India (INR)</option>
                                    <option value="3">Russia (Ruble)</option>
                                  </select>
                                </div>
                                <div class="mb-3">
                                  <label for="exampleInputtext3" class="form-label">Phone</label>
                                  <input type="text" class="form-control" id="exampleInputtext3" placeholder="+91 12345 65478">
                                </div>
                              </div>
                              <div class="col-12">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Address</label>
                                  <input type="text" class="form-control" id="exampleInputtext4" placeholder="814 Howard Street, 120065, India">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="d-flex align-items-center justify-content-end mt-4 gap-6">
                                  <button class="btn btn-primary">Save</button>
                                  <button class="btn bg-danger-subtle text-danger">Cancel</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
            </div>
            @include('layouts.backoffice.Settings_Script')
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <!-- Import Js Files -->
    <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.init.js') }}"></script>
    <script src="{{ asset('assets/js/theme/theme.js') }}"></script>
    <script src="{{ asset('assets/js/theme/app.min.js') }}"></script>
    <script src="{{ asset('assets/js/theme/sidebarmenu.js') }}"></script>
    
    <!-- highlight.js (code view) -->
    <script src="{{ asset('assets/js/highlights/highlight.min.js') }}"></script>
    <script>
        hljs.initHighlightingOnLoad();
    
        document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
            codeBlock.textContent = codeBlock.innerHTML;
        });
    </script>
    <script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboards/dashboard.js') }}"></script>
</body>

</html>
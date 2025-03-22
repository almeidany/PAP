﻿<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('layouts.head_CriarNoticias')

<body>
    <div id="main-wrapper">
        @include('layouts.sidebarHome')
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    @include('layouts.nav_Home')
                </div>
            </header>
            <!--  Header End -->
            <div class="body-wrapper">
                <div class="container-fluid">
                  <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                    <div class="card-body px-4 py-3">
                      <div class="row align-items-center">
                        <div class="col-9">
                          <h4 class="fw-semibold mb-8">Criar Noticia</h4>
                        </div>
                        <div class="col-3">
                          <div class="text-center mb-n5">
                            <img src="./assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-body">
                      <!-- Create the editor container -->
                      <div id="editor">
                        <p>
                          <br>
                        </p>
                      </div>
                    </div>
                    <!-- Centralizar botões -->
                    <div class="form-actions text-center">
                      <button type="submit" class="btn btn-primary" style="margin-bottom: 25px;">Submeter</button>
                      <button type="button" class="btn bg-danger-subtle text-danger ms-2" style="margin-bottom: 25px;" onclick="window.location.href='{{ route('home-noticias') }}'">Cancelar</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @include('layouts.Settings&Script')
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <script src="./assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="../assets/js/theme/app.init.js"></script>
  <script src="../assets/js/theme/theme.js"></script>
  <script src="../assets/js/theme/app.min.js"></script>
  <script src="../assets/js/theme/sidebarmenu.js"></script>

  <!-- solar icons -->
  <script src="../../../npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>

  <!-- highlight.js (code view) -->
  <script src="../assets/js/highlights/highlight.min.js"></script>
  <script>
  hljs.initHighlightingOnLoad();


  document.querySelectorAll("pre.code-view > code").forEach((codeBlock) => {
    codeBlock.textContent = codeBlock.innerHTML;
  });
</script>
  <script src="../assets/libs/quill/dist/quill.min.js"></script>
  <script src="../assets/js/forms/quill-init.js"></script>
</body>

</html>

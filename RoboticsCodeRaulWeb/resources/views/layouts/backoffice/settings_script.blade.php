<script>
    function handleColorTheme(e) {
        document.documentElement.setAttribute("data-color-theme", e);
    }
</script>
<button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center position-fixed bottom-0 end-0 m-3"
    type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
    <i class="bi bi-gear fs-7"></i>
</button>

<div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
    aria-labelledby="offcanvasExampleLabel">
    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
        <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
            Settings
        </h4>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body h-n80" data-simplebar="">
        <h6 class="fw-semibold fs-4 mb-2">Modo</h6>

        <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                autocomplete="off">
            <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                <i class="bi bi-sun"></i>Claro
            </label>

            <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout" autocomplete="off">
            <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                <i class="bi bi-moon"></i>Escuro
            </label>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Direções</h6>
        <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="direction-l" id="ltr-layout" autocomplete="off">
            <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                <i class="bi bi-arrow-left"></i>LTR
            </label>

            <input type="radio" class="btn-check" name="direction-l" id="rtl-layout" autocomplete="off">
            <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                <i class="bi bi-arrow-right"></i>RTL
            </label>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Cores</h6>

        <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
            <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme" autocomplete="off">
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Blue">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme" autocomplete="off">
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Aqua">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme" autocomplete="off">
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Purple">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                autocomplete="off">
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Green">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                autocomplete="off">
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Cyan">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                </div>
            </label>

            <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                autocomplete="off">
            <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout" data-bs-toggle="tooltip"
                data-bs-placement="top" data-bs-title="Orange">
                <div class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                </div>
            </label>
        </div>

        <h6 class="mt-5 fw-semibold fs-4 mb-2">Caixas Com</h6>

        <div class="d-flex flex-row gap-3 customizer-box" role="group">
            <input type="radio" class="btn-check" name="card-layout" id="card-with-border" autocomplete="off">
            <label class="btn p-9 btn-outline-primary" for="card-with-border">
                <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
            </label>

            <input type="radio" class="btn-check" name="card-layout" id="card-without-border" autocomplete="off">
            <label class="btn p-9 btn-outline-primary" for="card-without-border">
                <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
            </label>
        </div>
    </div>
</div>

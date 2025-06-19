<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title"> <?= strtoupper($rom) ?> @ <?= strtoupper($system)?></h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Emulators</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"> <a href="?system=<?= $system?>"><?=strtoupper(htmlspecialchars($system))?></a></li>
                        <li class="breadcrumb-item active" aria-current="page"> <?= strtoupper($rom) ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->



                      <div class="col-12">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                  <div id="emu-container"></div>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>

  <script>
    var NepPlayer   = "#emu-container";
    var NepEmu      = "<?= $system ?>";
    var NepLang     = "en";
    var NepZoom     = "enable";
    var NepMaxWidth = "3100px";
    var gameUrl     = "<?="/roms/$system/$rom";  ?>";
  </script>

  <script src="https://mem.neptunjs.com/njs/njsLoader.js" type="text/javascript"></script>

  </div>
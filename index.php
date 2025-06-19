<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <title>Emulator.pindex.nl</title>
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="../../assets/extra-libs/prism/prism.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <a href="/" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                        <a class="sidebartoggler d-none d-md-block" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                            <i class="mdi mdi-toggle-switch mdi-toggle-switch-off font-20"></i>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->

                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
<div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <!-- <li class="nav-item d-none d-md-block">
                            <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar">
                                <i class="mdi mdi-menu font-24"></i>
                            </a>
                        </li> -->
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item search-box">
                            <a class="nav-link waves-effect waves-dark" href="javascript:void(0)">
                                <div class="d-flex align-items-center">
                                    <i class="mdi mdi-magnify font-20 mr-1"></i>
                                    <div class="ml-1 d-none d-sm-block">
                                        <span>Search</span>
                                    </div>
                                </div>
                            </a>
                            <form class="app-search position-absolute" action="/">
                                <input type="text" class="form-control" id="bestand2" placeholder="Mario, zelda..." oninput="zoekBestand('bestand2', 'resultaat2')" autocomplete="off" />

                                       <div id="resultaat2" class="bg-white" style="margin-top:20px;"></div>  



 <script>
    let timers = {}; // object om aparte timers per input bij te houden

    function zoekBestand(inputId, resultaatId) {
        clearTimeout(timers[inputId]);

        const input = document.getElementById(inputId);
        const zoekterm = input.value.trim();

        if (zoekterm.length < 2) {
            document.getElementById(resultaatId).innerHTML = '';
            return;
        }

        // Start timer voor debounce
        timers[inputId] = setTimeout(() => {
            fetch('zoek_roms.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'bestand=' + encodeURIComponent(zoekterm)
            })
            .then(res => res.text())
            .then(data => {
                document.getElementById(resultaatId).innerHTML = data;
            });
        }, 300);
    }
</script>
                              
                                <a class="srh-btn">
                                    <i class="ti-close"></i>
                                </a>
                            </form>
                           
                        </li>
                      



                
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    
                </div>
                
            </nav>
        </header>
         
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
         <?php // include "menu.php"; ?>

         <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a href="/" class="sidebar-link">
                                <i class="mdi mdi-adjust"></i>
                                <span class="hide-menu"> Emulators / Search</span>
                            </a>
                        </li>

<?php
// Menu crafter die /roms doorloopt en alleen mappen toont met bestanden
function renderDirectory($baseDir) {
    // Scan hoofdmap (alle systemen)
    $systems = array_filter(scandir($baseDir), function($item) use ($baseDir) {
        return $item !== '.' && $item !== '..' && is_dir("$baseDir/$item");
    });

    foreach ($systems as $system) {
        $systemPath = "$baseDir/$system";
        $roms = array_filter(scandir($systemPath), function($item) use ($systemPath) {
            return $item !== '.' && $item !== '..' && is_file("$systemPath/$item");
        });

        $romCount = count($roms);
        
        // Alleen weergeven als er minstens 1 rom-bestand is
        if ($romCount === 0) {
            continue;
        }

        echo '<li class="sidebar-item">';
        echo "    <a class='sidebar-link has-arrow waves-effect waves-dark' href='?system=$system' aria-expanded='false'>";
        echo '        <i class="mdi mdi-av-timer"></i>';
        echo '        <span class="hide-menu">' . strtoupper(htmlspecialchars($system)) . ' </span>';
        echo '        <span class="badge badge-pill badge-info ml-auto m-r-15">' . $romCount . '</span>';
        echo '    </a>';
        echo '    <ul aria-expanded="false" class="collapse first-level">';

        foreach ($roms as $rom) {
            $romName = pathinfo($rom, PATHINFO_FILENAME);
            $kortrom = substr($rom, 0, 20); // max 20 chars
            $romUrl = '?system=' . urlencode($system) . '&rom=' . urlencode($rom);
            echo '        <li class="sidebar-item">';
            echo '            <a href="' . $romUrl . '" class="sidebar-link">';
            echo '                <i class="mdi mdi-adjust"></i>';
            echo '                <span class="hide-menu"> ' . htmlspecialchars($kortrom) . ' </span>';
            echo '            </a>';
            echo '        </li>';
        }

        echo '    </ul>';
        echo '</li>';
    }
}

// Gebruik: geef hier het pad naar je rom-folder op
renderDirectory('roms');
?>
                     

                     </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

            <?php

            // --- Bestandsnaam uit URL ---
                // Input valideren
                $system = isset($_GET['system']) ? basename($_GET['system']) : null;
                $rom = isset($_GET['rom']) ? basename($_GET['rom']) : null;

                

                // Bestandspad samenstellen
                if ($system && $rom) {
                    $romPath = __DIR__ . "/roms/$system/$rom";

                    if (file_exists($romPath)) {
                        //echo "<p>✅ Rom playing: <strong>/roms/$system/$rom</strong></p>";
                        include "playemulator.php";
                    } else {
                        echo "<p>❌ Rom not Found: <strong>/roms/$system/$rom</strong></p>";
                        $error = "<p>❌ Rom not Found: <strong>/roms/$system/$rom</strong></p>";
                        include "emulators.php";
                    }
                } 
                else {
                        // echo "<p>⚠️  check url: ?system=nes&rom=mario.zip</p>";
                        if (isset($system)) { include "show.php"; }
                        else { include "emulators.php";}                    
                }
            ?>

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">All Rights are stolen by me, so Designed and Developed by <a href="/">Fabian</a></footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="../../assets/extra-libs/prism/prism.js"></script>
</body>

</html>
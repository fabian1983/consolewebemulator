<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Availble roms in <?=strtoupper(htmlspecialchars($system))?></h4>
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/">Emulators</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?=strtoupper(htmlspecialchars($system))?></li>
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

<div class="row">
            <div class="col-12">
                <!-- Row -->
                <div class="row">
                    <?php
                        // Controleer of 'systeem' in de URL is meegegeven
                        if (!isset($_GET['system'])) {
                            echo "Geen systeem opgegeven.";
                            exit;
                        }

                        $systeem = basename($_GET['system']); // Voorkomt directory traversal
                        $map = __DIR__ . '/roms/' . $systeem;

                        // Controleer of de map bestaat
                        if (!is_dir($map)) {
                            echo "Map '$systeem' bestaat niet.";
                            exit;
                        }

                        // Open de map en lees de inhoud
                        $inhoud = scandir($map);

                        // Filter alleen bestanden (geen mappen)
                        $bestanden = array_filter($inhoud, function($item) use ($map) {
                            return is_file($map . '/' . $item);
                        });

                        // Omzetten naar array-indexen (nodig voor modulo)
                        $bestanden = array_values($bestanden);

                        // Toon de lijst van bestanden per 50 in een nieuwe kolom
                        $totaal = count($bestanden);
                        for ($i = 0; $i < $totaal; $i++) {
                            // Nieuwe kolom starten bij elke 50 items
                            if ($i % 40 == 0) {
                                if ($i > 0) {
                                    // Sluit vorige kolom af
                                    echo '</ul></div></div></div>';
                                }
                                // Start nieuwe kolom
                                echo '<div class="col-lg-3 col-md-6">
                                        <div class="card">
                                            <div class="card-body">
                                                <ul>';
                            }

                            $bestand = $bestanden[$i];
                            echo "<li><a href='?system=$systeem&rom=" . urlencode($bestand) . "'>" . htmlspecialchars($bestand) . "</a></li>";
                        }

                        // Sluit de laatste kolom af als er bestanden zijn
                        if ($totaal > 0) {
                            echo "</ul></div></div></div>";
                        }
                        ?>

                    <!-- column -->

                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            
                            <div class="card-body">
                              <img class="card-img-top img-responsive" width='300px' src="/assets/images/emulator/<?=$system?>.jpg" alt="Card image cap">  
                            </div>
                        </div><!-- Card -->
                    </div><!-- column -->                     
            <!-- ============================================================== -->
        </div> <!-- row--for-col-3 -->
        </div> <!-- col-12 -->
        </div> <!-- row -->
        </div><!-- container-fluid -->
            <!-- ============================================================== -->

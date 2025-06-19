<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="page-breadcrumb">
    <div class="row">
        <div class="col-5 align-self-center">
            <h4 class="page-title">Emulators</h4>
                  
        </div>
        <div class="col-7 align-self-center">
            <div class="d-flex align-items-center justify-content-end">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active" aria-current="page">Emulators</li>
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











        <!-- Row -->     
        <div class="row">
            <div class="col-12">
                <!-- Row -->
                <div class="row">


                    <div class="col-lg-3 col-md-6 col-lg-12 animated rollIn">
                        <!-- Card -->
                        <div class="card">
                            <div class="card-body">
                                        <label>Search Rom(s) :</label>
                                        <input class="" type="text" id="bestand1" placeholder="Mario, Zelda..." oninput="zoekBestand('bestand1', 'resultaat1')" autocomplete="off" />
                                        <input class="" type="text" id="bestand3" placeholder="Pokemon, Puzzle..." oninput="zoekBestand('bestand3', 'resultaat3')" autocomplete="off" />
                                        <input class="" type="text" id="bestand4" placeholder="Kart, Pacman..." oninput="zoekBestand('bestand4', 'resultaat4')" autocomplete="off" />
                                        
                                        <div id="resultaat1" style="margin-top:20px;"></div>                                       
                                        <div id="resultaat3" style="margin-top:20px;"></div>                                        
                                        <div id="resultaat4" style="margin-top:20px;"></div>



<!--
<hr>
   <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="bestand">*Upload Rom:</label>
        <input type="file" name="bestand" id="bestand" required>

        <label for="platform">*Select system:</label>
        <select name="platform" id="platform" required>
            <option value="n64">N64</option>
            <option value="nes">NES</option>
            <option value="gbc">GBC</option>
            <option value="gba">GBA</option>
            <option value="gboy">GAMEBOY</option>
            <option value="nds">NDS</option>
        </select><br>

        <label for="nieuweNaam">Rename Rom (optional):</label>
        <input type="text" name="nieuweNaam" id="nieuweNaam" placeholder="keep original name"><br>


        <button type="submit">Upload and play</button>
        * = required
    </form>

-->


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

                                        <!--
                                    <hr>
YEAR - ConsoleTAG / Full Consolename<br>
1971 - <a href='?system=arcade'>       arcade / Classic arcade machine</a><br>
1977 - <a href='?system=atari2600'>    atari2600 / Atari 2600</a><br>
1983 - <a href='?system=msx'>          msx / MSX</a><br>
1983 - <a href='?system=nes'>          nes / NES | Famicom Disk System</a><br>
1985 - <a href='?system=segaMS'>       segaMS / Sega Master System</a><br>
1987 - <a href='?system=tg16'>         tg16 / TurboGrafx - 16 | PC Engine</a><br>
1988 - <a href='?system=cps1'>         cps1 / CPS1 arcade machine</a><br>
1988 - <a href='?system=sega'>         sega / Sega Mega Drive (Genesis)</a><br>
1989 - <a href='?system=gboy'>         gboy / Game Boy | Color</a><br>
1989 - <a href='?system=lynx'>         lynx / Atari Lynx</a><br>
1990 - <a href='?system=neogeo'>       neogeo / Neo Geo</a><br>
1990 - <a href='?system=tg16CD'>       tg16CD / TurboGrafx - 16 CD | PC Engine CD</a><br>
1990 - <a href='?system=snes'>         snes</a> / Nintendo Super NES<br>
1991 - <a href='?system=segaCD'>       segaCD / Sega CD</a><br>
1991 - <a href='?system=3do'>          3do / 3DO</a><br>
1993 - <a href='?system=cps2'>         cps2 / CPS2 arcade machine</a><br>
1993 - <a href='?system=atari_jaguar'> atari_jaguar / Atari Jaguar</a><br>
1994 - <a href='?system=psx'>          psx </a> / Sony PlayStation<br>
1994 - <a href='?system=sega32x'>      sega32x / Sega 32X</a><br>
1994 - <a href='?system=sega_saturn'>  sega_saturn</a>  / Sega Saturn<br>
1995 - <a href='?system=vboy'>         vboy </a> / Nintendo Virtual Boy<br>
1996 - <a href='?system=n64'>          n64</a> / Nintendo 64<br>
1996 - <a href='?system=cps3'>         cps3 / CPS3 arcade machine</a><br>
1998 - <a href='?system=ngp'>          ngp / Neo Geo Pocket | Color</a><br>
1999 - <a href='?system=wswan'>        wswan / Bandai Wonderswan | Color</a><br>
2001 - <a href='?system=gba'>          gba / Game Boy Advance</a><br>
2004 - <a href='?system=nds'>          nds / Nintendo DS</a><br>

                                        -->



                            </div>
                        </div>
                        <!-- Card -->
                    </div>


<?php
/*
$romsDir = __DIR__ . '/roms';
$imagePath = '/assets/images/emulator/';

// Haal alleen directories op binnen /roms
$dirs = array_filter(glob($romsDir . '/*'), 'is_dir');

foreach ($dirs as $dir) {
    $folderName = basename($dir);

    // Zoek naar bestanden in de map (geen subfolders)
    $romFiles = array_filter(scandir($dir), function($file) use ($dir) {
        return is_file($dir . '/' . $file) && $file !== '.' && $file !== '..';
    });

    // Als er geen bestanden zijn, sla deze map dan over
    if (count($romFiles) === 0) {
        continue;
    }

    $imageFile = $imagePath . $folderName . '.jpg';

    // Fallback image als afbeelding niet bestaat
    if (!file_exists(__DIR__ . '/' . $imageFile)) {
        $imageFile = $imagePath . 'img2.jpg';
    }

    $UPCASEfolderName = strtoupper($folderName);
    echo <<<HTML
    <!-- column -->
    <div class="col-lg-3 col-md-6 ">
        <!-- Card -->
        <div class="card">
            <a href="?system=$folderName"><img class="card-img-top img-responsive" src="$imageFile" alt="Card image cap"></a>
            <div class="card-body">
                <h4 class="card-title">$UPCASEfolderName</h4>
                <p class="card-text">The period from 1980 to 2000 was a revolutionary time for video game consoles. During these two decades, gaming evolved from simple 8-bit games to advanced 3D worlds.</p>
                <a href="?system=$folderName" class="btn btn-primary">$UPCASEfolderName</a>
            </div>
        </div>
        <!-- Card -->
    </div>
    <!-- column -->
    HTML;
}
*/
?>

        
                </div>     
<?php 
$romsDir = __DIR__ . '/roms';
$imagePath = '/assets/images/emulator/';

// Haal alleen directories op binnen /roms
$dirs = array_filter(glob($romsDir . '/*'), 'is_dir');

echo '<div class="row el-element-overlay">';

foreach ($dirs as $dir) {
    $folderName = basename($dir);

    // Zoek naar bestanden in de map (geen subfolders)
    $romFiles = array_filter(scandir($dir), function($file) use ($dir) {
        return is_file($dir . '/' . $file) && $file !== '.' && $file !== '..';
    });

    // Sla mappen zonder bestanden over
    if (count($romFiles) === 0) {
        continue;
    }

    $imageFile = $imagePath . $folderName . '.jpg';

    // Fallback image als afbeelding niet bestaat
    if (!file_exists(__DIR__ . '/' . $imageFile)) {
        $imageFile = $imagePath . 'img2.jpg';
    }

    $UPCASEfolderName = strtoupper($folderName);

    echo <<<HTML
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="el-card-item">
                <div class="el-card-avatar el-overlay-1">
                    <img src="$imageFile" alt="$UPCASEfolderName" />
                    <div class="el-overlay">
                        <ul class="list-style-none el-info">
                            <li class="el-item">
                                <a class="btn default btn-outline image-popup-vertical-fit el-link" href="$imageFile">
                                    <i class="icon-magnifier"></i> Image
                                </a>
                            </li>
                            <li class="el-item">
                                <a class="btn default btn-outline el-link" target="blank" href="?system=$folderName">
                                    <i class="mdi mdi-av-timer"></i> My Playable Romlist
                                </a>
                            </li>
                            <li class="el-item">
                                <a class="btn default btn-outline el-link" target="blank" href="https://www.google.com/search?q=$folderName+roms">
                                    <i class="icon-link"></i> Google $folderName+roms
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="el-card-content">
                    <h4 class="m-b-0">$UPCASEfolderName</h4>
                </div>
            </div>
        </div>
    </div>
    HTML;
}

echo '</div>';
?>


                
            </div>
        </div>          
                        
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
 </div>
<?php
header('Content-Type: text/html; charset=utf-8');

$zoekterm = isset($_POST['bestand']) ? trim($_POST['bestand']) : '';
if (!$zoekterm) {
    echo "<div style='color:gray'>Typ something to search...</div>";
    exit;
}

$romsDir = __DIR__ . '/roms/';
$output = '';
$gevonden = false;

$submappen = glob($romsDir . '*', GLOB_ONLYDIR);

foreach ($submappen as $submapPad) {
    $systeem = basename($submapPad);

    $bestanden = glob($submapPad . '/*');

    foreach ($bestanden as $bestandPad) {
        $rom = basename($bestandPad);

        if (stripos($rom, $zoekterm) !== false) {
            // Bouw URL met query parameters
            $url = "/?system=" . urlencode($systeem) . "&rom=" . urlencode($rom);
            $output .= "<div>✅ <strong>". strtoupper($systeem)."</strong>: <a href='$url' target='_blank'>". strtoupper($rom) ."</a></div>";
            $gevonden = true;
        }
    }
}

if (!$gevonden) {
    $output = "<div style='color:red'>❌ Rom not found that contains '{$zoekterm}' </div>";
}


echo $output;

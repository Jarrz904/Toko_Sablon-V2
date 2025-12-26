<?php

// 1. Setup folder temporary
$tempDir = '/tmp/storage';
$paths = [
    "$tempDir/framework/views",
    "$tempDir/framework/cache",
    "$tempDir/framework/sessions",
    "$tempDir/bootstrap/cache",
];

foreach ($paths as $path) {
    if (!is_dir($path)) {
        mkdir($path, 0755, true);
    }
}

// 2. Lingkungan Produksi
putenv("APP_ENV=production");
putenv("APP_STORAGE=$tempDir");
putenv("VIEW_COMPILED_PATH=$tempDir/framework/views");

// 3. PENTING: Salin file services.php dan packages.php jika ada (atau biarkan kosong agar Laravel rebuild)
// Ini sering jadi penyebab 'Target class [view] does not exist'
if (!file_exists("$tempDir/bootstrap/cache/services.php")) {
    file_put_contents("$tempDir/bootstrap/cache/services.php", '<?php return []; ?>');
}

require __DIR__ . '/../public/index.php';
<?php

// 1. Definisikan path temporary untuk Vercel
$storagePath = '/tmp/storage';
$viewPath = '/tmp/storage/framework/views';

// 2. Buat foldernya secara otomatis jika belum ada
if (!is_dir($viewPath)) {
    mkdir($viewPath, 0755, true);
}

// 3. Set environment variable secara runtime agar Laravel tahu path-nya berubah
putenv("VIEW_COMPILED_PATH=$viewPath");
putenv("APP_STORAGE=$storagePath");

// 4. Load index asli dari folder public
require __DIR__ . '/../public/index.php';
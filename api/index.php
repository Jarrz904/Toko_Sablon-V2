<?php

// 1. Arahkan semua folder writable ke /tmp karena Vercel read-only
$storagePath = '/tmp/storage';
if (!is_dir($storagePath)) {
    mkdir($storagePath . '/framework/views', 0755, true);
    mkdir($storagePath . '/framework/cache', 0755, true);
    mkdir($storagePath . '/framework/sessions', 0755, true);
    mkdir($storagePath . '/bootstrap/cache', 0755, true);
}

// 2. Override environment variables untuk path storage
putenv("VIEW_COMPILED_PATH=/tmp/storage/framework/views");
putenv("APP_STORAGE=/tmp/storage");

// 3. Jalankan aplikasi melalui public/index.php asli
require __DIR__ . '/../public/index.php';
<?php
declare(strict_types=1);

// Sesuaikan jika username/password MySQL lokal kamu berbeda.
$dbHost = 'localhost';
$dbName = 'portfolio_db';
$dbUser = 'root';
$dbPass = '';

try {
    $pdo = new PDO(
        "mysql:host={$dbHost};dbname={$dbName};charset=utf8mb4",
        $dbUser,
        $dbPass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $exception) {
    // Halaman tetap dapat menampilkan contoh proyek jika database belum dibuat.
    $pdo = new class {
        public function query(string $query): never {
            throw new RuntimeException('Database belum terhubung.');
        }
    };
}

<?php
// use Todo\Config\Config_db;
require_once __DIR__ . '/src/config/config_db.php';

try{
    $pdo = new PDO("mysql:host=".DB_HOST.";",DB_USER,DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRORMODE, PDO::ERRORMODE_EXCEPTION);
    $pdo->exec("CREATE DATABASE IF NOT EXISTS `".DB_NAME."`CHARACTER SET UTF8MB4 COLLATE utf8mb4_unicode_ci;");

    $pdo->exec("USE `".DB_NAME."`;");

    $pdo->exec("CREATE TABLE IF NOT EXISTS task(
    id INT AUTO_INCREMENT PRIMARY KEY,
    descripcion VARCHAR(255),
    completed BOOLEAN DEFAULT 0,
    )");
    echo "<h3 style='color:green'>Base de datos y tabla creada</h3>";
    echo "<p><a href='index.php'>Volver a la aplicación</a></p>";
} catch (PDOException $e) {
    echo "<h3 style='color:red'>Error al crear la base de datos</h3>";
}


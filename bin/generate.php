#!/usr/bin/env php
<?php

// Beispiel: Erstellt einen Ordner und eine Datei darin
$targetDir = $argv[1] ?? __DIR__ . '/output'; // Der erste Parameter ist das Zielverzeichnis

if (!is_dir($targetDir)) {
    mkdir($targetDir, 0755, true);
    echo "Ordner '$targetDir' wurde erstellt.\n";
}

$file = $targetDir . '/example.txt';
file_put_contents($file, "Dies ist eine automatisch generierte Datei.");
echo "Datei '$file' wurde erstellt.\n";

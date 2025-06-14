<?php
require_once "src/model/database.php";

$sql = "SELECT * FROM usuarios";

$stmt = $pdo->query($sql);

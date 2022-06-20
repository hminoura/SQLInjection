<?php
$pdo = new PDO("sqlite:sample.sqlite3");

$query = "SELECT * FROM account WHERE id='r00i02'";
print("[query]\n" . $query . "\n\n");
$stmt = $pdo->query($query);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print("[result]\n");
print_r($result);
?>

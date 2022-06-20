<?php
$pdo = new PDO("sqlite:sample.sqlite3");

print("id: ");
$id = trim(fgets(STDIN));

$query = "SELECT * FROM account WHERE id=?";
$stmt = $pdo->prepare($query);
$stmt->execute(array($id));

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print("[result]\n");
print_r($result);
?>

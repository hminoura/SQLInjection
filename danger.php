<?php
$pdo = new PDO("sqlite:sample.sqlite3");

print("id: ");
$id = trim(fgets(STDIN));

$query = "SELECT * FROM account WHERE id='" . $id . "'";
print("[query]\n" . $query . "\n\n");
$stmt = $pdo->query($query);

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print("[result]\n");
print_r($result);
?>

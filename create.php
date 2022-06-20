<?php
$pdo = new PDO("sqlite:sample.sqlite3");
$query = "CREATE TABLE IF NOT EXISTS account (id TEXT PRIMARY KEY, password TEXT)";
$pdo->exec($query);

$accounts = array(
    ["r00i01", "January"],
    ["r00i02", "February"],
    ["r00i03", "March"],
    ["r00i04", "April"],
    ["r00i05", "May"],
    ["r00i06", "June"],
    ["r00i07", "July"],
);

$query = "INSERT INTO account (id, password) VALUES (?, ?)";
$stmt = $pdo->prepare($query);
foreach($accounts as $account) {
    $stmt->execute($account);
}
?>

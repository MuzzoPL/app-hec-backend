<?php
require_once '../config/db.php';

$id = $_GET['id'];

$stmt = $pdo->prepare("DELETE FROM beneficiarios WHERE id = ?");
$stmt->execute([$id]);

echo json_encode(["message" => "Beneficiário deletado com sucesso."]);
?>
<?php
require_once '../config/db.php';

$id = $_GET['id'];
$data = json_decode(file_get_contents("php://input"), true);

$sql = "UPDATE beneficiarios SET nome_completo = ?, email = ?, telefone = ? WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([
    strtoupper($data['nome_completo']),
    strtoupper($data['email']),
    $data['telefone'],
    $id
]);

echo json_encode(["message" => "Beneficiário atualizado com sucesso."]);
?>
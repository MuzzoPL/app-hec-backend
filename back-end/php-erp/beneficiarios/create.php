<?php
require_once '../config/db.php';

$data = json_decode(file_get_contents("php://input"), true);

$sql = "INSERT INTO beneficiarios (chave_principal, subchave_principal, nome_completo, nome_social, cnpj, cpf, email, telefone, tel_usuario, dt_nascimento_usuario, endereco, uf, cidade, bairro, cep, endereco_risco, uf_risco, cidade_risco, bairro_risco, cep_risco, telefone_risco, raca_animal, dt_nascimento_animal, status)
        VALUES (?, ?, ??, ?, , ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    strtoupper($data['chave_principal']),
    strtoupper($data['subchave_principal']),
    strtoupper($data['nome_completo']),
    strtoupper($data['nome_social']),
    $data['cnpj'],
    $data['cpf'],
    strtoupper($data['email']),
    $data['telefone'],
    $data['tel_usuario'],
    $data['dt_nascimento_usuario'],
    strtoupper($data['endereco']),
    strtoupper($data['uf']),
    strtoupper($data['cidade']),
    strtoupper($data['bairro']),
    strtoupper($data['cep']),
    strtoupper($data['endereco_risco']),
    strtoupper($data['uf_risco']),
    strtoupper($data['cidade_risco']),
    strtoupper($data['bairro_risco']),
    strtoupper($data['cep_risco']),
    $data['telefone_risco'],
    strtoupper($data['raca_animal']),
    $data['dt_nascimento_animal'],
    strtoupper($data['status'])
]);

echo json_encode(["message" => "Beneficiário cadastrado com sucesso."]);
?>
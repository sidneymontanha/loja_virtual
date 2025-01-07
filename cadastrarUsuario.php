<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

header('Content-Type: application/json');

require 'conexao.php';



// Receber os dados do POST
$data = json_decode(file_get_contents("php://input"), true);

print_r($data);

/*if (!$data) {
    echo json_encode(["status" => "erro", "mensagem" => "Nenhum dado recebido."]);
    exit;
}*/




// Validar os campos obrigatórios
$camposObrigatorios = ['nome', 'email', 'telefone', 'cep', 'endereco', 'numero',  'bairro', 'cidade', 'estado', 'concordo'];
foreach ($camposObrigatorios as $campo) {
    if (empty($data[$campo])) {
        echo json_encode(["status" => "erro", "mensagem" => "Campo $campo é obrigatório."]);
        exit;
    }
}

// Preparar e executar a inserção na tabela usuario
$stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, telefone, cep, endereco, numero,  bairro, complemento, cidade, estado, politc_privacit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssss",
    $data['nome'],
    $data['email'],
    $data['telefone'],
    $data['cep'],
    $data['endereco'],
    $data['numero'],
    $data['bairro'],
    $data['complemento'],
    $data['cidade'],
    $data['estado'],
    $data['concordo']
);

if ($stmt->execute()) {
    echo json_encode(["status" => "sucesso", "mensagem" => "Usuário cadastrado com sucesso!"]);
} else {
    echo json_encode(["status" => "erro", "mensagem" => "Erro ao cadastrar usuário."]);
}

$stmt->close();
$pdo->close();

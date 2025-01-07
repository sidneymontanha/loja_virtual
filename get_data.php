<?php

require 'conexao.php'; // Inclui a conexão com o banco de dados

// Função para buscar categorias
function getCategorias($pdo) {
    $stmt = $pdo->prepare("SELECT id, nome FROM categorias ORDER BY nome ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para buscar cores
function getCores($pdo) {
    $stmt = $pdo->prepare("SELECT id, nome FROM cores ORDER BY nome ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Função para buscar tamanhos
function getTamanhos($pdo) {
    $stmt = $pdo->prepare("SELECT id, nome FROM tamanhos ORDER BY id ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function GetMarcas($pdo) {
    $stmt = $pdo->prepare("SELECT id, nome FROM marcas ORDER BY nome ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
};

function GetProdutos($pdo) {
    $stmt = $pdo->prepare("SELECT id, nome FROM produtos ORDER BY nome ASC");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
     
};



// Verifica qual tipo de dado foi solicitado
$type = isset($_GET['type']) ? $_GET['type'] : '';
$result = [];

switch ($type) {
    case 'categorias':
        $result = getCategorias($pdo);
        break;
    case 'cores':
        $result = getCores($pdo);
        break;
    case 'tamanhos':
        $result = getTamanhos($pdo);
        break;
    case 'marcas':
        $result = getMarcas($pdo);
        break;
    case 'produtos':
        $result = getProdutos($pdo);
        break;    
    default:
        $result = ['error' => 'Tipo de dados inválido.'];
        break;
}

// Retorna os dados em formato JSON

echo json_encode($result);

?>

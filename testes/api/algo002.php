<?php
header('Content-Type: application/json; charset=UTF-8');

// Simula um “banco de dados” estático de usuários
$usuarios = [
    ['id' => 1, 'nome' => 'João Silva',     'email' => 'joao.silva@exemplo.com'],
    ['id' => 2, 'nome' => 'Maria Souza',    'email' => 'maria.souza@exemplo.com'],
    ['id' => 3, 'nome' => 'Pedro Oliveira', 'email' => 'pedro.oliveira@exemplo.com'],
    ['id' => 4, 'nome' => 'Mariana Alves',  'email' => 'mariana.alves@exemplo.com'],
    ['id' => 5, 'nome' => 'Carlos Pereira', 'email' => 'carlos.pereira@exemplo.com']
];

// Obtém o filtro enviado via GET
$emailId = isset($_GET['emailId']) ? trim($_GET['emailId']) : '';

// Para cada usuário, adiciona a chave 'matched' (true/false)
$itens = array_map(function($u) use ($emailId) {
    if ($emailId === '') {
        // Sem filtro: matched = false para todos
        $u['matched'] = false;
    } else {
        // Se o email contém (case-insensitive) a substring buscada, matched = true
        $u['matched'] = (stripos($u['email'], $emailId) !== false);
    }
    return $u;
}, $usuarios);

// Monta a resposta (sempre retornamos todos os itens)
$resposta = [
    'success'    => true,
    'totalItens' => count($itens),
    'itens'      => $itens
];

echo json_encode($resposta);
exit;


?>
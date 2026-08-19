<?php
/**
 * Conecta Vagas DF - Página Principal / Roteador
 * Versão 7.0
 */

// Incluir configurações e funções
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/functions.php';

// Incluir cabeçalho
include __DIR__ . '/includes/header.php';

// Definir página requisitada
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// Lista de páginas permitidas (Whitelisting de segurança)
$allowedPages = ['home', 'vagas', 'vaga', 'candidatos', 'dashboard'];

if (in_array($page, $allowedPages)) {
    $pageFile = __DIR__ . '/pages/' . $page . '.php';
    if (file_exists($pageFile)) {
        include $pageFile;
    } else {
        include __DIR__ . '/pages/home.php';
    }
} else {
    include __DIR__ . '/pages/home.php';
}

// Incluir rodapé
include __DIR__ . '/includes/footer.php';
?>

<?php
// hire.php - valida seleção de personagens por combo e redireciona para WhatsApp
// ATENÇÃO: substitua $whatsapp_number pelo seu número em formato internacional, sem '+' ou espaços. Ex: 5511999999999
$whatsapp_number = '5534988870260';

function send_error($msg){
    echo '<p style="color:red">Erro: '.htmlspecialchars($msg).'</p>';
    echo '<p><a href="javascript:history.back()">Voltar</a></p>';
    exit;
}

if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    send_error('Requisição inválida.');
}

$combo = isset($_POST['combo']) ? trim($_POST['combo']) : '';
$max = isset($_POST['max']) ? intval($_POST['max']) : 0;
$characters = isset($_POST['characters']) ? $_POST['characters'] : array();
$price = isset($_POST['price']) ? floatval($_POST['price']) : 0;
$no_photo = isset($_POST['no_photo']) ? intval($_POST['no_photo']) : 0; // 0 ou 1

if($combo === '' || $max <= 0){
    send_error('Dados do combo inválidos.');
}

if(!is_array($characters)) $characters = array($characters);

$selected_count = count($characters);
if($selected_count === 0){
    send_error('Selecione ao menos 1 personagem.');
}
if($selected_count > $max){
    send_error("Você selecionou mais do que o permitido para este combo. Máximo permitido: {$max}. Selecionado(s): {$selected_count}.");
}

// Monta mensagem para WhatsApp
$chars_str = implode(', ', array_map('trim', $characters));

// Calcula preço final
$final_price = $price;
if($no_photo === 1){
    $final_price = max(0, $price - 400);
}

$photo_note = $no_photo === 1 ? 'Sem foto (desconto aplicado)' : 'Com foto (fotografia inclusa pela Mobile Vision)';

// Formata preço com duas casas decimais e vírgula
$final_price_formatted = number_format($final_price, 2, ',', '.');

$lines = [];
$lines[] = '*📩 Pedido de Contratação — Locomotiva da Alegria*';
$lines[] = '';
$lines[] = '*Combo:* ' . $combo;
$lines[] = '*Personagens:* ' . ($chars_str ? $chars_str : '-');
$lines[] = '*Opção:* ' . $photo_note;
$lines[] = '*Valor:* R$ ' . $final_price_formatted;
$lines[] = '';
if($no_photo === 0){
    $lines[] = '📸 Fotos produzidas pela Mobile Vision';
    $lines[] = '';
}
$lines[] = 'Por favor, confirme as informações e informe: *data do evento*, *horário* e *telefone de contato*.';

$message = urlencode(implode("\n", $lines));

// Redireciona para WhatsApp Web / API de clique
$wa_url = "https://wa.me/{$whatsapp_number}?text={$message}";
header('Location: '.$wa_url);
exit;

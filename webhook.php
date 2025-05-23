<?php
// Token Bot Telegram & Chat ID
$token = "7942470927:AAFvOCtUk4ZUc6_X26dWV7X08V3OQTvgSN8";
$chat_id = "1823303715";

// Ambil data JSON dari TokoVoucher
$data = file_get_contents("php://input");
$log = json_decode($data, true);

// Format pesan Telegram
$message = "=== Transaksi Baru Tokovoucher ===\n";
$message .= "Status: " . $log['status'] . "\n";
$message .= "Produk: " . $log['produk'] . "\n";
$message .= "SN: " . $log['sn'] . "\n";
$message .= "Ref ID: " . $log['ref_id'] . "\n";
$message .= "Trx ID: " . $log['trx_id'] . "\n";
$message .= "Harga: Rp" . number_format($log['price']) . "\n";
$message .= "Sisa Saldo: Rp" . number_format($log['sisa_saldo']) . "\n";

// Kirim pesan ke Telegram
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($message));

// Balas ke Tokovoucher
echo "OK";
?>

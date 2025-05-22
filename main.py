import requests

BOT_TOKEN = "7942470927:AAFvOCtUk4ZUc6_X26dWV7X08V3OQTvgSN8"
CHAT_ID = "1823303715"

def send_telegram_message(message):
    url = f"https://api.telegram.org/bot{BOT_TOKEN}/sendMessage"
    payload = {
        "chat_id": CHAT_ID,
        "text": message
    }
    requests.post(url, data=payload)

# Contoh kirim pesan
send_telegram_message("Bot notifikasi TokoVoucher aktif!")

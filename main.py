import telebot

# Token bot kamu
TOKEN = "7942470927:AAFvOCtUk4ZUc6_X26dWV7X08V3OQTvgSN8"

# Inisialisasi bot
bot = telebot.TeleBot(TOKEN)

# Fungsi untuk menangani semua pesan
@bot.message_handler(func=lambda message: True)
def handle_message(message):
    bot.reply_to(message, "Halo! Bot @Nyymarket_bot aktif dan siap membantu.")

# Menjalankan bot
print("Bot @Nyymarket_bot sedang berjalan...")
bot.infinity_polling()

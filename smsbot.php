<?php
// сюда нужно вписать токен вашего бота
define('TELEGRAM_TOKEN', '707561448:AAFT9o54NG6TMgv7LqIWCRud0dC34uyv9TU');
// сюда нужно вписать ваш внутренний айдишник
define('TELEGRAM_CHATID', '707561448');
message_to_telegram('Привет!');
function message_to_telegram($text)
{
    $ch = curl_init();
    curl_setopt_array(
        $ch,
        array(
            CURLOPT_URL => 'https://api.telegram.org/bot' . TELEGRAM_TOKEN . '/sendMessage',
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_POSTFIELDS => array(
                'chat_id' => TELEGRAM_CHATID,
                'text' => $text,
            ),
        )
    );
    curl_exec($ch);
}

?>

<?php
 function get_currency($currency_code, $format) {

    $date = date('d/m/Y'); // Текущая дата

    $file_currency_cache =__DIR__.'/XML_daily.asp'; //куда кэш будет помещен (в ту же папку, где и content.php)

    /*Переменная даты и времени создания кэша, переменная дата создания кэша на сутки больше*/
    $date_tick=date("d.m.Y H:i:s", filectime($file_currency_cache));
    $date_update=date("d.m.Y H:i:s", strtotime(("+24 hour"), strtotime($date_tick)));

    /*Если дата создания кэша больше или равна 24-ем часам, удаляем файл кэша*/
    if($date>= $date_update){
        unlink('XML_daily.asp');
    }
    /*Создание файла кэша*/
    if(!is_file($file_currency_cache)) {

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://www.cbr.ru/scripts/XML_daily.asp?date_req='.$date);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_HEADER, 0);

        $out = curl_exec($ch);
        curl_close($ch);

        file_put_contents($file_currency_cache, $out);

    }
    $content_currency = simplexml_load_file($file_currency_cache);
    return number_format(str_replace(',', '.', $content_currency->xpath('Valute[CharCode="'.$currency_code.'"]')[0]->Value), $format);
}
?>
<?php
/*
 * пример реализуемого редиректа
https://stalker.ru/catalog/pnevmaticheskie_pistolety_stalker_prime_4_5mm_co2/pistolet_pnevmaticheskiy_stalker_s17_glock17_k_4_5mm/ ->
https://stalker.ru/catalog/products/pistolet_pnevmaticheskiy_stalker_s17_glock17_k_4_5mm/
*/
$uri_arr = explode( '/', $_SERVER['REQUEST_URI']);
if(count($uri_arr) == 5 AND $uri_arr[2] != 'products') {
    $arTov = \Bitrix\Iblock\ElementTable::getList(array(
        'filter' => array('IBLOCK_ID' => CATALOG_IBLOCK_ID,'CODE' => $uri_arr[3]),
        'limit' => 1,
    ))->fetch();
    if(!empty($arTov)){
        //редирект
        LocalRedirect("/catalog/products/". $uri_arr[3]."/");
    }
}
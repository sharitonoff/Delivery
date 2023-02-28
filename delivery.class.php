<?php
/*!
    \brief Класс службы доставки
  
    @date 28.02.2023
    @version 1.0.2
    @author    Sergey Haritonof <info@haritonof.site>
    @copyright 2023 (c) Sergey Haritonof
*/

class Delivery {

    public static function getService( $track = '' ) {

        $services = [];
        // СДЭК
        if( preg_match( '/^11([0-9]{8})$/iu', $track ) or preg_match( '/^12([0-9]{8})$/iu', $track ) ) {

            $services[] = 'cdek';
        }
        // Boxberry
        if( preg_match( '/^0000([0-9]{9})$/iu', $track ) ) {

            $services[] = 'boxberry';
        }
        // DHL
        if( preg_match( '/^559([0-9]{7})$/iu', $track ) or preg_match( '/^228([0-9]{7})$/iu', $track ) ) {

            $services[] = 'dhl';
        }
        // Почта россии
        if( preg_match( '/^([0-9]{14})$/iu', $track ) or preg_match( '/^(CB|CL|RB)([0-9]{9})RU$/iu', $track ) ) {

            $services[] = 'ruspost';
        }
        // IML
        if( preg_match( '/^([0-9]{13})$/iu', $track ) ) {

            $services[] = 'iml';
        }
        // China EMS ePacket
        if( preg_match( '/^(EA|LC|LK|LM|LQ)([0-9]{9})CN$/iu', $track ) ) {
            
            $services[] = 'chinaems';
        }
        // DPD
        if( preg_match( '/^RU00([0-9]{7})$/iu', $track ) ) {

            $services[] = 'rusdpd';
        }
        // Pony Express
        if( preg_match( '/^PN([0-9]{8})$/iu', $track ) ) {

            $services[] = 'pony';
        }
        // Qwintry Logistics
        if( preg_match( '/^QR([0-9]{8})$/iu', $track ) ) {

            $services[] = 'qwintry';
        }
        // СберЛогистика
        if( preg_match( '/^RP([0-9]{9})$/iu', $track ) ) {

            $services[] = 'sber';
        }
        // Почта США
        if( preg_match( '/^(CF|CH|CJ|CW|EY|EZ|LC|LH|LJ|LK|SX|UA|UJ|UM)([0-9]{9})US$/iu', $track ) ) {

            $services[] = 'usps';
        }
        // Почта Китая
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})CN$/iu', $track ) or preg_match( '/^CP([0-9]{9})CN$/iu', $track ) ) {
            
            $services[] = 'chinapost';
        }
        // Почта Гонконга
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})HK$/iu', $track ) ) {
            
            $services[] = 'hkpost';
        }
        // Почта Финляндии
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})FI$/iu', $track ) ) {
            
            $services[] = 'posti';
        }
        // DHL Global Mail
        if( preg_match( '/^(RX)([0-9]{9})DE$/iu', $track ) ) {
            
            $services[] = 'dhlglobalmail';
        }
        // SunYou
        if( preg_match( '/^SYLLD([0-9]{8})$/iu', $track ) ) {
            
            $services[] = 'sypost';
        }
        // Почта Швеции
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})SE$/iu', $track ) ) {
            
            $services[] = 'swedenposten';
        }
        // Почта Нидерландов
        if( preg_match( '/^(RS)([0-9]{9})NL$/iu', $track ) ) {
            
            $services[] = 'postnl';
        }
        // Европочта
        if( preg_match( '/^BY([0-9]{12})$/iu', $track ) ) {
            
            $services[] = 'evropochta';
        }
        // FedEx
        if( preg_match( '/^([0-9]{22})$/iu', $track ) ) {
            
            $services[] = 'fedex';
        }
        // Aliexpress Standard Shipping
        if( preg_match( '/^(RV|ZH|ZN)([0-9]{9})HK$/iu', $track ) or preg_match( '/^(LP)([0-9]{14})$/iu', $track ) ) {
            
            $services[] = 'cainiao';
        }
        // Почта Сингапура
        if( preg_match( '/^(RB|RF)([0-9]{9})SG$/iu', $track ) ) {
            
            $services[] = 'singaporepost';
        }
        // 4PX Express
        if( preg_match( '/^P000000([0-9]{6})$/iu', $track ) ) {
            
            $services[] = '4px';
        }

        return $services;
    }
    
    public static function getInfo( $code = '' ) {

        $a = [ 'cdek'       => 'СДЭК',
               'dhl'        => 'DHL Express',
               'dhlglobalmail' => 'DHL Global Mail',
               'ruspost'    => 'Почта россии',
               'chinapost'  => 'Почта Китая',
               'rusdpd'     => 'DPD в России',
               'boxberry'   => 'Boxberry',
               'rusems'     => 'EMS Россия',
               'chinaems'   => 'China EMS ePacket',
               'cse'        => 'КСЭ',
               'pony'       => 'Pony Express',
               'iml'        => 'IML',
               'dellin'     => 'Деловые линии',
               'qwintry'    => 'Qwintry Logistics',
               'sber'       => 'СберЛогистика',
               'usps'       => 'Почта США',
               'hkpost'     => 'Почта Гонконга',
               'posti'      => 'Почта Финляндии',
               'sypost'     => 'SunYou',
               'swedenposten' => 'Почта Швеции',
               'postnl'     => 'Почта Нидерландов',
               'evropochta' => 'Европочта',
               'fedex'      => 'FedEx',
               'cainiao'    => 'Aliexpress Standard Shipping',
               'singaporepost' => 'Почта Сингапура',
               '4px'        => '4PX Express' ];
        
        return isset( $a[$code] ) ? $a[$code] : null;
    }
}
?>

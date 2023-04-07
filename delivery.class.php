<?php
/*!
    \brief Класс службы доставки
  
    @date 07.04.2023
    @version 1.0.6
    @author    Sergey Haritonof <info@haritonof.site>
    @copyright 2023 (c) Sergey Haritonof
*/

class Delivery {

    public static function getService( $track = '' ): array {

        $services = [];
        // 4PX Express
        if( preg_match( '/^P000000([0-9]{6})$/iu', $track ) ) {
            
            $services[] = '4px';
        }
        // Aliexpress Standard Shipping
        if( preg_match( '/^AECA([0-9]{10})RU2$/iu', $track ) or preg_match( '/^(ZA)([0-9]{9})LV$/iu', $track ) or preg_match( '/^(RV|UA|ZA|ZH|ZN)([0-9]{9})HK$/iu', $track ) or preg_match( '/^(LP)([0-9]{14})$/iu', $track ) ) {
            
            $services[] = 'cainiao';
        }
        // BEL
        if( preg_match( '/^BELLY([0-9]{10})YQ$/iu', $track ) ) {
            
            $services[] = '8256ru';
        }
        // Boxberry
        if( preg_match( '/^0000([0-9]{9})$/iu', $track ) ) {

            $services[] = 'boxberry';
        }
        // China EMS ePacket
        if( preg_match( '/^(A|E|L)([A-Z]{1})([0-9]{9})CN$/iu', $track ) ) {
            
            $services[] = 'chinaems';
        }
        // DHL Express
        if( preg_match( '/^559([0-9]{7})$/iu', $track ) or preg_match( '/^228([0-9]{7})$/iu', $track ) ) {

            $services[] = 'dhl';
        }
        // DHL Global Mail
        if( preg_match( '/^R(S|X)([0-9]{9})DE$/iu', $track ) ) {
            
            $services[] = 'dhlglobalmail';
        }
        // DPD в России
        if( preg_match( '/^RU00([0-9]{7})$/iu', $track ) ) {

            $services[] = 'rusdpd';
        }
        // FedEx
        if( preg_match( '/^([0-9]{22})$/iu', $track ) or preg_match( '/^639([0-9]{9})$/iu', $track ) ) {
            
            $services[] = 'fedex';
        }
        // IML
        if( preg_match( '/^([0-9]{13})$/iu', $track ) ) {

            $services[] = 'iml';
        }
        // J-NET
        if( preg_match( '/^JNTCU([0-9]{10})YQ$/iu', $track ) ) {
            
            $services[] = 'jnet';
        }
        // Joom Logistics
        if( preg_match( '/^(ZJ)([0-9]{9})HK$/iu', $track ) ) {
            
            $services[] = 'joom';
        }
        // Pony Express
        if( preg_match( '/^PN([0-9]{8})$/iu', $track ) ) {

            $services[] = 'pony';
        }
        // Qwintry Logistics
        if( preg_match( '/^QR([0-9]{8})$/iu', $track ) ) {

            $services[] = 'qwintry';
        }
        // SunYou
        if( preg_match( '/^SYLLD([0-9]{8})$/iu', $track ) or preg_match( '/^SY([0-9]{11})$/iu', $track ) ) {
            
            $services[] = 'sypost';
        }
        // YANWEN international express
        if( preg_match( '/^(UB|UD|UG|UR|VR)([0-9]{9})YP$/iu', $track ) ) {

            $services[] = 'yanwen';
        }
        // Yun Express
        if( preg_match( '/^YT([0-9]{16})$/iu', $track ) ) {

            $services[] = 'yuntrack';
        }
        // Европочта
        if( preg_match( '/^BY([0-9]{12})$/iu', $track ) ) {
            
            $services[] = 'evropochta';
        }
        // Почта Беларуси
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})BY$/iu', $track ) ) {
            
            $services[] = 'belpost';
        }
        // Почта Бельгии
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})BE$/iu', $track ) ) {
            
            $services[] = 'bpost';
        }
        // Почта Германии
        if( preg_match( '/^(C|E)([A-Z]{1})([0-9]{9})DE$/iu', $track ) or preg_match( '/^R([A-RT-WYZ]{1})([0-9]{9})DE$/iu', $track ) ) {
            
            $services[] = 'deutschepost';
        }
        // Почта Гонконга
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})HK$/iu', $track ) or preg_match( '/^Z(B-IK-Z)([0-9]{9})HK$/iu', $track ) ) {
            
            $services[] = 'hkpost';
        }
        // Почта Израиля
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})IL$/iu', $track ) ) {
            
            $services[] = 'israelpost';
        }
        // Почта Казахстана
        if( preg_match( '/^(AP|CO|CP|EE|EL|IA|RR|RW)([0-9]{9})KZ$/iu', $track ) ) {
            
            $services[] = 'kazpochta';
        }
        // Почта Китая
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})CN$/iu', $track ) ) {
            
            $services[] = 'chinapost';
        }
        // Почта Латвии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})LV$/iu', $track ) ) {
            
            $services[] = 'latvijaspasts';
        }
        // Почта Малайзии
        if( preg_match( '/^(RQ|UD)([0-9]{9})MY$/iu', $track ) ) {
            
            $services[] = 'malaysiapost';
        }
        // Почта Нидерландов
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})NL$/iu', $track ) ) {
            
            $services[] = 'postnl';
        }
        // Почта Норвегии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})NO$/iu', $track ) ) {
            
            $services[] = 'norwaypost';
        }
        // Почта России
        if( preg_match( '/^([0-9]{14})$/iu', $track ) or preg_match( '/^(C|E|L|R)([A-Z]{1})([0-9]{9})RU$/iu', $track ) ) {

            $services[] = 'ruspost';
        }
        // Почта Сингапура
        if( preg_match( '/^(L|R)([A-Z]{1})([0-9]{9})SG$/iu', $track ) ) {
            
            $services[] = 'singaporepost';
        }
        // Почта США
        if( preg_match( '/^(CF|CH|CJ|CW|EY|EZ|LC|LH|LJ|LK|RU|SX|UA|UJ|UM)([0-9]{9})US$/iu', $track ) ) {

            $services[] = 'usps';
        }
        // Почта Турции
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})TR$/iu', $track ) ) {
            
            $services[] = 'pttposta';
        }
        // Почта Украины
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})UA$/iu', $track ) ) {
            
            $services[] = 'ukrposhta';
        }
        // Почта Финляндии
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})FI$/iu', $track ) ) {
            
            $services[] = 'posti';
        }
        // Почта Чехии
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})CZ$/iu', $track ) ) {
            
            $services[] = 'ceskaposta';
        }
        // Почта Швеции
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})SE$/iu', $track ) ) {
            
            $services[] = 'swedenposten';
        }
        // Почта Эстонии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})EE$/iu', $track ) ) {
            
            $services[] = 'omniva';
        }
        // Почта Японии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})JP$/iu', $track ) ) {
            
            $services[] = 'japanpost';
        }
        // СберЛогистика
        if( preg_match( '/^RP([0-9]{9})$/iu', $track ) ) {

            $services[] = 'sber';
        }
        // СДЭК
        if( preg_match( '/^1([0-9]{9})$/iu', $track ) ) {

            $services[] = 'cdek';
        }
        
        return $services;
    }
    
    public static function getInfo( $code = '' ): string {

        $a = [ '4px'        => '4PX Express',
               'cainiao'    => 'Aliexpress Standard Shipping',
               '8256ru'     => 'BEL',
               'boxberry'   => 'Boxberry',
               'chinaems'   => 'China EMS ePacket',
               'dhl'        => 'DHL Express',
               'dhlglobalmail' => 'DHL Global Mail',
               'rusdpd'     => 'DPD в России',
               'fedex'      => 'FedEx',
               'iml'        => 'IML',
               'jnet'       => 'J-NET',
               'joom'       => 'Joom Logistics',
               'pony'       => 'Pony Express',
               'qwintry'    => 'Qwintry Logistics',
               'sypost'     => 'SunYou',
               'yanwen'     => 'YANWEN international express',
               'yuntrack'   => 'Yun Express',
               'dellin'     => 'Деловые линии',
               'evropochta' => 'Европочта',
               'cse'        => 'КурьерСервисЭкспресс',
               'belpost'    => 'Почта Беларуси',
               'bpost'      => 'Почта Бельгии',
               'deutschepost' => 'Почта Германии',
               'hkpost'     => 'Почта Гонконга',
               'kazpochta'  => 'Почта Казахстана',
               'chinapost'  => 'Почта Китая',
               'latvijaspasts' => 'Почта Латвии',
               'malaysiapost' => 'Почта Малайзии',
               'postnl'     => 'Почта Нидерландов',
               'ruspost'    => 'Почта России',
               'singaporepost' => 'Почта Сингапура',
               'usps'       => 'Почта США',
               'pttposta'   => 'Почта Турции',
               'posti'      => 'Почта Финляндии',
               'swedenposten' => 'Почта Швеции',
               'omniva'     => 'Почта Эстонии',
               'sber'       => 'СберЛогистика',
               'cdek'       => 'СДЭК',
               // 1.0.6
               'israelpost' => 'Почта Израиля',
               'norwaypost' => 'Почта Норвегии',
               'ukrposhta'  => 'Почта Украины',
               'ceskaposta' => 'Почта Чехии',
               'japanpost'  => 'Почта Японии', ];
        
        return isset( $a[$code] ) ? $a[$code] : '';
    }
}
?>

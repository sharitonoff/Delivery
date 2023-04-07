<?php
/*!
    \brief Класс службы доставки
  
    @date 07.04.2023
    @version 1.0.7
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
        // Correo Argentino
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})AR$/iu', $track ) ) {
            
            $services[] = 'correoargentino';
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
        // MailAmericas
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MH$/iu', $track ) ) {
            
            $services[] = 'mailamericas';
        }
        // Meest Express
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MG$/iu', $track ) ) {
            
            $services[] = 'meestexpress';
        }
        // Pony Express
        if( preg_match( '/^PN([0-9]{8})$/iu', $track ) ) {

            $services[] = 'pony';
        }
        // Postnord Denmark
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})DK$/iu', $track ) ) {
            
            $services[] = 'postnorddk';
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
        // Почта Австралии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})AU$/iu', $track ) ) {
            
            $services[] = 'australiapost';
        }
        // Почта Австрии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})AT$/iu', $track ) ) {
            
            $services[] = 'austrianpost';
        }
        // Почта Азербайджана
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})AZ$/iu', $track ) ) {
            
            $services[] = 'azerpost';
        }
        // Почта Албании
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})AL$/iu', $track ) ) {
            
            $services[] = 'albanianpost';
        }
        // Почта Армении
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})AM$/iu', $track ) ) {
            
            $services[] = 'haypost';
        }
        // Почта Беларуси
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})BY$/iu', $track ) ) {
            
            $services[] = 'belpost';
        }
        // Почта Бельгии
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})BE$/iu', $track ) ) {
            
            $services[] = 'bpost';
        }
        // Почта Болгарии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})BG$/iu', $track ) ) {
            
            $services[] = 'bgpost';
        }
        // Почта Боснии и Герцеговины
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})BA$/iu', $track ) ) {
            
            $services[] = 'postaba';
        }
        // Почта Бразилии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})BR$/iu', $track ) ) {
            
            $services[] = 'brazilcorreios';
        }
        // Почта Великобритании
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})GB$/iu', $track ) ) {
            
            $services[] = 'royalmail';
        }
        // Почта Венгрии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})HU$/iu', $track ) ) {
            
            $services[] = 'magyarposta';
        }
        // Почта Вьетнама
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})VN$/iu', $track ) ) {
            
            $services[] = 'vnpost';
        }
        // Почта Германии
        if( preg_match( '/^(C|E)([A-Z]{1})([0-9]{9})DE$/iu', $track ) or preg_match( '/^R([A-RT-WYZ]{1})([0-9]{9})DE$/iu', $track ) ) {
            
            $services[] = 'deutschepost';
        }
        // Почта Гонконга
        if( preg_match( '/^R([A-Z]{1})([0-9]{9})HK$/iu', $track ) or preg_match( '/^Z(B-IK-Z)([0-9]{9})HK$/iu', $track ) ) {
            
            $services[] = 'hkpost';
        }
        // Почта Греции
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})GR$/iu', $track ) ) {
            
            $services[] = 'eltacourier';
        }
        // Почта Грузии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})GE$/iu', $track ) ) {
            
            $services[] = 'georgianpost';
        }
        // Почта Израиля
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})IL$/iu', $track ) ) {
            
            $services[] = 'israelpost';
        }
        // Почта Индонезии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})ID$/iu', $track ) ) {
            
            $services[] = 'indonesiaint';
        }
        // Почта Ирландии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})IE$/iu', $track ) ) {
            
            $services[] = 'anpost';
        }
        // Почта Исландии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})IS$/iu', $track ) ) {
            
            $services[] = 'islandicpost';
        }
        // Почта Испании
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})ES$/iu', $track ) ) {
            
            $services[] = 'correoses';
        }
        // Почта Италии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})IT$/iu', $track ) ) {
            
            $services[] = 'posteitaliane';
        }
        // Почта Казахстана
        if( preg_match( '/^(AP|CO|CP|EE|EL|IA|RR|RW)([0-9]{9})KZ$/iu', $track ) ) {
            
            $services[] = 'kazpochta';
        }
        // Почта Канады
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})CA$/iu', $track ) ) {
            
            $services[] = 'canadapost';
        }
        // Почта Кипра
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})CY$/iu', $track ) ) {
            
            $services[] = 'cypruspost';
        }
        // Почта Киргизстана
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})KG$/iu', $track ) ) {
            
            $services[] = 'kyrgyzpost';
        }
        // Почта Китая
        if( preg_match( '/^(C|R|U)([A-Z]{1})([0-9]{9})CN$/iu', $track ) ) {
            
            $services[] = 'chinapost';
        }
        // Почта Колумбии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})CO$/iu', $track ) ) {
            
            $services[] = 'colombiapost';
        }
        // Почта Латвии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})LV$/iu', $track ) ) {
            
            $services[] = 'latvijaspasts';
        }
        // Почта Ливана
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})LB$/iu', $track ) ) {
            
            $services[] = 'libanpost';
        }
        // Почта Литвы
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})LT$/iu', $track ) ) {
            
            $services[] = 'lietuvospastas';
        }
        // Почта Люксембурга
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})LU$/iu', $track ) ) {
            
            $services[] = 'luxembourgpost';
        }
        // Почта Мадагаскара
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MG$/iu', $track ) ) {
            
            $services[] = 'madagascarpost';
        }
        // Почта Малайзии
        if( preg_match( '/^(RQ|UD)([0-9]{9})MY$/iu', $track ) ) {
            
            $services[] = 'malaysiapost';
        }
        // Почта Мальты
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MT$/iu', $track ) ) {
            
            $services[] = 'maltapost';
        }
        // Почта Марокко
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MA$/iu', $track ) ) {
            
            $services[] = 'postemaroc';
        }
        // Почта Мексики
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MX$/iu', $track ) ) {

            $services[] = 'correosmx';
        }
        // Почта Молдавии
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})MD$/iu', $track ) ) {

            $services[] = 'postamd';
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
        // Почта Южной Кореи
        if( preg_match( '/^(R)([A-Z]{1})([0-9]{9})KR$/iu', $track ) ) {
            
            $services[] = 'koreapost';
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
               'israelpost' => 'Почта Израиля',
               'kazpochta'  => 'Почта Казахстана',
               'chinapost'  => 'Почта Китая',
               'latvijaspasts' => 'Почта Латвии',
               'malaysiapost' => 'Почта Малайзии',
               'postnl'     => 'Почта Нидерландов',
               'norwaypost' => 'Почта Норвегии',
               'ruspost'    => 'Почта России',
               'singaporepost' => 'Почта Сингапура',
               'usps'       => 'Почта США',
               'pttposta'   => 'Почта Турции',
               'ukrposhta'  => 'Почта Украины',
               'posti'      => 'Почта Финляндии',
               'ceskaposta' => 'Почта Чехии',
               'swedenposten' => 'Почта Швеции',
               'omniva'     => 'Почта Эстонии',
               'japanpost'  => 'Почта Японии',
               'sber'       => 'СберЛогистика',
               'cdek'       => 'СДЭК',
               // 1.0.7
               'correoargentino' => 'Correo Argentino',
               'mailamericas' => 'MailAmericas',
               'meestexpress' => 'Meest Express', 
               'postnorddk' => 'Postnord Denmark',
               'australiapost' => 'Почта Австралии',
               'austrianpost' => 'Почта Австрии',
               'azerpost'   => 'Почта Азербайджана',
               'albanianpost' => 'Почта Албании',
               'haypost'    => 'Почта Армении',
               'bgpost'     => 'Почта Болгарии',
               'postaba'    => 'Почта Боснии и Герцеговины',
               'brazilcorreios' => 'Почта Бразилии',
               'royalmail'  => 'Почта Великобритании',
               'magyarposta' => 'Почта Венгрии',
               'vnpost'     => 'Почта Вьетнама',
               'eltacourier' => 'Почта Греции',
               'georgianpost' => 'Почта Грузии',
               'indonesiaint' => 'Почта Индонезии',
               'anpost'     => 'Почта Ирландии',
               'islandicpost' => 'Почта Исландии',
               'correoses'  => 'Почта Испании',
               'posteitaliane' => 'Почта Италии',
               'canadapost' => 'Почта Канады',
               'cypruspost' => 'Почта Кипра',
               'kyrgyzpost' => 'Почта Киргизстана',
               'colombiapost' => 'Почта Колумбии',
               'libanpost'  => 'Почта Ливана',
               'lietuvospastas' => 'Почта Литвы',
               'luxembourgpost' => 'Почта Люксембурга',
               'madagascarpost' => 'Почта Мадагаскара',
               'maltapost'  => 'Почта Мальты',
               'postemaroc' => 'Почта Марокко',
               'correosmx'  => 'Почта Мексики',
               'postamd'    => 'Почта Молдавии',
               'koreapost'  => 'Почта Южной Кореи',
        ];
        
        return isset( $a[$code] ) ? $a[$code] : '';
    }
}
?>

<?php
/*!
  \brief Класс службы доставки
  
  @date 27.02.2023
  @version 1.0.0
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
        if( preg_match( '/^([0-9]{14})$/iu', $track ) ) {

            $services[] = 'ruspost';
        }
        // IML
        if( preg_match( '/^([0-9]{13})$/iu', $track ) ) {

            $services[] = 'iml';
        }
        // China EMS ePacket
        if( preg_match( '/^(LC|LK)([0-9]{9})CN$/iu', $track ) ) {
            
            $services[] = 'ems_cn';
        }
        // DPD
        if( preg_match( '/^RU00([0-9]{7})$/iu', $track ) ) {

            $services[] = 'dpd';
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

        return $services;
    }
    
    public static function getName( $code = '' ) {

        $a = [ 'cdek'     => 'СДЭК',
               'dhl'      => 'DHL',
               'ruspost'  => 'Почта россии',
               'dpd'      => 'DPD',
               'boxberry' => 'Boxberry',
               'ems_ru'   => 'EMS Россия',
               'ems_cn'   => 'China EMS ePacket',
               'cse'      => 'КСЭ',
               'pony'     => 'Pony Express',
               'iml'      => 'IML',
               'dellin'   => 'Деловые линии',
               'qwintry'  => 'Qwintry Logistics',
               'sber'     => 'СберЛогистика' ];
        
        return isset( $a[$code] ) ? $a[$code] : false;
    }
}
?>

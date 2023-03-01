# Delivery
**Класс определения службы доставки. Поддерживается определение 34 служб доставки:**

1. 4PX Express
2. Aliexpress Standard Shipping
3. BEL
4. Boxberry
5. China EMS ePacket
6. DHL Express
7. DHL Global Mail
8. DPD в России
9. FedEx
10. IML
11. J-NET
12. Joom Logistics
13. Pony Express
14. Qwintry Logistics
15. SunYou
16. YANWEN international express
17. Yun Express
18. Деловые линии
19. Европочта
20. СДЭК
21. КСЭ
22. Почта Гонконга
23. Почта Казахстана
24. Почта Китая
25. Почта Малайзии
26. Почта Нидерландов
27. Почта России
28. Почта Сингапура
29. Почта США
30. Почта Турции
31. Почта Финляндии
32. Почта Швеции
33. Почта Эстонии
34. СберЛогистика

## Пример использования:

**Получение кода службы доставки:**

> Delivery::getService( 'track number' );

**Получение информации о сервисе по его коду:**

> Delivery::getInfo( 'code' );

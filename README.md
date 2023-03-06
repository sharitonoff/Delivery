# Delivery
**Класс определения службы доставки. Поддерживается определение 38 служб доставки:**

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
22. Почта Беларуси
23. Почта Бельгии
24. Почта Германии
25. Почта Гонконга
26. Почта Казахстана
27. Почта Китая
28. Почта Латвии
29. Почта Малайзии
30. Почта Нидерландов
31. Почта России
32. Почта Сингапура
33. Почта США
34. Почта Турции
35. Почта Финляндии
36. Почта Швеции
37. Почта Эстонии
38. СберЛогистика

## Пример использования:

**Получение кода службы доставки:**

> Delivery::getService( 'track number' );

**Получение информации о сервисе по его коду:**

> Delivery::getInfo( 'code' );

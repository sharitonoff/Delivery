# Delivery
**Класс определения службы доставки. Поддерживается определение 90 служб доставки:**

1. 4PX Express
2. Aliexpress Standard Shipping
3. Amazon Logistics
4. BEL
5. Boxberry
6. China EMS ePacket
7. Correo Argentino
8. DHL Express
9. DHL Global Mail
10. DPD в России
11. FedEx
12. IML
13. J-NET
14. Joom Logistics
15. MailAmericas
16. Meest Express
17. Pony Express
18. Postnord Denmark
19. Qwintry Logistics
20. SunYou
21. YANWEN international express
22. Yun Express
23. Деловые линии
24. Европочта
25. СДЭК
26. КСЭ
27. Почта Австралии
28. Почта Австрии
29. Почта Азербайджана
30. Почта Албании
31. Почта Армении
32. Почта Беларуси
33. Почта Бельгии
34. Почта Болгарии
35. Почта Боснии и Герцеговины
36. Почта Бразилии
37. Почта Великобритании
38. Почта Венгрии
39. Почта Вьетнама
40. Почта Германии
41. Почта Гонконга
42. Почта Греции
43. Почта Грузии
44. Почта Израиля
45. Почта Индонезии
46. Почта Ирландии
47. Почта Исландии
48. Почта Испании
49. Почта Италии
50. Почта Казахстана
51. Почта Канады
52. Почта Кипра
53. Почта Киргизстана
54. Почта Китая
55. Почта Колумбии
56. Почта Латвии
57. Почта Ливана
58. Почта Литвы
59. Почта Люксембурга
60. Почта Мадагаскара
61. Почта Малайзии
62. Почта Мальты
63. Почта Марокко
64. Почта Мексики
65. Почта Молдавии
66. Почта Монголии
67. Почта Нидерландов
68. Почта Новой Зеландии
69. Почта Норвегии
70. Почта ОАЭ
71. Почта Омана
72. Почта Пакистана
73. Почта Польши
74. Почта Португалии
75. Почта России
76. Почта Румынии
77. Почта Сингапура
78. Почта Словакии
79. Почта Словении
80. Почта США
81. Почта Таджикистана
82. Почта Турции
83. Почта Украины
84. Почта Финляндии
85. Почта Чехии
86. Почта Швеции
87. Почта Эстонии
88. Почта Южной Кореи
89. Почта Японии
90. СберЛогистика

## Пример использования:

**Получение кода службы доставки:**

> \Haritonof\Delivery::getService( 'track number' );

**Получение информации о сервисе по его коду:**

> \Haritonof\Delivery::getInfo( 'code' );

<html>
<body>

<!-- Formularz używający metody GET -->
<form action="welcome.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>

<!-- 
Różnice między metodami GET i POST:

1. Widoczność danych:
   - GET: Dane przesyłane za pomocą metody GET są widoczne w pasku adresu przeglądarki jako część URL-a.
          Przykładowy URL po przesłaniu formularza może wyglądać tak: 
          welcome.php?name=Jan&email=jan@example.com.
   - POST: Dane przesyłane za pomocą metody POST nie są widoczne w pasku adresu przeglądarki. Przesyłane są 
           w ciele żądania HTTP, co czyni je mniej widocznymi i bardziej odpowiednimi do przesyłania 
           wrażliwych informacji.

2. Bezpieczeństwo:
   - GET: Mniej bezpieczna dla przesyłania wrażliwych danych (np. hasła), ponieważ dane są widoczne w URL-u 
          i mogą być zapisywane w logach serwera, historii przeglądarki, a także mogą być łatwo odczytane 
          przez osoby trzecie.
   - POST: Bezpieczniejsza niż GET do przesyłania wrażliwych informacji, ponieważ dane nie są widoczne w URL-u. 
           Jednak POST nie jest całkowicie bezpieczny i wrażliwe dane powinny być zawsze przesyłane przez 
           bezpieczne połączenie (HTTPS).

3. Długość danych:
   - GET: Ma ograniczenie długości danych, które można przesłać (URL ma limit długości, który różni się 
          w zależności od przeglądarki i serwera, ale zazwyczaj wynosi kilka tysięcy znaków).
   - POST: Nie ma praktycznych ograniczeń co do ilości danych, które można przesłać (teoretycznie ograniczone 
           jedynie przez konfigurację serwera i pamięć).

4. Przechowywanie danych:
   - GET: Dane mogą być łatwo przechowywane w zakładkach (bookmarks) i historii przeglądarki.
   - POST: Dane nie są przechowywane w zakładkach ani w historii przeglądarki.

5. Idempotentność:
   - GET: Metoda GET jest idempotentna, co oznacza, że wielokrotne wywołanie tego samego żądania GET nie 
          powinno powodować zmian na serwerze. Służy głównie do pobierania danych.
   - POST: Metoda POST nie jest idempotentna, co oznacza, że wielokrotne wywołanie tego samego żądania POST 
           może powodować zmiany na serwerze (np. dodanie nowego wpisu do bazy danych za każdym razem).
-->
<!DOCTYPE html>
<html>
<head>
    <title>Wynik Formularza</title>
</head>
<body>

<h2>Wynik Formularza</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = htmlspecialchars($_POST['imie']);
    $nazwisko = htmlspecialchars($_POST['nazwisko']);
    $ulica = htmlspecialchars($_POST['ulica']);
    $nr_domu = htmlspecialchars($_POST['nr_domu']);
    $nr_mieszkania = htmlspecialchars($_POST['nr_mieszkania']);
    $miasto = htmlspecialchars($_POST['miasto']);
    $kod_pocztowy = htmlspecialchars($_POST['kod_pocztowy']);
    $rok_urodzenia = intval($_POST['rok_urodzenia']);

    // Obliczanie wieku
    $current_year = date("Y");
    $wiek = $current_year - $rok_urodzenia;

    // Wyświetlanie danych
    echo "<p>Imię: $imie</p>";
    echo "<p>Nazwisko: $nazwisko</p>";
    echo "<p>Ulica: $ulica</p>";
    echo "<p>Nr domu: $nr_domu</p>";
    echo "<p>Nr mieszkania: $nr_mieszkania</p>";
    echo "<p>Miasto: $miasto</p>";
    echo "<p>Kod pocztowy: $kod_pocztowy</p>";
    echo "<p>Rok urodzenia: $rok_urodzenia</p>";
    echo "<p>Wiek: $wiek lata</p>";
}
?>

</body>
</html>

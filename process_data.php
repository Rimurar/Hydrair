<?php
// Daten aus dem POST-Request lesen
$weightLoss = $_POST['weightLoss'];
$CO2 = $_POST['CO2'];

// Hier können Sie die Daten speichern, in eine Datenbank eintragen oder anderweitig verarbeiten

// Beispiel: Antwort senden
echo "Daten empfangen: Weight Loss = $weightLoss, CO2 = $CO2";
?>
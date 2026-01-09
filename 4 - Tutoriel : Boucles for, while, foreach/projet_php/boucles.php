<?php
#Boucle for
for ($i = 1; $i <= 10; $i++) {
    echo "Nombre : $i <br>";
}
echo "<br>";

#Boucle while
$j = 1;
while ($j <= 5) {
    echo "Itération : $j <br>";
    $j++;
}

echo "<br>";
# Boucle foreach
$animaux = ["Chat", "Chien", "Lapin"];
foreach ($animaux as $animal) {
    echo "Animal : $animal <br>";
}

echo "<br>";
#boucle for break et continue
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) continue; // saute le 5
    if ($i == 8) break;    // arrête à 8
    echo "Valeur : $i <br>";
}

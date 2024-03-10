<?php
$count = 20;

echo "<br>Looping1: <br>";
for ($i=0; $i < $count; $i++) {
    if ($i !== 0 && $i % 2 === 0) {
        echo "$i - i love PHP <br>";
    }
}

echo "<br>Looping2: <br>";
for ($i=$count; $i > 0; $i--) {
    if ($i !== 0 && $i % 2 === 0) {
        echo "$i - i love PHP <br>";
    }
}
function tentukan_nilai(int $value): string {
    if ($value >= 85 && $value <= 100) {
        return 'sangat baik';
    }

    if ($value >= 70 && $value < 85) {
        return 'baik';
    }

    if ($value >= 60 && $value < 70) {
        return 'cukup';
    }

    return 'kurang';
}

echo tentukan_nilai(98) . '<br>';
echo tentukan_nilai(76) . '<br>'; 
echo tentukan_nilai(67) . '<br>';
echo tentukan_nilai(43) . '<br>'; 
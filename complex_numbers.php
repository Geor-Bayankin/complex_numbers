<html>
<form action="">
    <p> Введите действительую часть комплексного числа "a" </p>
    <input type="number" name="a">
    <p> Введите мнимую часть комплексного числа "a" </p>
    <input type="number" name="b">
    <p> Введите действительую часть комплексного числа "б" </p>
    <input type="number" name="c">
    <p> Введите мнимую часть комплексного числа "б" </p>
    <input type="number" name="d">
    <input type="submit">
</form>
</html>
<?php
$a_Real = (int)$_GET['a'];
$a_Mnim = (int)$_GET['b'];
$b_Real = (int)$_GET['c'];
$b_Mnim = (int)$_GET['d'];
echo 'Ваше комплексное число "a" = ', $a_Real,' + (', $a_Mnim, ')i', '<br/>';
echo 'Ваше комплексное число "б" = ',$b_Real, ' + (', $b_Mnim, ')i', '<br/>';
$summA = $a_Real + $b_Real;
$summB = $a_Mnim + $b_Mnim;
echo 'Результат сложения:  ', $summA,' + (', $summB, ')i', '<br/>';
$raznA = $a_Real - $b_Real;
$raznB = $a_Mnim - $b_Mnim;
echo 'Результат вычитания:  ', $raznA,' + (', $raznB, ')i', '<br/>';
$ymnA = $a_Real * $b_Real;
$ymnB = $a_Mnim * $b_Mnim;
echo 'Результат умножения:  ', $ymnA,' + (', $ymnB, ')i', '<br/>';
$delA = $a_Real / $b_Real;
$delB = $a_Mnim / $b_Mnim;
echo 'Результат деления:  ', $delA,' + (', $delB, ')i', '<br/>';
?>


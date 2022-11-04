<?php
//declarando variáveis
$anon = 1989;
$anoa = 2022;
$idade = $anoa - $anon;

echo("<h1>A idade do pião é: ".$idade." </h1>");

$times = array();
$times[0] = "Palmeiras";
$times[1] = "Internacional";
$times[2] = "Flamengo";

echo("<br>");
print_r($times);
foreach ($times as $time) {
    echo($time."<br>");
}
?>
<table>
    <th>id</th>
    <th>nome</th>
    <?php foreach ($times as $id => $nome) { ?>
        <tr>
            <td><?php echo($id = 1);?></td>
            <td><?php echo($nome);?></td>
        </tr>
    <?php } ?>
</table>
    

   
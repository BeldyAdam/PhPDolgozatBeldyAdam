<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Béldy Ádám</title>
</head>
<body>
    <style>
        table, td, th {  
        border: 1px solid black;
        text-align: center;
        }

        table {
        border-collapse: collapse;
        width: 100%;
        max-width: 700px;
        margin: auto;
        }

        th, td {
        padding: 15px;
        }

        th{
            border: 2px solid black;
        }
    </style>
<table>
        <tr>
            <th>Név</th>
            <th>Klub neve</th>
            <th>Maximális méret</th>
        </tr>
        <?php
        $nevek = array("Nagy Tibor", "Szabó Klára", "Kovács Tóbiás", "Hofi Géza");
        $klubnevek = array("Golf", "Póker", "Társas", "Gémer");
        $maxMeret = array();
        for ($i = 0; $i < 5; $i++) {
            $maxMeret[] = rand(10, 100);
        }

        for ($i = 0; $i < count($nevek); $i++) {
            echo "<tr>";
            echo "<td>" . $nevek[$i] . "</td>";
            echo "<td>" . $klubnevek[$i] . "</td>";
            echo "<td>" . $maxMeret[$i] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
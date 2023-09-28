<?php 
$Nom = "Cherif" ;
$Pre = "Nidhal" ;
$info = $Nom." ".$Pre;
echo "<table border=1>
        <tr>
            <td><b>Nom</b></td>
            <td><b>Prénom</b></td>
        </tr>
        <tr>
            <td>$Nom</td>
            <td>$Pre</td>
        </tr>
    </table>
    <script>
        alert('$info');
    </script>";
?>
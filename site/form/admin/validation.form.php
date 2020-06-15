<?php
    $S=$_SESSION['unchecked'];
?>    
    <h2>Profils à vérifier</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>N°Adherant</throw>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Rue</th>
            <th>Code Postal</th>
            <th>Ville</th>
            <th>Mail</th>
            <th>Téléphone</th>
            <th>Statut</th>
        </tr>

<?php
    for($i=0;$i<count($S);$i++)
    {
        echo '<tr><td>'.$S[$i]['ID'].'</td><td>'.$S[$i]['refcode'].'</td><td>'.$S[$i]['name'].'</td><td>'.$S[$i]['firstname'].'</td><td>'.$S[$i]['street'].'</td><td>'.$S[$i]['zipcode'].'</td><td>'.$S[$i]['city'].'</td><td>'.$S[$i]['mail'].'</td><td>'.$S[$i]['phone'].'</td><td>'.$S[$i]['statut'].'</td></tr>';
    }
?>
    </table>

   
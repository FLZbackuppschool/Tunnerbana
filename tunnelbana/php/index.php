<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Tunnelbana</title>
</head>

<body>
    <div>
        <form method="post" action="#">
            <label for="from_User_station">From which station you want to go from</label>
            <select name="from_User_station" id="from_User_station">
            <!--en form id som innehåller stationer från users input  -->
                <option value="">--- Choose a station ---</option>
                <option value="">Hagsätra</option>
                <option value="">Rågsved</option>
                <option value="">Högdalen</option>
                <option value="">Bandhagen</option>
                <option value="">Stureby</option>
                <option value="">Svedmyra</option>
                <option value="">Sockenplan</option>
                <option value="">Enskede Gård</option>
                <option value="">Globen</option>
                <option value="">Gullmarsplan</option>
                <option value="">Skanstull</option>
                <option value="">Medborgarplatsen</option>
                <option value="">Slussen</option>
                <option value="">Gamla Stan</option>
                <option value="">T-Centralen</option>
                <option value="">Hötorget</option>
                <option value="">Rådmansgatan</option>
                <option value="">Odenplan</option>
                <option value="">Fridhemsplan</option>
                <option value="">Thorildsplan</option>
                <option value="">Kristineberg</option>
                <option value="">Alvik</option>
                <option value="">Stora Mossen</option>
                <option value="">Abrahamsberg</option>
                <option value="">Brommaplan</option>
                <option value="">Åkeshov</option>
                <option value="">Ängbyplan</option>
                <option value="">Islandstorget</option>
                <option value="">Blackeberg</option>
                <option value="">Råcksta</option>
                <option value="">Vällingby</option>
                <option value="">Johannelund</option>
                <option value="">Hässelby Gård</option>
                <option value="">Hässelby Strand</option>
                
            </select>


            <label for="to_User_station">Which station are you going to</label>
            <select name="to_User_station" id="to_User_station">
                 <!--en form id som innehåller stationer till från  users input  -->
                <option value="">--- Choose a station ---</option>
                <option value="">Hagsätra</option>
                <option value="">Rågsved</option>
                <option value="">Högdalen</option>
                <option value="">Bandhagen</option>
                <option value="">Stureby</option>
                <option value="">Svedmyra</option>
                <option value="">Sockenplan</option>
                <option value="">Enskede Gård</option>
                <option value="">Globen</option>
                <option value="">Gullmarsplan</option>
                <option value="">Skanstull</option>
                <option value="">Medborgarplatsen</option>
                <option value="">Slussen</option>
                <option value="">Gamla Stan</option>
                <option value="">T-Centralen</option>
                <option value="">Hötorget</option>
                <option value="">Rådmansgatan</option>
                <option value="">Odenplan</option>
                <option value="">Fridhemsplan</option>
                <option value="">Thorildsplan</option>
                <option value="">Kristineberg</option>
                <option value="">Alvik</option>
                <option value="">Stora Mossen</option>
                <option value="">Abrahamsberg</option>
                <option value="">Brommaplan</option>
                <option value="">Åkeshov</option>
                <option value="">Ängbyplan</option>
                <option value="">Islandstorget</option>
                <option value="">Blackeberg</option>
                <option value="">Råcksta</option>
                <option value="">Vällingby</option>
                <option value="">Johannelund</option>
                <option value="">Hässelby Gård</option>
                <option value="">Hässelby Strand</option>
            </select>


            <input type="submit" value="Submit your choice" method="post">
            <!--button för  submita-->
        </form>
    </div>
</body>
</html>




  <?php 

    $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
        'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];

            $Indexend = array_search($_POST['to_User_station'], $linje19);
            $IndexStart = array_search($_POST['from_User_station'], $linje19);
            $Time = abs($Indexend - $IndexStart) * 3; // Time in minutes
    
    //beräknar restiden baserat på den absoluta skillnaden mellan slutstationsindex och startstationsindex, multiplicerat med 3 (antar 3 minuters restid mellan varje station).

            $currentTimestamp = time(); // 
            $arrivalTime = strtotime("+$Time minutes", $currentTimestamp);
    
            echo "Current time: " . date('H:i', $currentTimestamp) . "<br>";
            echo "Expected arrival time: " . date('H:i', $arrivalTime); 
            //den här biten skriver ut den formaterade aktuella tiden och förväntad ankomsttid med hjälp av datumfunktionen i formatet 'H:i' (timmar och minuter).
    ?>
    

</body>


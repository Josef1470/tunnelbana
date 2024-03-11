<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>

<div id="form">
    <form action="index.php" method="post">
        <label for="stationer-from">Från: </label>
        <select name="from">
        <?php
        $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
        'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];

        foreach ($linje19 as $option) {
            echo "<option value='$option'>$option</option>";        
        }
        ?>
        </select><br>



        <label for="stationer-to">Till: </label>
        <select name="to">
        <?php
        $linje19 = ['Hagsätra', 'Rågsved', 'Högdalen', 'Bandhagen', 'Stureby', 'Svedmyra', 'Sockenplan', 'Enskede Gård', 'Globen', 'Gullmarsplan', 'Skanstull', 'Medborgarplatsen', 'Slussen', 'Gamla Stan', 'T-Centralen', 'Hötorget', 'Rådmansgatan',
        'Odenplan', 'S:T Eriksplan', 'Fridhemsplan', 'Thorildsplan', 'Kristineberg', 'Alvik', 'Stora Mossen', 'Abrahamsberg', 'Brommaplan', 'Åkeshov', 'Ängbyplan', 'Islandstorget', 'Blackeberg', 'Råcksta', 'Vällingby', 'Johannelund', 'Hässelby Gård', 'Hässelby Strand'];

        foreach ($linje19 as $option) {
            echo "<option value='$option'>$option</option>";   
        }

        ?>
        </select>

        <?php
        $value_from = $_POST['from'];
        $value_to = $_POST['to'];
        
        echo "<br>";

        $index_from = array_search($value_from, $linje19);
        $index_to = array_search($value_to, $linje19);
        $stations_sum = abs($index_to - $index_from);

        if (isset($_POST['submit'])) {
            echo ("Det är $stations_sum stationer mellan $value_from och $value_to");
            echo "<br>";
            echo "Det tar ". ($stations_sum * 3). " minuter att åka från $value_from till $value_to (3 minuter per station)";
        }

        echo "<br>";

        $time = localtime();

        echo "<br>";

        $arrival = (($time[1]) + ($stations_sum * 3));
        echo ("Klockan är $time[2]:$time[1], du kommer att vara framme $arrival");
        ?>

        <br>
        <button type="submit" name="submit">submit</button>
    </form>
</div>
    
</body>
</html>
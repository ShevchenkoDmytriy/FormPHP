<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $music = isset($_POST["music"]) ? $_POST["music"] : [];
    $season = isset($_POST["season"]) ? $_POST["season"] : [];
    $data = [
        "music" => $music,
        "season" => $season,
    ];
    $existingData = file_exists("survey_results.json") ? json_decode(file_get_contents("survey_results.json"), true) : [];
    $existingData[] = $data;
    file_put_contents("survey_results.json", json_encode($existingData));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Результати опитування</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Результати опитування</h1>
    <?php
    $results = file_exists("survey_results.json") ? json_decode(file_get_contents("survey_results.json"), true) : [];
    if (!empty($results)) {
        echo "<table>";
        echo "<tr><th>Музика</th><th>Время года</th></tr>";
        foreach ($results as $result) {
            echo "<tr>";
            echo "<td>" . implode(", ", $result["music"]) . "</td>";
            echo "<td>" . implode(", ", $result["season"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>На жаль, результатів поки що немає.</p>";
    }
    ?>
</body>
</html>


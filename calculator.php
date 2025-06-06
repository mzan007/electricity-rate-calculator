<!DOCTYPE html>
<html>
<head>
    <title>Electricity Rate Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center mb-4">Electricity Rate Calculator</h2>

    <form method="POST" class="border p-4 rounded bg-light">
        <div class="form-group">
            <label for="voltage">Voltage (V)</label>
            <input type="number" name="voltage" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="current">Current (A)</label>
            <input type="number" name="current" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="rate">Current Rate (cents/kWh)</label>
            <input type="number" name="rate" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    <?php
    function calculateElectricity($voltage, $current, $rate) {
        $powerWh = $voltage * $current;
        $energyPerHour = $powerWh / 1000; // in kWh
        $energyPerDay = $energyPerHour * 24;
        $totalPerHour = $energyPerHour * ($rate / 100); // convert cents to RM
        $totalPerDay = $energyPerDay * ($rate / 100);

        return [
            'power' => $powerWh,
            'energyHour' => $energyPerHour,
            'energyDay' => $energyPerDay,
            'totalHour' => $totalPerHour,
            'totalDay' => $totalPerDay
        ];
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $voltage = $_POST['voltage'];
        $current = $_POST['current'];
        $rate = $_POST['rate'];

        $result = calculateElectricity($voltage, $current, $rate);

        echo "<div class='mt-4 p-4 border bg-white rounded'>";
        echo "<h4>Results:</h4>";
        echo "<p><strong>Power:</strong> " . $result['power'] . " Wh</p>";
        echo "<p><strong>Energy per Hour:</strong> " . number_format($result['energyHour'], 4) . " kWh</p>";
        echo "<p><strong>Energy per Day:</strong> " . number_format($result['energyDay'], 4) . " kWh</p>";
        echo "<p><strong>Total Charge per Hour:</strong> RM " . number_format($result['totalHour'], 4) . "</p>";
        echo "<p><strong>Total Charge per Day:</strong> RM " . number_format($result['totalDay'], 4) . "</p>";
        echo "</div>";
    }
    ?>
</div>
</body>
</html>

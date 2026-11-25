<?php

$grade = "";
$avg = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $bangla = $_POST["bangla"] ?? "";
    $english = $_POST["english"] ?? "";
    $math = $_POST["math"] ?? "";

    if (
        $bangla === "" ||
        $english === "" ||
        $math === "" ||
        !is_numeric($bangla) ||
        !is_numeric($english) ||
        !is_numeric($math)
    ) {
        $error = "Please enter valid marks for all subjects.";
    } else {

        $bangla = (float) $bangla;
        $english = (float) $english;
        $math = (float) $math;

        if (
            $bangla < 0 || $bangla > 100 ||
            $english < 0 || $english > 100 ||
            $math < 0 || $math > 100
        ) {
            $error = "Marks must be between 0 and 100.";
        } else {

            // Calculate average
            $avg = ($bangla + $english + $math) / 3;

            // Grade calculation using PHP switch
            switch (true) {

                case $avg < 0 || $avg > 100:
                    $grade = "Invalid average mark";
                    break;

                case $avg >= 80:
                    $grade = "A+";
                    break;

                case $avg >= 70:
                    $grade = "A";
                    break;

                case $avg >= 60:
                    $grade = "A-";
                    break;

                case $avg >= 50:
                    $grade = "B";
                    break;

                case $avg >= 33:
                    $grade = "C";
                    break;

                default:
                    $grade = "F";
            }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP Grade Calculator</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #667eea, #764ba2);
            padding: 20px;
        }

        .container {
            width: 100%;
            max-width: 420px;
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .input-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #444;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input:focus {
            outline: none;
            border-color: #667eea;
        }

        button {
            width: 100%;
            padding: 13px;
            background: #667eea;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #5365d5;
        }

        .result {
            margin-top: 25px;
            padding: 20px;
            background: #f4f5ff;
            border-radius: 10px;
            text-align: center;
        }

        .result h2 {
            color: #333;
            margin-bottom: 15px;
        }

        .grade {
            font-size: 35px;
            font-weight: bold;
            color: #667eea;
            margin: 10px 0;
        }

        .average {
            font-size: 18px;
            color: #444;
        }

        .error {
            background: #fee2e2;
            color: #dc2626;
            padding: 12px;
            border-radius: 8px;
            margin-top: 15px;
            text-align: center;
        }

        .success {
            color: #16a34a;
            margin-top: 10px;
        }

        .failed {
            color: #dc2626;
            margin-top: 10px;
        }
    </style>

</head>

<body>

    <div class="container">

        <h1>Grade Calculator</h1>

        <form method="POST" action="">

            <div class="input-group">
                <label>Bangla Marks</label>
                <input type="number" name="bangla" min="0" max="100" step="any" placeholder="Enter Bangla marks"
                    value="<?= htmlspecialchars($_POST['bangla'] ?? '') ?>" required>
            </div>

            <div class="input-group">
                <label>English Marks</label>
                <input type="number" name="english" min="0" max="100" step="any" placeholder="Enter English marks"
                    value="<?= htmlspecialchars($_POST['english'] ?? '') ?>" required>
            </div>

            <div class="input-group">
                <label>Mathematics Marks</label>
                <input type="number" name="math" min="0" max="100" step="any" placeholder="Enter Mathematics marks"
                    value="<?= htmlspecialchars($_POST['math'] ?? '') ?>" required>
            </div>

            <button type="submit">
                Calculate Grade
            </button>

        </form>

        <?php if ($error): ?>

            <div class="error">
                <?= htmlspecialchars($error) ?>
            </div>

        <?php endif; ?>

        <?php if ($grade !== ""): ?>

            <div class="result">

                <h2>Your Result</h2>

                <p>Letter Grade</p>

                <div class="grade">
                    <?= htmlspecialchars($grade) ?>
                </div>

                <p class="average">
                    Your Average Marks:
                    <?= number_format($avg, 2) ?>
                </p>

                <?php if ($grade == "F"): ?>

                    <p class="failed">
                        Sorry! You have failed.
                    </p>

                <?php else: ?>

                    <p class="success">
                        Congratulations! You passed.
                    </p>

                <?php endif; ?>

            </div>

        <?php endif; ?>

    </div>

</body>

</html>
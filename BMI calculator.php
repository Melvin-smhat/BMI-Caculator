<?php
$height = "";
$weight = "";
$BMI = "";
$advise ="";
$state = "";
if (isset($_POST["calculate"])) {
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $BMI = ($height * $height) / ($weight);

    if ($BMI < 18.5) {
        $state="You are Underweight and your BMI is $BMI";
        $advise ="Eat Solid Food";
    } elseif (($BMI >= 18.5) && ($BMI <= 24.9)) {
        $state=" Normal";
        $advise ="Make sure you eat fruit daily";
    } elseif (($BMI >= 25) && ($BMI <= 29.9)) {
        $state="You are Overweight and your BMI is $BMI";
        $advise ="Eat Less and Exercise more";
    } elseif (($BMI >= 30)) {
        $state="You are Obese and your BMI is $BMI";
        $advise ="Stop eating heavy food and make sure you exercise more";
    } else {
        $state="Invalid Data Input";
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin-top: 50px;
            border-color: gold;
        }

        big {
            color: white;
        }

        .first-row {
            color: white;
            background-color: #ff7f50;
        }

        input {
            border-radius: 3px;
        }

        .second-row {
            background-color: #6495ed;
            text-align: center;
            color: cyan;
        }

        button {
            border-radius: 3px;
        }

        button:hover {
            background-color: #6495ed;
            color: white;
            transition: 0.5s;
            border-radius: 5px;
        }

        h3 {
            text-align: center;
            color: maroon;
        }
    </style>
</head>

<body>
    <form action="BMI calculator.php" method="POST">
        <h3>BMI Calculator</h3>
        <table border="1" height="500" width="700" align="center" cellspacing="0" cellpadding="0">
            <tr height="100">
                <td width="250" class="first-row">
                    <big>&nbsp;&nbsp;Height:</big>
                    <input type="textfield" size="15" required name="height" placeholder="Input height" value="<?php echo ($height); ?>">
                </td>
                <td align="center" bgcolor="crimson"><big><big>State</big></big></td>
            </tr>

            <tr height="100">
                <td class="first-row">
                    <big>&nbsp;&nbsp;Weight:</big>
                    <input type="textfield" size="15" required name="weight" placeholder="Input weight" value="<?php echo ($weight); ?>">
                </td>
                <td class="second-row" height="150"><?php echo ($state); ?></td>
            </tr>

            <tr>
                <td class="first-row">
                    <big>&nbsp;&nbsp;Output:</big>
                    <input type="textfield" size="15"  placeholder="Displayed BMI" value="<?php echo ($BMI); ?>" name="BMI">
                </td>

                <td align="center" bgcolor="crimson" height="100">
                    <big>Advise</big>
                </td>
            </tr>

            <tr>
                <td align="center" class="first-row">
                    <button name="calculate" >Calculate</button>
                    <button name="Reset" >Reset</button></td>
                <td class="second-row"><?php echo ($advise); ?></td>
            </tr>
        </table>
    </form>
</body>

</html>
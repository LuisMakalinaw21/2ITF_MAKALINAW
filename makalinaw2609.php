<!DOCTYPE html>
<html>

<head>
    <title> TAXXY: A TAX CALCULATOR  </title>
    <style type="text/css">
        h1 {
            text-align: center;
            font-size: 40px;
        }

        body {
            font-family: Optima (sans-serif);
            color: #black;
            background: linear-gradient(to right, #A2C3A4 -61%, #869D96 100%);
            font-size: 25px;
            text-align: center;
        }

        
        </style>
</head>

<body>

    <?php

    if (isset($_POST['submit'])) {
        $salary = $_POST['salary'];
        $type = $_POST['type'];
       
    
            if ($_POST['type'] == "bi-Monthly") {
                $bisalary = $salary  * 2;
                $biannual  = $bisalary *12;
                
                if ($biannual <= 250000){
                    $bisalary = 0;
                    $bimonthlytax = 0;
                }
                else if ($biannual<= 400000 && $biannual > 250000) {
                    $biannualtax = ($biannual-250000)*.2;
                    $bimonthlytax = $biannualtax/12;
                }
                else if ($biannual <= 800000 && $biannual > 400000) {
                    $biannualtax = 30000+($biannual-400000)*.25;
                    $bimonthlytax = $biannualtax/12;
                }
                else if ($biannual <= 2000000 && $biannual > 800000) {
                    $biannualtax = 130000+($biannual-800000)*.3;
                    $bimonthlytax = $biannualtax/12;
                }
                else if ($biannual <= 8000000 && $biannual > 2000000) {
                    $biannualtax = 490000+($biannual-2000000)*.32;
                    $bimonthlytax = $biannualtax/12;
                }
                else if ($biannual > 8000000) {
                    $biannualtax = 2410000+($biannual-8000000)*.35;
                    $bimonthlytax = $biannualtax/12;
                }  

                echo "Annual Salary: " . $biannual;
                echo "</br>";
                echo "Est. Annual Tax: " . $biannualtax;
                echo "</br>";
                echo "Est. Monthly Tax: " . $bimonthlytax;
                echo "</br>";

            } else if ($_POST['type'] == "monthly") {
                $annual = $salary *12;

                if ($annual <= 250000){
                    $salary = 0;
                    $monthlytax = 0;
                }
                else if ($annual<= 400000 && $annual > 250000) {
                    $annualtax = ($annual-250000)*.2;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual <= 800000 && $annual > 400000) {
                    $annualtax = 30000+($annual-400000)*.25;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual <= 2000000 && $annual > 800000) {
                    $annualtax = 130000+($annual-800000)*.3;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual <= 8000000 && $annual > 2000000) {
                    $annualtax = 490000+($annual-2000000)*.32;
                    $monthlytax = $annualtax/12;
                }
                else if ($annual > 8000000) {
                    $annualtax = 2410000+($annual-8000000)*.35;
                    $monthlytax = $annualtax/12;
                }  

                echo "Annual Salary: " . $annual;
                echo "</br>";
                echo "Est. Annual Tax: " . $annualtax;
                echo "</br>";
                echo "Est. Monthly Tax: " . $monthlytax;
                echo "</br>";

               
            }
        
    }     
    ?>

    <center>
        <h1>TAXXY: A TAX CALCULATOR </h1>
        <form method="post">
        <center> <img src="https://i.pinimg.com/736x/28/6c/9a/286c9a2c8e59f19a40386e944ea1c0e9.jpg" ; width="700" height="500" ; border="6" id="img"> </center>
            <p>Salary:
                <input type="text" id="salary" name="salary" size="30">
            </p>

            <p>Type:
                <input type="Radio" id="bi-monthly" name="type" value="bi-Monthly">
                <label for="bi-monthly">Bi-Monthly</label>
                <input type="Radio" id="monthly" name="type" value="monthly">
                <label for="monthly">Monthly</label>
            </p>

            <input type="submit" value="Compute" name="submit">
            


        </form>
        </table>
</body>

</html>
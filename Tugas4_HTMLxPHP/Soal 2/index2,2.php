<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Juan Tuandali 2172034">
    <title>Hasil soal 2</title>
</head>
<body>
    
    <table border="1" align="center">

         <tr>
            <td colspan="2" align="center" bgcolor="#9ACD32">
                Kalkuator
            </td>
        </tr>
        <tr>
            <td bgcolor="green">Angka pertama</td>
            <td align="center"> <?php echo $_GET["angka1"]; ?> </td>
        </tr>
        <tr>
            <td bgcolor="green">Angka kedua</td>
            <td align="center"> <?php echo $_GET["angka2"]; ?> </td>
        </tr>
        <tr>
            <tr>
            <td bgcolor="green">Operator</td>
            <td align="center"> <?php echo $_GET["operator"]; ?> </td>
        </tr>
        <tr bgcolor="#9ACD32">
                <td colspan="3" align="center"><b> 
                    Hasil = <?php 
        $Angkapertama = $_GET["angka1"];
        $Angkakedua = $_GET["angka2"];
        $Operator = $_GET["operator"]; 
        if ($Operator =="+") {
            echo $Angkapertama+$Angkakedua;
        } 
        else if ($Operator =="-") {
            echo $Angkapertama-$Angkakedua;
        }
        else if ($Operator =="*") {
            echo $Angkapertama*$Angkakedua;
        }
        else if ($Operator == "/") {
            echo $Angkapertama/$Angkakedua;
        }
        ?></b>

    </table>

            

</body>
</html>

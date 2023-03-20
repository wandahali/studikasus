<form action="" method="post">
    <table>
        <tr>
            <td>Angka pertama: </td>
            <td><input type="number" name="a"></td>
        </tr>
        <tr>
            <td>Angka kedua: </td>
            <td><input type="number" name="b"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name ="proses"></td>
        </tr>
    </table>
</form>


<?php
   $a = $_POST['a'];
   $b= $_POST['b'];
    
   if($a > $b){
    echo "Nilai terbesar adalah: ". $a;
   } else{
    echo "Nilai terbesar adalah: ". $b;
   }
?>

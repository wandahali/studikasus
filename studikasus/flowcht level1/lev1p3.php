<form action="" method="post">
    <table>
        <tr>
            <td>Angka pertama: </td>
            <td><input type="number" name="numer1"></td>
        </tr>
        <tr>
            <td>Angka kedua: </td>
            <td><input type="number" name="numer2"></td>
        </tr>
        <tr>
            <td>Angka ketiga: </td>
            <td><input type="number" name="numer3"></td>
        </tr>
        <tr>
            <td>Angka keempat: </td>
            <td><input type="number" name="numer4"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Simpan" name ="proses"></td>
        </tr>
    </table>
</form>


<?php
   $numer1 = $_POST['numer1'];
   $numer2 = $_POST['numer2'];
   $numer3 = $_POST['numer3'];
   $numer4 = $_POST['numer4'];
    
    
   if($angka1 > $angka2 && $angka1 > $angka3 && $angka1 > $angka4){
    echo "Nilai terbesar adalah: ". $angka1;
   } elseif($angka2 > $angka3 && $angka2 > $angka4){
    echo "Nilai terbesar adalah: ". $angka2;
   } elseif($angka3 > $angka4){
    echo "Nilai terbesar adalah: ". $angka3;
   }else{
    echo "Nilai terbesar adalah: ". $angka4;
   }
?>
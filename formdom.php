<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<center><h1> Kalkulator DOM </h1><br></center>
<body>
    <form action="" name="formku">
        <input type="text" placheholder="ANGKA 1" name="angka1">
        <input type="text" placheholder="ANGKA 2" onchange="jml()" name="angka2">
        <input type="text" placheholder="PENJUMLAHAN" name="penjumlahan">
        <input type="text" placheholder="PENGURANGAN" name="pengurangan">
        <input type="text" placheholder="PERKALIAN" name="perkalian">
        <input type="text" placheholder="PEMBAGIAN" name="pembagian">
    </form>
    <script>
        function jml () {
            var ang1=document.formku.angka1.value;
            var ang2=document.formku.angka2.value;

            ang1=parseInt(ang1);
            ang2=parseInt(ang2);

            document.formku.penjumlahan.value=ang1+ang2;
            document.formku.pengurangan.value=ang1-ang2;
            document.formku.perkalian.value=ang1*ang2;
            document.formku.pembagian.value=ang1/ang2;
        }
    </script><br><br>
    
</body>
</html>
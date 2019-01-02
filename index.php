<!DOCTYPE html>
<html>
<head>
	<title>SMPN 6 SEMARANG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="js/jquery-3.3.1.min.js"></script>
</head>
<body>
<!--<div class="warpper">
	<div class="header">
	<img src="header.jpg" height="200px" width="100%">	
	</div>
	<nav>
	<ul>
		<li><a href="index.html">home</a></li>
		<li><a href="profil sekolah.html">Profil Sekolah</a></li>
		<li><a href="daftar guru.html">Daftar Guru</a></li>
		<li><a href="berita.html">Berita</a></li>
		<li><a href="kegiatan siswa.html">Kegiatan Siswa</a></li>
	</ul>
	</nav>-->
	
	<div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour"></span></a></h1>
          <h2></h2>
        </div>
      </div>
		<div class="menu">
			<ul>
			 <li><a href="index.php">HOME</a></li>
			 <li class="dropdown">
			 <a href="javascript:void(0)" class="dropbtn">Profil Sekolah</a>
			 <none>
			   <div class="dropdown-content">
			   <a class="linkpindah" href="visi.php">Visi Misi</a>
			    <a class="linkpindah" href="profil.php">Profil</a>
			 </div>  
			  <li><a class="linkpindah" href="daftar guru.php">Sejarah Sekolah</a></li>
			  <li><a class="linkpindah" href="berita.php">Berita</a></li>
			  <li><a class="linkpindah" href="kegiatan siswa.php">Info PPDB</a></li>
			</ul>
		</div>
		</div>		
	<div class="content">
		<div class="sidebar">
		<img src="visi.jpg" height="500px" width="100%">
		<center><h1> Kalkulator DOM </h1><br>

    <form action="" name="formku">
        <input type="text" placeholder="ANGKA 1" name="angka1">
        <input type="text" placeholder="ANGKA 2" onchange="jml()" name="angka2">
        <input type="text" placeholder="PENJUMLAHAN" name="penjumlahan">
        <input type="text" placeholder="PENGURANGAN" name="pengurangan">
        <input type="text" placeholder="PERKALIAN" name="perkalian">
        <input type="text" placeholder="PEMBAGIAN" name="pembagian">
    </form></center>
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
		</div>
		<div class="main">
			<img src="kepala.jpg" height="180px" width="30%" class="gambardepan">
			<p align="Justify"><br>
			&emsp;Assalamu'alaikum wr. wb.<br>
			&emsp;Selamat Datang di Website SMP Negeri 6 Semarang yang &emsp;kami beri 
			alamat http://www.smp6semarang.sch.id/, Syukur &emsp;Alhamdulillah dengan Ridlo Allah SWT, 
			website SMP <br>&emsp;Negeri 6 Semarang akhirnya bisa terwujud dan bisa diakses &emsp;di seluruh dunia. 
			Mohon partisipasi aktif pada guru, <br>&emsp;karyawan dan siswa siswi, serta orang tua murid SMP 6 <br>&emsp;Semarang 
			agar tercipta komunikasi aktif dan transparan, <br>&emsp;Kami sadar website ini masih sangatlah sederhana, 
			dan <br>&emsp;tentunya kami mengharapkan kritik, saran yang sifatnya membangun demi majunya media informasi ini 
			kedepanya. Terimakasih dan selamat menikmati Informasi yang ada, semoga bermanfaat, atas perhatian dan 
			kerjasamanya kami ucapkan banyak terimakasih.<br>
			<br>
			<b>Wassalamu'alaikum wr. wb.</b><br></p>
			<p align="right">Semarang, April 2014<br>
							Kepala Sekolah<br>
							<br>
							<br>
			<b>H.SUPARNO, S.Pd M.Pd</b></p>


		</div>
	</div>
</div>

	<script>
		$(document).ready(function () {
			$(".linkpindah").click(function (e) { 
				e.preventDefault();
				$.get($(this).attr('href'), function (data, textStatus, jqXHR) {
						$(".main").html(data);
					}
				);
			});
		});
	</script>
</body>
<script>
	var JsonDta=[
		{	
			nama	:	"Timur Elang N",
			NIM		:	"A11.2017.10650",
		},
		{
			nama 	:	"Argodedali",
			NIM		:	"A11.2017.10654",
		},
		{
			nama 	:	"Agung Setya",
			NIM		:	"A11.2017.10664",
		},
	];

	var i;
	for(i=0;i<3;i++){
		console.log(JsonDta[i].nama)
		console.log(JsonDta[i].NIM)
	}
	$(document).ready(function(){
		$('.linkpindah').click(function(e){
			e.preventDefault();
			$.get($(this).aftr('href'),function(data, txtStatus, jqXHR){
				$('.isipostingall').html(data);
				console.log(data);
			}
			);
		});
	});
</script>
</html>
<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = $bot->getMessageText();
$chat=strtolower($text);

if($chat=='hai' || $chat=='halo' || $chat=='hello' || $chat=='hi') {
	$balas='hai';
	$bot->reply($balas);
} 

else if($chat=='assalamualaikum' || $chat=='assalamualaikum wr wb') {
	$balas='Waalaikumsalam Warahmatullahi Wabarakatuh.';
	$bot->reply($balas);
} 

else if($chat=='shalom') {
	$balas='Shalom';
	$bot->reply($balas);
} 

else if($chat=='salam') {
	$balas='Salam kenal kak...';
	$bot->reply($balas);
} 

else if ($chat=='maps'){
	$url='https://bappeda.kedirikab.go.id/img/peta-kab-kediri26.jpg';
	$prev_url='https://bappeda.kedirikab.go.id/img/peta-kab-kediri26.jpg';
	$bot->replyImage($url,$prev_url);
}

else if($chat=='okay'||$chat=='ok'||$chat=='k'||$chat=='oke') {
	$packID='1';
	$stikerID='2';
	$bot->replySticker($packID,$stikerID);
}

else if($chat=='kediri') {
	$balas="Kediri pada dasarnya sangat dekat dengan sejarah raja-raja Jawa Khususnya kerajaan Kediri, seperti Joyoboyo, Dhaha (Raja Panjalu), Empu Sendok, R. Wijaya, Airlangga, dan Gajah Mada. Masyarakat Kediri mendasarkan hidupnya pada bercocok tanam dan membangun industri berbasis agraris. Filosofi-filosofi Jawa dan perdamaian adalah fokus dalam kehidupan masyarakat.\n Nama Kediri berasal dari batu tulis “Harinjing ” yang ditemukan di desa Siman, Kabupaten Kepung. Diawali dengan tokoh yang bernama Bagawanta Bari berhasil menyelesaikan bendungan sungan Sarinjing untuk menyuburkan tanah pertanian. Karena jasanya, dia menerima “Tanah Pradikan” di desa Culanggi (Besowo, Kabupaten Kepung) pada 25 Maret SM. Hadiah tersebut diberikan oleh raja Rake Layang Dyah Tulodong yang menguasai Kerajaan Mataram. Karena kejadian tersebut, hari jadi Kediri ditetapkan tanggan 25 Maret setiap tahunnya. Secara Geografis Kabupaten Kediri terletak di belahan Selatan Propinsi Jawa Timur. Secara Ekologis, Wilayah Kabupaten Kediri diapit oleh dua Gunung yang berlawanan sifatnya, yaitu Gunung Kelud di Sebelah Timur yang bersifat Vulkanik dan Gunung Wilis di Sebelah Barat yang bersifat non vulkanik. di bagian tengah wilayah Kabupaten Kediri melintang aliran Sungai Brantas, yang membelah wilayah Kabupaten Kediri menjadi dua bagian dengan hamparan dataran rendah berupa daerah persawahan subur di sebelah timur sungai berantas.\nIbukotanya adalah Kediri. Kabupaten ini berbatasan dengan Kabupaten Jombang di utara, Kabupaten Malang di timur, Kabupaten Blitar dan Kabupaten Tulungagung di selatan, Kabupaten Madiun dan Kabupaten Ponorogo di barat, serta Kabupaten Nganjuk di barat dan utara.\nKabupaten Kediri terdiri atas 23 kecamatan, yang dibagi lagi atas sejumlah desa dan kelurahan. Ibukota kabupaten ini adalah Kediri.";
	$bot->reply($balas);
} 

else if ($chat=='wisata'){
	$data1=array(
		'thumbnailImageUrl' =>'https://www.itrip.id/wp-content/uploads/2019/06/Candi-Setono-Gedong.jpg',
		'text' => 'Candi',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'candi'
				)
			]
		);
	$data2=array(
		'thumbnailImageUrl' =>'https://2.bp.blogspot.com/-YvrAItkpI7Q/WRluCOzpOpI/AAAAAAAABuI/Ek8uh8yg2LIOIMrewv9nAebS4mCdj3anACLcB/s1600/gunung-kelud-03.jpg',
		'text' => 'Gunung',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'gunung'
				)
			]
		);
	$data3=array(
		'thumbnailImageUrl' =>'https://travelspromo.com/wp-content/uploads/2019/12/Air-Terjun-Dolo-yang-Bertingkat-tingkat.-Foto-Gmap-Kiky-Prabowo-640x428.jpg',
		'text' => 'Air Terjun',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'air terjun'
				)
			]
		);
	$bot->replyCarousel($data1,$data2,$data3);
 
} 

else if($chat=='candi') {

 	$data1=array(
		'thumbnailImageUrl' =>'https://lh5.googleusercontent.com/p/AF1QipOET-88hXVmlDic_w3emr9NJs47lBretwF8wtA3=w600-h321-p-k-no',
		'text' => 'Candi Tegowangi',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'candi tegowangi'
				)
			]
		);
	$data2=array(
		'thumbnailImageUrl' =>'https://lh5.googleusercontent.com/p/AF1QipOkwLRk592jEwMhL0ebm6kqbU31U_Nz5XzOJPf7=w600-h321-p-k-no',
		'text' => 'Candi Surowono',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'candi surowono'
				)
			]
		);
	$data3=array(
		'thumbnailImageUrl' =>'https://lh5.googleusercontent.com/p/AF1QipP8colrzDjHvz9Q2Z9QnIP2mQRYBYJRccfpmFpa=w600-h650-p-k-no',
		'text' => 'Candi Tondowongso',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'candi tondowongso'
				)
			]
		);
	$bot->replyCandi($data1,$data2,$data3);
}

else if($chat=='candi tegowangi') {
	$balas='Candi Tegowangi merupakan candi yang terletak di Desa Tegowangi Kecamatan Plemahan Kabupaten Kediri, Jawa Timur, Indonesia. Menurut Kitab Pararaton, candi ini merupakan tempat Pendharmaan Bhre Matahun. Sedangkan dalam kitab Negarakertagama dijelaskan bahwa Bhre Matahun meninggal tahun 1388 M. Maka diperkirakan candi ini dibuat pada tahun 1400 M dimasa Majapahit.';
	$bot->reply($balas);
} 

else if($chat=='candi surowono') {
	$balas='Candi Surawana terletak di Desa Canggu, Kecamatan Pare, Kabupaten Kediri, sekitar 25 km arah timur laut dari Kota Kediri. ';
	$bot->reply($balas);
} 

else if($chat=='candi tondowongso') {
	$balas='Tempat Wisata Candi ini berada di Komplek Candi Tondowongso Kediri merupakan situs temuan purbakala yang ditemukan pada awal tahun 2007 di Dusun Tondowongso,Desa Gayam, Kecamatan Gurah, Kabupaten Kediri, Jawa Timur. Situs seluas lebih dari satu hektare ini dianggap sebagai penemuan terbesar untuk periode klasik sejarah Indonesia dalam 30 tahun terakhir. Berdasarkan bentuk dan gaya tatahan arca yang ditemukan, situs ini diyakini sebagai peninggalan masa Kerajaan Kadiri awal (abad XI), masa-masa awal perpindahan pusat politik dari kawasan Jawa Tengah ke Jawa Timur. Selama ini Kerajaan Kadiri dikenal dari sejumlah karya sastra namun tidak banyak diketahui peninggalannya dalam bentuk bangunan atau hasil pahatan.';
	$bot->reply($balas);
} 


else if($chat=='gunung') {

 	 	$data1=array(
		'thumbnailImageUrl' =>'https://2.bp.blogspot.com/-YvrAItkpI7Q/WRluCOzpOpI/AAAAAAAABuI/Ek8uh8yg2LIOIMrewv9nAebS4mCdj3anACLcB/s1600/gunung-kelud-03.jpg',
		'text' => 'Gunung Kelud',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'gunung kelud'
				)
			]
		);
	$data2=array(
		'thumbnailImageUrl' =>'https://sewamobilkediri.net/wp-content/uploads/2019/02/wisata-gunung-klotok-kediri.jpg',
		'text' => 'Gunung Klotok',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'gunung klotok'
				)
			]
		);

	$bot->replyGunung($data1,$data2);
}

else if($chat=='gunung kelud') {
	$balas='Gunung Kelud merupakan wisata yang sangat terkenal di Kabupaten Kediri. Wisata ini mempunyai pemandangan yang sangat indah dan menawan.Kelud merupakan salah satu gunung paling aktif di Indonesia selain Gunung Merapi. Gunung yang berketinggian 1.731 mdpl ini telah meletus sebanyak 30 kali sejak 1000 tahun terakhir. Pada tahun 2014, gunung memiliki letusan yang sangat dahsyat. Bahkan abu vulkaniknya sampai Provinsi Jawa Barat';
	$bot->reply($balas);
}

else if($chat=='gunung klotok') {
	$balas='Gunung Klotok ini terletak di Desa Pojok , Kecamatan  Mojoroto , Kota Kediri , Provinsi Jawa Timur. Berjarak sekitar 1 km dari Pondok Pesantren Lirboyo Kediri. Di kawasan wisata Gunung Klotok terdapat berbagai macam wahana dan sarana yang bisa dinikmati diantaranya kolam renang, wahana bermain keluarga, museum Airlangga, Goa selomangleng, petilasan Mbah Boncolono yang berada di Bukit Maskumambang dan lainnya.';
	$bot->reply($balas);
}

else if($chat=='air terjun') {

 	$data1=array(
		'thumbnailImageUrl' =>'https://ksmtour.com/media/images/articles16/air-terjun-dolo-kediri-jawa-timur.jpg',
		'text' => 'Air Terjun Dolo',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'air terjun dolo'
				)
			]
		);
	$data2=array(
		'thumbnailImageUrl' =>'https://jejakpiknik.com/wp-content/uploads/2018/04/Air-Terjun-Irenggolo-9-630x380-1.jpg',
		'text' => 'Air Terjun Irenggolo',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'air terjun irenggolo'
				)
			]
		);
	$data3=array(
		'thumbnailImageUrl' =>'https://3.bp.blogspot.com/-Ry9iFgCJQWE/VzR-ZmxgcHI/AAAAAAAAIdk/sCUXmbH_JXQ7e0RWedrtG90I23IC64emACLcB/s1600/ngleyangannn.jpg',
		'text' => 'Air Terjun Ngelayangan',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'air terjun ngelayangan'
				)
			]
		);

	$data4=array(
		'thumbnailImageUrl' =>'https://lh5.googleusercontent.com/p/AF1QipOA5dWe-JBhBqssF3aBZ_T7j8H_egp2mLNIrr-r=w600-h321-p-k-no',
		'text' => 'Air Terjun di Lembah Peri-peri',
		'actions' => [
				array(
					'type' => 'message',
				    'label' => 'Ingin Tau',
				    'text' => 'lembah peri-peri'
				)
			]
		);
	$bot->replyCandi($data1,$data2,$data3,$data4);
}

else if($chat=='air terjun dolo') {
	$balas='Air terjun dolo yang terletak di Dsn. Besuki, Desa Jugo,Kec. Mojo Kediri Jawa Timur ini bisa kalian tempuh dalam waktu 1 jam dari pusat kota Kediri dengan rute berkelok kelok dan tebing curam khas pegunungan. Butuh perjuangan untuk sampai ke air terjun, harus menuruni 1000 anak tangga kitra kira butuh waktu 20 – 30 menit, bagi yang capek jangan khawatir selama perjalanan ada beberapa titik rest area yang menjual makanan dan minuman, dengan suasana yang sejuk dan masih terdengar kicauan burung dari alam liar. Sesampainya di lokasi anda akan di sambut dengan pemandangan air terjunnya menawan, asri, dengan air yang sangat dingin, untuk fasilitas disini sudah terdapat mushola toilet,  Terdapat juga tempat bermain anak (ayunan, perosotan, dll) spot foto yang intagramable banget juga cukup banyak';
	$bot->reply($balas);
}

else if($chat=='air terjun irenggolo') {
	$balas='Air terjun irenggolo adalah salah salah satu wisata yang ada di kediri, jalurnya meliuk-liuk khas pegunungan akses jalanannya sendiri cukup bagus bisa di lewati kendaraan roda empat dengan aman sesampainya di parkiran anda harus berjalan menuju air terjun dengan waktu kurang lebih 10 menit';
	$bot->reply($balas);
}

else if($chat=='air terjun ngelayangan') {
	$balas='air terjun ini sebagai salah satu surga tersembunyi di kediri dan destinasi wisata ini hanya cocok bagi mereka yang memiiki jiwa petualang dan tangguh, mengapa demikian, karena untuk mencapai air terjunnya sendiri pengunjung harus menempuh perjalanan kaki yang membutuhkan waktu 2 jam dari tempat berhenti. Selain itu juga  harus berhati hati karena ada jembatan rusak dan jalannya agak licin di beberapa titik, dan juga harus membawa perbekalan makanan dan minuman yang cukup agar tidak kelaparan atau kehausan karena sepanjang perjalanan tidak ada orang yang menjual makanan, akan tetapi sepanjang perjalanan anda akan disuguhkan oleh pemandangan alam yang indah, kelelahan and aakan terbayar dengan keindahan air terjun yang tinggi, airnya dingin, bening, dan asri karena banyak pepohonan rimbun di sekelilingnya, ada juga spot foto instagramable bagi yang suka foto – foto.';
	$bot->reply($balas);
}

else if($chat=='lembah peri-peri') {
	$balas='air terjun ini terletak di lembah peri peri kediri di daerah selopanggung, Kec. Semen, Kabupaten kediri Tempatnya bagus, airnya masih bersih, pemandangannya juga indah, banyak pohon-pohon tinggi besar, hijau rindang. Jalannya asik masih alami. Sesampainya di lokasi anda akan melihat pemandangan air terjun yang tinggi panoramanya bagus ditambah keindahan alam nya membuat kita terasa lebih fresh. Walaupun jarak ke tujuan lumayan jauh, tetapi akan terbayar rasa lelah nya setelah samapi disana, selain curug ada juga spot foto yg bisa di abadikan di sana, bisa juga bermain air maupun berenang di sungai aliran curug';
	$bot->reply($balas);
}

else if($chat==''){
	$balas="Untuk mengetahui cara menggunakan saya, ketik perintah berikut ini:\nKediri -> penjelasan tentang Kediri\nMaps -> gambar wilayah Kediri\nWisata -> informasi tentang wisata di wilayah Kediri\nsalam -> mengucapkan salam\nassalamualaikum -> mengucapkan salam\nshalom -> mengucapkan salam\nRule -> menjelaskan perintah yang ada pada bot
			";
	$bot->reply($balas);
}

else if($chat=='rule'){
	$balas="Untuk mengetahui cara menggunakan saya, ketik perintah berikut ini:\nKediri -> penjelasan tentang Kediri\nMaps -> gambar wilayah Kediri\nWisata -> informasi tentang wisata di wilayah Kediri\nsalam -> mengucapkan salam\nassalamualaikum -> mengucapkan salam\nshalom -> mengucapkan salam\nRule -> menjelaskan perintah yang ada pada bot
			";
	$bot->reply($balas);
}

else{
	$balas="Maaf rule yang anda ketikkan tidak dikenali.\nAnda bisa mengetikkan 'Rule' untuk mengetahui perintah-perintah pada bot ini";
	$bot->reply($balas);
}


<?php
	header('Content-type: text/html; charset=utf-8');
	include("connect.php");

	//query for every district
	$result1 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Dhaka'");
	$result2 = mysqli_query($con,"SELECT * FROM area_info where district_eng='panchogar'");
	$result3 = mysqli_query($con,"SELECT * FROM area_info where district_eng='thakurgaon'");
	$result4 = mysqli_query($con,"SELECT * FROM area_info where district_eng='nilphamari'");
	$result5 = mysqli_query($con,"SELECT * FROM area_info where district_eng='dinajpur'");
	$result6 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Rangpur'");
	$result7 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Kurigram'");
	$result8 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Lalmonirhat'");
	$result9 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Gaibandha'");
	$result10 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Joypurhat'");
	$result11 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Naogaon'");
	$result12 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Bogra'");
	$result13 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Jamalpur'");
	$result14 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Sherpur'");
	$result15 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Nawabganj'");
	$result16 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Rajshahi'");
	$result17 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Natore'");
	$result18 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Sirajganj'");
	$result19 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Tangail'");
	$result20 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Mymensingh'");
	$result21 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Netrokona'");
	$result22 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Sunamganj'");
	$result23 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Sylhet'");
	$result24 = mysqli_query($con,"SELECT * FROM area_info where district_eng='MBazar'");
	$result25 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Hobiganj'");
	$result26 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Kishoreganj'");       
	$result27 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Gazipur'");
	$result28 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Kushtia'");
	$result29 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Pabna'");
	$result30 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Manikganj'");
	$result31 = mysqli_query($con,"SELECT * FROM area_info where district_eng='NGanj'");
	$result32 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Narsingdi'");
	$result33 = mysqli_query($con,"SELECT * FROM area_info where district_eng='BBaria'");
	$result34 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Comilla'");
	$result35 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Chadpur'");
	$result36 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Shariatpur'");
	$result37 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Madaripur'");
	$result38 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Munshiganj'");
	$result39 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Faridpur'");
	$result40 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Gopalganj'");
	$result41 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Magura'");
	$result42 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Jhenaidah'");
	$result43 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Chuadanga'");
	$result44 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Meherpur'");
	$result45 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Jessore'");
	$result46 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Narail'");
	$result47 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Satkhira'");
	$result48 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Khulna'");
	$result49 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Bagerhat'");
	$result50 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Pirojpur'");
	$result51 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Jhalokathi'");
	$result52 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Barguna'");
	$result53 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Patuakhali'");
	$result54 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Barisal'");
	$result55 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Vola'");     
	$result56 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Laxmipur'");
	$result57 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Noakhali'");
	$result58= mysqli_query($con,"SELECT * FROM area_info where district_eng='Feni'");
	$result59 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Chittagong'");
	$result60 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Khagrachari'");
	$result61 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Rangamati'");
	$result62 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Bandorban'");
	$result63 = mysqli_query($con,"SELECT * FROM area_info where district_eng='CoxBazar'");
	$result64 = mysqli_query($con,"SELECT * FROM area_info where district_eng='Rajbari'");
	
	


	//all fetched text for every district
	$dhaka = mysqli_fetch_array($result1);
	$Panchogar = mysqli_fetch_array($result2);
	$thakurgaon = mysqli_fetch_array($result3);
	$nilphamari = mysqli_fetch_array($result4);
	$dinajpur = mysqli_fetch_array($result5);
	$rangpur = mysqli_fetch_array($result6);
	$kurigram = mysqli_fetch_array($result7);
	$lalmonirhat = mysqli_fetch_array($result8);
	$gaibandha = mysqli_fetch_array($result9);
	$joypurhat = mysqli_fetch_array($result10);
	$naogaon = mysqli_fetch_array($result11);
	$bogra = mysqli_fetch_array($result12);
	$jamalpur = mysqli_fetch_array($result13);
	$sherpur = mysqli_fetch_array($result14);
	$nawabganj = mysqli_fetch_array($result15);
	$rajshahi = mysqli_fetch_array($result16);
	$natore = mysqli_fetch_array($result17);
	$sirajganj = mysqli_fetch_array($result18);
	$tangail = mysqli_fetch_array($result19);
	$mymensingh = mysqli_fetch_array($result20);
	$netrokona = mysqli_fetch_array($result21);
	$sunamganj = mysqli_fetch_array($result22);
	$sylhet = mysqli_fetch_array($result23);
	$mbazar = mysqli_fetch_array($result24);
	$hobiganj = mysqli_fetch_array($result25);
	$kishoreganj = mysqli_fetch_array($result26);
	$gajipur = mysqli_fetch_array($result27);
	$kushtia = mysqli_fetch_array($result28);
	$pabna = mysqli_fetch_array($result29);
	$manikganj = mysqli_fetch_array($result30);
	$nganj = mysqli_fetch_array($result31);
	$narsingdi = mysqli_fetch_array($result32);
	$bbaria = mysqli_fetch_array($result33);
	$comilla = mysqli_fetch_array($result34);
	$chadpur = mysqli_fetch_array($result35);
	$shariatpur = mysqli_fetch_array($result36);
	$madaripur = mysqli_fetch_array($result37);
	$munsiganj = mysqli_fetch_array($result38);
	$faridpur = mysqli_fetch_array($result39);
	$gopalganj = mysqli_fetch_array($result40);
	$magura = mysqli_fetch_array($result41);
	$jhenaidah = mysqli_fetch_array($result42);
	$chuadanga = mysqli_fetch_array($result43);
	$meherpur = mysqli_fetch_array($result44);
	$jessore = mysqli_fetch_array($result45);
	$narail = mysqli_fetch_array($result46);
	$satkhira = mysqli_fetch_array($result47);
	$khulna = mysqli_fetch_array($result48);
	$bagerhat = mysqli_fetch_array($result49);
	$pirojpur = mysqli_fetch_array($result50);
	$jhalokathi = mysqli_fetch_array($result51);
	$barguna = mysqli_fetch_array($result52);
	$patuakhali = mysqli_fetch_array($result53);
	$barishal = mysqli_fetch_array($result54);
	$vola = mysqli_fetch_array($result55);
	$laxmipur = mysqli_fetch_array($result56);
	$noakhali = mysqli_fetch_array($result57);
	$feni = mysqli_fetch_array($result58);
	$chittagong = mysqli_fetch_array($result59);
	$khagrachari = mysqli_fetch_array($result60);
	$rangamati = mysqli_fetch_array($result61);
	$bandorban = mysqli_fetch_array($result62);
	$coxbazar = mysqli_fetch_array($result63);
	$rajbari = mysqli_fetch_array($result64);
  	
	mysqli_close($con);

	/* reserve

	$dhaka = mysqli_fetch_array($result1);
	$Panchogar = mysqli_fetch_array($result2);
	$thakurgaon = mysqli_fetch_array($result3);
	$nilphamari
	$dinajpur
	$rangpur
	$kurigram 
	Lalmonirhat 
	Gaibandha 
	Joypurhat 
	Naogaon 
	Bogra 
	Jamalpur 
	Sherpur 
	Nawabganj 
	Rajshahi 
	Natore 
	Sirajganj 
	Tangail 
	Mymensingh 
	Netrokona 
	Sunamganj 
	Sylhet 
	MBazar 
	Hobiganj 
	Kishoreganj 
	Gazipur 
	Kushtia 
	Pabna 
	Manikganj 
	Dhaka 
	NGanj 
	Narsingdi 
	BBaria 
	Comilla 
	Chadpur 
	Shariatpur 
	Madaripur 
	Munshiganj 
	Faridpur 
	Gopalganj 
	Magura 
	Jhenaidah 
	Chuadanga 
	Meherpur 
	Jessore 
	Narail 
	Satkhira 
	Khulna 
	Bagerhat 
	Pirojpur 
	Jhalokathi 
	Barguna 
	Patuakhali 
	Barisal 
	Vola 
	Laxmipur 
	Noakhali 
	Feni 
	Chittagong 
	Khagrachari 
	Rangamati 
	Bandorban 
	CoxBazar 
	Rajbari */
?>
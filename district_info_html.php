<div id="canvas">

			<div id="papermap"> </div> <!--BD map is displayed here -->
			
            <!-- district text info -->
            <!-- Panchogar Thakurgaon Nilphamari Dinajpur Rangpur Kurigram Lalmonirhat Gaibandha Joypurhat Naogaon Bogra Jamalpur Sherpur Nawabganj Rajshahi Natore Sirajganj Tangail Mymensingh Netrokona Sunamganj Sylhet MBazar Hobiganj Kishoreganj Gazipur Kushtia Pabna Manikganj Dhaka NGanj Narsingdi BBaria Comilla Chadpur Shariatpur Madaripur Munshiganj Faridpur Gopalganj Magura Jhenaidah Chuadanga Meherpur Jessore Narail Satkhira Khulna Bagerhat Pirojpur Jhalokathi Barguna Patuakhali Barisal Vola Laxmipur Noakhali Feni Chittagong Khagrachari Rangamati Bandorban CoxBazar Rajbari --> 
    
			<div id="Panchogar">
				<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $Panchogar['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $Panchogar['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $Panchogar['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $Panchogar['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $Panchogar['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $Panchogar['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $Panchogar['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $Panchogar['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $Panchogar['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $Panchogar['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $Panchogar['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $Panchogar['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $Panchogar['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $Panchogar['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $Panchogar['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $Panchogar['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $Panchogar['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $Panchogar['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
			<div id="Thakurgaon">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $thakurgaon['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $thakurgaon['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $thakurgaon['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $thakurgaon['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $thakurgaon['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $thakurgaon['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $thakurgaon['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $thakurgaon['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $thakurgaon['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $thakurgaon['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $thakurgaon['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $thakurgaon['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $thakurgaon['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $thakurgaon['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $thakurgaon['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $thakurgaon['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $thakurgaon['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $thakurgaon['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
			<div id="Nilphamari">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $nilphamari['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $nilphamari['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $nilphamari['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $nilphamari['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $nilphamari['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $nilphamari['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $nilphamari['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $nilphamari['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $nilphamari['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $nilphamari['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $nilphamari['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $nilphamari['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $nilphamari['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $nilphamari['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $nilphamari['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $nilphamari['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $nilphamari['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $nilphamari['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
			<div id="Dinajpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $dinajpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $dinajpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $dinajpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $dinajpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $dinajpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $dinajpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $dinajpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $dinajpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $dinajpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $dinajpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $dinajpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $dinajpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $dinajpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $dinajpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $dinajpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $dinajpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $dinajpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $dinajpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
			<div id="Rangpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $rangpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $rangpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $rangpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rangpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rangpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rangpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rangpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rangpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rangpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $rangpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $rangpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $rangpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $rangpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $rangpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $rangpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $rangpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $rangpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $rangpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
   
    
			<div id="Kurigram">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $kurigram['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $kurigram['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $kurigram['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $kurigram['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $kurigram['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $kurigram['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $kurigram['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $kurigram['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $kurigram['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $kurigram['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $kurigram['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $kurigram['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $kurigram['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $kurigram['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $kurigram['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $kurigram['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $kurigram['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $kurigram['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
			<div id="Lalmonirhat">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $lalmonirhat['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $lalmonirhat['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $lalmonirhat['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $lalmonirhat['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $lalmonirhat['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $lalmonirhat['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $lalmonirhat['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $lalmonirhat['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $lalmonirhat['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $lalmonirhat['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $lalmonirhat['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $lalmonirhat['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $lalmonirhat['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $lalmonirhat['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $lalmonirhat['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $lalmonirhat['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $lalmonirhat['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $lalmonirhat['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Gaibandha">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $gaibandha['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $gaibandha['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $gaibandha['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $gaibandha['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $gaibandha['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $gaibandha['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $gaibandha['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $gaibandha['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $gaibandha['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $gaibandha['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $gaibandha['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $gaibandha['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $gaibandha['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $gaibandha['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $gaibandha['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $gaibandha['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $gaibandha['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $gaibandha['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Joypurhat">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $joypurhat['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $joypurhat['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $joypurhat['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $joypurhat['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $joypurhat['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $joypurhat['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $joypurhat['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $joypurhat['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $joypurhat['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $joypurhat['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $joypurhat['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $joypurhat['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $joypurhat['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $joypurhat['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $joypurhat['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $joypurhat['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $joypurhat['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $joypurhat['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Naogaon">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $naogaon['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $naogaon['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $naogaon['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $naogaon['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $naogaon['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $naogaon['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $naogaon['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $naogaon['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $naogaon['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $naogaon['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $naogaon['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $naogaon['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $naogaon['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $naogaon['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $naogaon['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $naogaon['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $naogaon['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $naogaon['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Bogra">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $bogra['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $bogra['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $bogra['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bogra['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bogra['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bogra['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bogra['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bogra['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bogra['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $bogra['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $bogra['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $bogra['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $bogra['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $bogra['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $bogra['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $bogra['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $bogra['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $bogra['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Jamalpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $jamalpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $jamalpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $jamalpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jamalpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jamalpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jamalpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jamalpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jamalpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jamalpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $jamalpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $jamalpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $jamalpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $jamalpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $jamalpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $jamalpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $jamalpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $jamalpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $jamalpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
            
            <div id="Sherpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $sherpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $sherpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $sherpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sherpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sherpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sherpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sherpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sherpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sherpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $sherpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $sherpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $sherpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $sherpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $sherpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $sherpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $sherpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $sherpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $sherpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Nawabganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $nawabganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $nawabganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $nawabganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $nawabganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $nawabganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $nawabganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $nawabganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $nawabganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $nawabganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $nawabganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $nawabganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $nawabganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $nawabganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $nawabganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $nawabganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $nawabganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $nawabganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $nawabganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Rajshahi">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $rajshahi['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $rajshahi['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $rajshahi['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rajshahi['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rajshahi['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rajshahi['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rajshahi['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rajshahi['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rajshahi['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $rajshahi['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $rajshahi['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $rajshahi['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $rajshahi['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $rajshahi['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $rajshahi['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $rajshahi['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $rajshahi['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $rajshahi['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Natore">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $natore['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $natore['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $natore['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $natore['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $natore['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $natore['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $natore['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $natore['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $natore['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $natore['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $natore['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $natore['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $natore['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $natore['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $natore['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $natore['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $natore['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $natore['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Sirajganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $sirajganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $sirajganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $sirajganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sirajganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sirajganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sirajganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sirajganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sirajganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sirajganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $sirajganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $sirajganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $sirajganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $sirajganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $sirajganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $sirajganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $sirajganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $sirajganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $sirajganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Tangail">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $tangail['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $tangail['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $tangail['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $tangail['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $tangail['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $tangail['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $tangail['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $tangail['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $tangail['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $tangail['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $tangail['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $tangail['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $tangail['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $tangail['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $tangail['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $tangail['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $tangail['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $tangail['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Mymensingh">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $mymensingh['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $mymensingh['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $mymensingh['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $mymensingh['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $mymensingh['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $mymensingh['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $mymensingh['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $mymensingh['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $mymensingh['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $mymensingh['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $mymensingh['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $mymensingh['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $mymensingh['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $mymensingh['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $mymensingh['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $mymensingh['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $mymensingh['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $mymensingh['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Netrokona">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $netrokona['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $netrokona['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $netrokona['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $netrokona['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $netrokona['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $netrokona['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $netrokona['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $netrokona['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $netrokona['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $netrokona['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $netrokona['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $netrokona['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $netrokona['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $netrokona['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $netrokona['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $netrokona['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $netrokona['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $netrokona['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Sunamganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $sunamganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $sunamganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $sunamganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sunamganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sunamganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sunamganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sunamganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sunamganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sunamganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $sunamganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $sunamganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $sunamganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $sunamganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $sunamganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $sunamganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $sunamganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $sunamganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $sunamganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Sylhet">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $sylhet['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $sylhet['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $sylhet['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sylhet['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sylhet['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sylhet['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $sylhet['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $sylhet['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $sylhet['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $sylhet['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $sylhet['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $sylhet['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $sylhet['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $sylhet['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $sylhet['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $sylhet['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $sylhet['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $sylhet['avg_hum'] ;?>% </h4>
					</div>	
				</div>
    
			</div>
    
            <div id="MBazar">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $mbazar['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $mbazar['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $mbazar['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $mbazar['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $mbazar['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $mbazar['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $mbazar['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $mbazar['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $mbazar['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $mbazar['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $mbazar['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $mbazar['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $mbazar['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $mbazar['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $mbazar['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $mbazar['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $mbazar['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $mbazar['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Hobiganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $hobiganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $hobiganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $hobiganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $hobiganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $hobiganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $hobiganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $hobiganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $hobiganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $hobiganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $hobiganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $hobiganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $hobiganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $hobiganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $hobiganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $hobiganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $hobiganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $hobiganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $hobiganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
        
            <div id="Kishoreganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $kishoreganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $kishoreganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $kishoreganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $kishoreganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $kishoreganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $kishoreganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $kishoreganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $kishoreganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $kishoreganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $kishoreganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $kishoreganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $kishoreganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $kishoreganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $kishoreganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $kishoreganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $kishoreganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $kishoreganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $kishoreganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Gazipur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $gajipur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $gajipur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $gajipur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $gajipur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $gajipur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $gajipur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $gajipur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $gajipur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $gajipur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $gajipur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $gajipur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $gajipur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $gajipur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $gajipur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $gajipur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $gajipur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $gajipur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $gajipur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Kushtia">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $kushtia['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $kushtia['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $kushtia['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $kushtia['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $kushtia['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $kushtia['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $kushtia['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $kushtia['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $kushtia['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $kushtia['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $kushtia['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $kushtia['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $kushtia['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $kushtia['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $kushtia['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $kushtia['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $kushtia['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $kushtia['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Pabna">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $pabna['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $pabna['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $pabna['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $pabna['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $pabna['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $pabna['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $pabna['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $pabna['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $pabna['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $pabna['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $pabna['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $pabna['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $pabna['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $pabna['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $pabna['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $pabna['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $pabna['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $pabna['avg_hum'] ;?>% </h4>
					</div>	
				</div>
				
			</div>
    
            <div id="Manikganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $manikganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $manikganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $manikganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $manikganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $manikganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $manikganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $manikganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $manikganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $manikganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $manikganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $manikganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $manikganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $manikganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $manikganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $manikganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $manikganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $manikganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $manikganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
			
			<div id="NGanj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $nganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $nganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $nganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $nganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $nganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $nganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $nganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $nganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $nganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $nganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $nganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $nganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $nganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $nganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $nganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $nganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $nganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $nganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
 <!-- *************** Real Dhaka ***************** -->   
            <div id="Dhaka">
				<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $dhaka['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $dhaka['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $dhaka['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $dhaka['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $dhaka['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $dhaka['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $dhaka['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $dhaka['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $dhaka['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $dhaka['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $dhaka['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $dhaka['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $dhaka['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $dhaka['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $dhaka['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $dhaka['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $dhaka['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $dhaka['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            
    
            <div id="Narsingdi">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $narsingdi['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $narsingdi['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $narsingdi['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $narsingdi['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $narsingdi['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $narsingdi['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $narsingdi['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $narsingdi['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $narsingdi['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $narsingdi['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $narsingdi['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $narsingdi['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $narsingdi['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $narsingdi['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $narsingdi['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $narsingdi['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $narsingdi['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $narsingdi['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="BBaria">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $bbaria['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $bbaria['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $bbaria['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bbaria['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bbaria['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bbaria['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bbaria['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bbaria['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bbaria['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $bbaria['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $bbaria['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $bbaria['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $bbaria['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $bbaria['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $bbaria['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $bbaria['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $bbaria['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $bbaria['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Comilla">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $comilla['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $comilla['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $comilla['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $comilla['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $comilla['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $comilla['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $comilla['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $comilla['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $comilla['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $comilla['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $comilla['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $comilla['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $comilla['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $comilla['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $comilla['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $comilla['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $comilla['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $comilla['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Chadpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $chadpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $chadpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $chadpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $chadpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $chadpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $chadpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $chadpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $chadpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $chadpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $chadpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $chadpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $chadpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $chadpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $chadpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $chadpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $chadpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $chadpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $chadpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Shariatpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $shariatpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $shariatpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $shariatpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $shariatpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $shariatpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $shariatpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $shariatpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $shariatpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $shariatpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $shariatpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $shariatpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $shariatpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $shariatpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $shariatpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $shariatpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $shariatpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $shariatpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $shariatpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Madaripur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $madaripur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $madaripur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $madaripur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $madaripur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $madaripur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $madaripur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $madaripur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $madaripur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $madaripur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $madaripur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $madaripur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $madaripur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $madaripur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $madaripur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $madaripur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $madaripur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $madaripur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $madaripur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>            
    
            <div id="Munshiganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $munsiganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $munsiganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $munsiganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $munsiganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $munsiganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $munsiganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $munsiganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $munsiganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $munsiganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $munsiganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $munsiganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $munsiganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $munsiganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $munsiganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $munsiganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $munsiganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $munsiganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $munsiganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Faridpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $faridpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $faridpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $faridpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $faridpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $faridpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $faridpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $faridpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $faridpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $faridpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $faridpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $faridpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $faridpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $faridpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $faridpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $faridpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $faridpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $faridpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $faridpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Rajbari">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $rajbari['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $rajbari['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $rajbari['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rajbari['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rajbari['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rajbari['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rajbari['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rajbari['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rajbari['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $rajbari['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $rajbari['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $rajbari['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $rajbari['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $rajbari['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $rajbari['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $rajbari['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $rajbari['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $rajbari['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Gopalganj">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $gopalganj['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $gopalganj['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $gopalganj['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $gopalganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $gopalganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $gopalganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $gopalganj['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $gopalganj['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $gopalganj['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $gopalganj['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $gopalganj['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $gopalganj['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $gopalganj['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $gopalganj['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $gopalganj['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $gopalganj['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $gopalganj['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $gopalganj['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Magura">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $magura['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $magura['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $magura['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $magura['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $magura['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $magura['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $magura['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $magura['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $magura['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $magura['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $magura['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $magura['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $magura['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $magura['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $magura['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $magura['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $magura['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $magura['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Jhenaidah">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $jhenaidah['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $jhenaidah['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $jhenaidah['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jhenaidah['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jhenaidah['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jhenaidah['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jhenaidah['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jhenaidah['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jhenaidah['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $jhenaidah['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $jhenaidah['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $jhenaidah['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $jhenaidah['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $jhenaidah['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $jhenaidah['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $jhenaidah['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $jhenaidah['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $jhenaidah['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Chuadanga">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $chuadanga['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $chuadanga['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $chuadanga['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $chuadanga['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $chuadanga['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $chuadanga['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $chuadanga['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $chuadanga['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $chuadanga['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $chuadanga['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $chuadanga['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $chuadanga['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $chuadanga['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $chuadanga['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $chuadanga['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $chuadanga['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $chuadanga['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $chuadanga['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Meherpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $meherpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $meherpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $meherpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $meherpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $meherpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $meherpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $meherpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $meherpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $meherpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $meherpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $meherpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $meherpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $meherpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $meherpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $meherpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $meherpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $meherpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $meherpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div> 
            
            <div id="Jessore">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $jessore['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $jessore['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $jessore['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jessore['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jessore['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jessore['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jessore['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jessore['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jessore['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $jessore['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $jessore['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $jessore['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $jessore['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $jessore['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $jessore['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $jessore['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $jessore['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $jessore['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Narail">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $narail['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $narail['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $narail['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $narail['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $narail['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $narail['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $narail['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $narail['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $narail['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $narail['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $narail['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $narail['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $narail['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $narail['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $narail['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $narail['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $narail['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $narail['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Satkhira">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $satkhira['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $satkhira['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $satkhira['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $satkhira['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $satkhira['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $satkhira['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $satkhira['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $satkhira['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $satkhira['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $satkhira['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $satkhira['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $satkhira['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $satkhira['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $satkhira['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $satkhira['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $satkhira['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $satkhira['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $satkhira['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Khulna">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $khulna['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $khulna['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $khulna['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $khulna['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $khulna['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $khulna['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $khulna['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $khulna['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $khulna['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $khulna['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $khulna['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $khulna['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $khulna['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $khulna['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $khulna['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $khulna['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $khulna['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $khulna['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Bagerhat">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $bagerhat['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $bagerhat['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $bagerhat['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bagerhat['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bagerhat['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bagerhat['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bagerhat['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bagerhat['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bagerhat['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $bagerhat['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $bagerhat['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $bagerhat['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $bagerhat['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $bagerhat['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $bagerhat['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $bagerhat['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $bagerhat['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $bagerhat['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Pirojpur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $pirojpur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $pirojpur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $pirojpur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $pirojpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $pirojpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $pirojpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $pirojpur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $pirojpur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $pirojpur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $pirojpur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $pirojpur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $pirojpur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $pirojpur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $pirojpur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $pirojpur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $pirojpur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $pirojpur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $pirojpur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>  
    
            <div id="Jhalokathi">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $jhalokathi['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $jhalokathi['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $jhalokathi['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jhalokathi['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jhalokathi['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jhalokathi['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $jhalokathi['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $jhalokathi['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $jhalokathi['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $jhalokathi['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $jhalokathi['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $jhalokathi['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $jhalokathi['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $jhalokathi['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $jhalokathi['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $jhalokathi['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $jhalokathi['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $jhalokathi['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Barguna">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $barguna['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $barguna['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $barguna['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $barguna['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $barguna['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $barguna['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $barguna['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $barguna['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $barguna['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $barguna['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $barguna['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $barguna['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $barguna['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $barguna['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $barguna['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $barguna['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $barguna['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $barguna['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Patuakhali">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $patuakhali['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $patuakhali['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $patuakhali['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $patuakhali['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $patuakhali['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $patuakhali['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $patuakhali['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $patuakhali['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $patuakhali['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $patuakhali['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $patuakhali['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $patuakhali['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $patuakhali['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $patuakhali['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $patuakhali['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $patuakhali['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $patuakhali['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $patuakhali['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Barisal">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $barishal['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $barishal['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $barishal['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $barishal['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $barishal['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $barishal['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $barishal['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $barishal['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $barishal['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $barishal['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $barishal['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $barishal['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $barishal['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $barishal['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $barishal['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $barishal['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $barishal['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $barishal['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Vola">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $vola['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $vola['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $vola['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $vola['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $vola['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $vola['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $vola['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $vola['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $vola['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $vola['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $vola['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $vola['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $vola['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $vola['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $vola['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $vola['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $vola['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $vola['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div> 
    
            <div id="Laxmipur">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $laxmipur['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $laxmipur['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $laxmipur['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $laxmipur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $laxmipur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $laxmipur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $laxmipur['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $laxmipur['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $laxmipur['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $laxmipur['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $laxmipur['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $laxmipur['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $laxmipur['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $laxmipur['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $laxmipur['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $laxmipur['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $laxmipur['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $laxmipur['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Noakhali">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $noakhali['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $noakhali['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $noakhali['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $noakhali['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $noakhali['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $noakhali['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $noakhali['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $noakhali['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $noakhali['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $noakhali['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $noakhali['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $noakhali['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $noakhali['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $noakhali['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $noakhali['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $noakhali['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $noakhali['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $noakhali['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Feni">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $feni['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $feni['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $feni['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $feni['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $feni['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $feni['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $feni['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $feni['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $feni['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $feni['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $feni['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $feni['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $feni['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $feni['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $feni['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $feni['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $feni['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $feni['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
                
            <div id="Chittagong">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $chittagong['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $chittagong['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $chittagong['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $chittagong['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $chittagong['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $chittagong['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $chittagong['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $chittagong['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $chittagong['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $chittagong['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $chittagong['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $chittagong['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $chittagong['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $chittagong['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $chittagong['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $chittagong['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $chittagong['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $chittagong['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Khagrachari">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $khagrachari['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $khagrachari['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $khagrachari['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $khagrachari['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $khagrachari['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $khagrachari['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $khagrachari['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $khagrachari['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $khagrachari['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $khagrachari['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $khagrachari['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $khagrachari['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $khagrachari['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $khagrachari['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $khagrachari['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $khagrachari['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $khagrachari['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $khagrachari['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="Rangamati">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $rangamati['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $rangamati['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $rangamati['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rangamati['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rangamati['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rangamati['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $rangamati['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $rangamati['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $rangamati['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $rangamati['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $rangamati['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $rangamati['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $rangamati['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $rangamati['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $rangamati['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $rangamati['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $rangamati['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $rangamati['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
   
            <div id="Bandorban">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $bandorban['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $bandorban['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $bandorban['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bandorban['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bandorban['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bandorban['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $bandorban['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $bandorban['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $bandorban['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $bandorban['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $bandorban['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $bandorban['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $bandorban['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $bandorban['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $bandorban['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $bandorban['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $bandorban['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $bandorban['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div>
    
            <div id="CoxBazar">
			<div class="district">
					<div class="title">
						<h1>জেলা : <?php echo $coxbazar['district'] ;?></h1>
					</div>
					<div class="content">
						<h4>কৃষি অঞ্চল : <?php echo $coxbazar['agri_zone'] ;?></h4>
						<h4>চাষযোগ্য জমি : <?php echo $coxbazar['land'] ;?> হেক্টর</h4>
					</div>
					</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $coxbazar['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $coxbazar['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $coxbazar['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district2">
					<div class="only-content">
						<h4>গড় উৎপাদন : <?php echo $coxbazar['avg_produce'] ;?> লাখ মে. টন </h4>
						<h4>সর্বোচ্চ উৎপাদিত ফসল : <?php echo $coxbazar['max_produce'] ;?> </h4>
						<h4>সর্বনিম্ন উৎপাদিত ফসল : <?php echo $coxbazar['min_produce'] ;?> </h4>
					</div>
				</div>
				<div class="district3">
					<div class="title">
						<h1>উৎপাদিত ফসলসমূহ </h1>
					</div>
					<div class="content">
						<h4><?php echo $coxbazar['crops'] ;?></h4>
					</div>
				</div>
				<div class="district-soil">
					<div class="title">
						<h1>মাটির বিবরন</h1>
					</div>
					<div class="content">
						<h4>মাটির ধরন: <?php echo $coxbazar['soil_type'] ;?>,  উর্বরতা শ্রেনী : <?php echo $coxbazar['fertile_class'] ;?></h4>
						<h4>সেচ পদ্ধতি : <?php echo $coxbazar['irrigation_process'] ;?></h4>
					</div>
				</div>
				<div class="district-weather">
					<div class="title">
						<h1>আবহাওয়া বিবরন </h1>
					</div>
					<div class="content">
						<h4>গড় বৃষ্টিপাত: <?php echo $coxbazar['avg_rain'] ;?> মিমি </h4>
						<h4>গড় তাপমাত্রা : <?php echo $coxbazar['avg_temp'] ;?> ডিগ্রি সে. </h4>
						<h4>গড় সর্বোচ্চ তাপমাত্রা : <?php echo $coxbazar['avg_max_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় সর্বনিম্ন তাপমাত্রা : <?php echo $coxbazar['avg_min_temp'] ;?> ডিগ্রি সে.</h4>
						<h4>গড় আদ্রতা : <?php echo $coxbazar['avg_hum'] ;?>% </h4>
					</div>	
				</div>
			</div> <!-- district text info -->

			<div class="social-popout">
				<a href="#a"><img id="facebook" src="images/social/facebook.png" /></a>
				<a href="#a"><img id="twitter" src="images/social/twitter.png" /></a>
				<a href="#a"><img id="g-plus" src="images/social/g-plus.png" /></a>
			</div>
	</div>
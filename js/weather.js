

navigator.geolocation.getCurrentPosition(onSuccess, onError);

function onSuccess(position) {
        
            var lat = position.coords.latitude ; 
            var lon = position.coords.longitude;  
            
                             
      xmlDoc=loadXMLDoc('http://api.openweathermap.org/data/2.5/weather?lat=' + lat + '&lon=' + lon + '&mode=xml');

      //x1=xmlDoc.getElementsByTagName('city');
      x2=xmlDoc.getElementsByTagName('temperature');
      x3=xmlDoc.getElementsByTagName('humidity');
      x4=xmlDoc.getElementsByTagName('weather');
      x5=xmlDoc.getElementsByTagName('sun');
      x6=xmlDoc.getElementsByTagName('speed');
      x7=xmlDoc.getElementsByTagName('direction');
      x8=xmlDoc.getElementsByTagName('pressure');
      
      
      
        //att1=x1.item(0).attributes.getNamedItem("name");
        
      att2=x2.item(0).attributes.getNamedItem("value");
      att3=x3.item(0).attributes.getNamedItem("value");
      att4=x4.item(0).attributes.getNamedItem("value");
      att5=x4.item(0).attributes.getNamedItem("icon");
      
      att6=x5.item(0).attributes.getNamedItem("rise");
      att7=x5.item(0).attributes.getNamedItem("set");
      att8=x6.item(0).attributes.getNamedItem("value");
      att9=x7.item(0).attributes.getNamedItem("name");
      att10=x2.item(0).attributes.getNamedItem("min");
      att11=x2.item(0).attributes.getNamedItem("max");
      att12=x8.item(0).attributes.getNamedItem("value");
      

      //var mintemparature = (att10.value - 273.15).toPrecision(3);
      //var maxtemparature = (att11.value - 273.15).toPrecision(3);
      //$('.min-max').append(' ' + mintemparature + ' &deg;C ~ ' + mintemparature + ' &deg;C' );
      
      //hum translate
      var hum = att3.value.split('');
      var x = translate(hum[0]);
      var y = translate(hum[1]);
      var z = translate(hum[2]);
      $('.hum').append('<p id="mid-text">' + x + y + z + "%" + '</p>' + '<p id="low-text">আর্দ্রতা</p>' );

      //speed translate
      var speed = att8.value.split('');
       x = translate(speed[0]);
       y = translate(speed[1]);
       z = translate(speed[2]);
       var m = translate(speed[4]);
      $('.speed').append('<p id="mid-text">' + x + y + z + m + '</p>' + '<p id="low-text">বাতাসের গতি(Mps)</p>');

      //air direction
      var air_dir = att9.value;
      var dir = translate(air_dir);
      $('.direction').empty().append('<p id="mid-text2">' + dir + '</p>' + '<p id="low-text">বাতাসের প্রবাহ</p>');

      //air pressure
      //air pressure translate
      var air = (att12.value*0.000986923266716).toPrecision(4);
      var airp = air.split('');
       x = translate(airp[0]);
       y = translate(airp[1]);
       z = translate(airp[2]);
       m = translate(airp[4]);
       var n = translate(airp[5]);
      $('.pressure').append('<p id="mid-text">' + x + y + z + m + n + '</p>' + '<p id="low-text">বাতাসের চাপ(atm)</p>');

      $('.icon-type').append('<img id="ic-image" src="images/icons/' + att5.value + '.png" />');
      console.log(att5.value);

      //weather condition name
      var cond_name = translate(att4.value);
      $('.sky').append('<p>' + cond_name + '</p>' );

      //temparature translate
      var temparature = (att2.value - 273.15).toPrecision(3);
      var temp = temparature.split('');
       x = translate(temp[0]);
       y = translate(temp[1]);
       z = translate(temp[2]);
       m = translate(temp[3]);
      $('.temp-value').append(' ' + x + y + z + m + ' &deg;সে' );


      

      //split to eliminate date
      var split1 = att6.value.split('T');
      var split2 = att7.value.split('T');

      //holds UTC time
      var timeA = split1[1];
      var timeB = split2[1];

      //split to convert as locale time
      var split3 = timeA.split(':');
      var split4 = timeB.split(':');

      //converting by substraction as absolute number
      var timeC = Math.abs(split3[0]-6);
      var timeD = Math.abs(split4[0]-6);

      //sun-rise-set translate
      var rise1 = timeC; 
      var rise2 = split3[1].split('');
       x = translate(rise1);
       y = translate(rise2[0]);
       z = translate(rise2[1]);

      //join the strings again
      //var time1 = timeC + ':' + split3[1] ;
      //var time2 = timeD + ':' + split4[1] ;

      $('.rise-value').append('ভোর ' + x + ':' + y + z );

      var set1 = timeD; 
      var set2 = split4[1].split('');
       x = translate(set1);
       y = translate(set2[0]);
       z = translate(set2[1]);


      $('.set-value').append('সন্ধ্যা ' + x + ':' + y + z );
      
    }

    // onError Callback receives a PositionError object
    //
    function onError(error) {
        alert('code: '    + error.code    + '\n' +
              'message: ' + error.message + '\n');
    }
    
    //will be called for loading xml document
 function loadXMLDoc(dname)
{
  if (window.XMLHttpRequest)
    {
      xhttp=new XMLHttpRequest();
    }
  else
    {
      xhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }

  xhttp.open("GET",dname,false);
  xhttp.send();
  return xhttp.responseXML;
} //finished of loading xml doc


  function translate(str)
  {
    if (str == 0)
     {
      return '০' ;
     }

    else if (str == 1)
     {
      return '১' ;
     }
    else if (str == 2)
     {
      return '২' ;
     }
    else if (str == 3)
     {
      return '৩' ;
     }
    else if (str == 4)
     {
      return '৪' ;
     }
    else if (str == 5)
     {
      return '৫' ;
     }
    else if (str == 6)
     {
      return '৬' ;
     }
    else if (str == 7)
     {
      return '৭' ;
     }
    else if (str == 8)
     {
      return '৮' ;
     }
    else if (str == 9) 
     {
      return '৯' ;
     }
     else if (str == 17) 
     {
      return '৫' ;
     }

     else if (str == undefined) 
     {
      return '' ;
     }

     else if (str == '.') 
     {
      return '.' ;
     }
     else if (str == 'North') 
     {
      return 'উত্তর দিকে' ;
     }
     else if (str == 'North-northeast' || str == 'North-NorthEast' || str == 'North-Northeast') 
     {
      return 'উত্তর-উত্তরপূর্ব দিকে' ;
     }
     else if (str == 'NorthEast' || str == 'Northeast' || str == 'northeast') 
     {
      return 'উত্তরপূর্ব দিকে' ;
     }
     else if (str == 'East') 
     {
      return 'পূর্ব দিকে' ;
     }
     else if (str == 'SouthEast' || str == 'Southeast' || str == 'southeast') 
     {
      return 'দক্ষিন-পূর্ব দিকে' ;
     }
     else if (str == 'South-SouthEast' || str == 'South-southeast' || str == 'South-Southeast') 
     {
      return 'দক্ষিন-দক্ষিনপূর্ব দিকে' ;
     }
     else if (str == 'South') 
     {
      return 'দক্ষিন দিকে' ;
     }
     else if (str == 'South-SouthWest' || str == 'South-southwest' || str == 'South-Southwest') 
     {
      return 'দক্ষিন-দক্ষিনপশ্চিম দিকে' ;
     }
     else if (str == 'SouthWest' || str == 'Southwest' || str == 'southwest') 
     {
      return 'দক্ষিন-পশ্চিম দিকে' ;
     }
     else if (str == 'West') 
     {
      return 'পশ্চিম দিকে' ;
     }
     else if (str == 'NorthWest' || str == 'Northwest' || str == 'northwest') 
     {
      return 'উত্তর-পশ্চিম দিকে' ;
     }
     else if (str == 'North-NorthWest' || str == 'North-Northwest' || str == 'North-northwest') 
     {
      return 'উত্তর-উত্তরপশ্চিম দিকে' ;
     }
     else if (str == 'East-SouthEast' || str == 'East-southeast' || str == 'East-Southeast') 
     {
      return 'পূর্ব-দক্ষিনপূর্ব দিকে' ;
     }
     else if (str == 'Sky is Clear' || str == 'sky is clear') 
     {
      return 'আকাশ পরিষ্কার' ;
     }
  }

  function showWeather()
  {
    var city = $('#district-list option:selected').val();
    var loc = ',bd'; 
            
                             
      xmlDoc=loadXMLDoc('http://api.openweathermap.org/data/2.5/weather?q=' + city + loc + '&mode=xml');

      //x1=xmlDoc.getElementsByTagName('city');
      x2=xmlDoc.getElementsByTagName('temperature');
      x3=xmlDoc.getElementsByTagName('humidity');
      x4=xmlDoc.getElementsByTagName('weather');
      x5=xmlDoc.getElementsByTagName('sun');
      x6=xmlDoc.getElementsByTagName('speed');
      x7=xmlDoc.getElementsByTagName('direction');
      x8=xmlDoc.getElementsByTagName('pressure');
      
      
      
        //att1=x1.item(0).attributes.getNamedItem("name");
        
      att2=x2.item(0).attributes.getNamedItem("value");
      att3=x3.item(0).attributes.getNamedItem("value");
      att4=x4.item(0).attributes.getNamedItem("value");
      att5=x4.item(0).attributes.getNamedItem("icon");
      
      att6=x5.item(0).attributes.getNamedItem("rise");
      att7=x5.item(0).attributes.getNamedItem("set");
      att8=x6.item(0).attributes.getNamedItem("value");
      att9=x7.item(0).attributes.getNamedItem("name");
      att10=x2.item(0).attributes.getNamedItem("min");
      att11=x2.item(0).attributes.getNamedItem("max");
      att12=x8.item(0).attributes.getNamedItem("value");
      

      //var mintemparature = (att10.value - 273.15).toPrecision(3);
      //var maxtemparature = (att11.value - 273.15).toPrecision(3);
      //$('.min-max').append(' ' + mintemparature + ' &deg;C ~ ' + mintemparature + ' &deg;C' );
      
      //hum translate
      var hum = att3.value.split('');
      var x = translate(hum[0]);
      var y = translate(hum[1]);
      var z = translate(hum[2]);
      $('.hum').empty().append('<p id="mid-text">' + x + y + z + "%" + '</p>' + '<p id="low-text">আর্দ্রতা</p>' );

      //speed translate
      var speed = att8.value.split('');
       x = translate(speed[0]);
       y = translate(speed[1]);
       z = translate(speed[2]);
       var m = translate(speed[4]);
      $('.speed').empty().append('<p id="mid-text">' + x + y + z + m + '</p>' + '<p id="low-text">বাতাসের গতি(Mps)</p>');

      //air direction
      var air_dir = att9.value;
      var dir = translate(air_dir);
      $('.direction').empty().append('<p id="mid-text2">' + dir + '</p>' + '<p id="low-text">বাতাসের প্রবাহ</p>');

      //air pressure
      //air pressure translate
      var air = (att12.value*0.000986923266716).toPrecision(4);
      var airp = air.split('');
       x = translate(airp[0]);
       y = translate(airp[1]);
       z = translate(airp[2]);
       m = translate(airp[4]);
       var n = translate(airp[5]);
      $('.pressure').empty().append('<p id="mid-text">' + x + y + z + m + n + '</p>' + '<p id="low-text">বাতাসের চাপ(atm)</p>');

      $('.icon-type').empty().append('<img id="ic-image" src="images/icons/' + att5.value + '.png" />');
      console.log(att5.value);
      $('.sky').empty().append('<p>' + att4.value + '</p>' );

      //temparature translate
      var temparature = (att2.value - 273.15).toPrecision(3);
      var temp = temparature.split('');
       x = translate(temp[0]);
       y = translate(temp[1]);
       z = translate(temp[2]);
       m = translate(temp[3]);
      $('.temp-value').empty().append(' ' + x + y + z + m + ' &deg;সে' );


      

      //split to eliminate date
      var split1 = att6.value.split('T');
      var split2 = att7.value.split('T');

      //holds UTC time
      var timeA = split1[1];
      var timeB = split2[1];

      //split to convert as locale time
      var split3 = timeA.split(':');
      var split4 = timeB.split(':');

      //converting by substraction as absolute number
      var timeC = Math.abs(split3[0]-6);
      var timeD = Math.abs(split4[0]-6);

      //sun-rise-set translate
      var rise1 = timeC; 
      var rise2 = split3[1].split('');
       x = translate(rise1);
       y = translate(rise2[0]);
       z = translate(rise2[1]);

      //join the strings again
      //var time1 = timeC + ':' + split3[1] ;
      //var time2 = timeD + ':' + split4[1] ;

      $('.rise-value').empty().append('ভোর ' + x + ':' + y + z );

      var set1 = timeD; 
      var set2 = split4[1].split('');
       x = translate(set1);
       y = translate(set2[0]);
       z = translate(set2[1]);


      $('.set-value').empty().append('সন্ধ্যা ' + x + ':' + y + z );
  }
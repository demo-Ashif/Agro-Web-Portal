
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/view-update.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css_infoBank/myown.css" />

    <script src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js" charset="utf-8"></script>
</head>
<body>
    <div id="header">
        <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="mainpage.php">মূলপাতা</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="info_update.php">জেলা তথ্য</a></li>
                    <li><a href="crop_infobank_update.php">তথ্য ব্যাংক</a></li>
                    <li class="active"><a href="#a">কৃষি নিউজ</a></li>
                    <li><a href="tools_info_update.php">প্রযুক্তি তথ্য</a></li>
                </ul>
            <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="খুঁজুন">
            </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="http://placehold.it/20x20" alt="Profile Image" style="display: inline-block !important"/><b class="caret grey"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
            </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
    </div>

    <div class="hero-unit">
        <div class="container">
            <div id="info-title" class="alert alert-error fade in">
                <h4>কৃষি নিউজ তথ্য দেখার এবং হালনাগাদ করবার জন্য</h4>
            </div>
            <table class="table">
                <tr class="active">
                    <th style = "text-align:center;" width="40%">টাইটেল</th>
                    <th style = "text-align:center;" width="40%">নিউজ</th>
                    <th style = "text-align:center;" width="20%">#</th>      
                </tr>
                <tr class="success">
                    <th width="40%"><textarea width="35%" id="tbox6" class="form-control input-sm" rows="2"></textarea></th>
                    <th width="40%"><textarea width="65%" id="tbox6" class="form-control input-sm" rows="2"></textarea></th>
                    <th width="20%">
                        <button type="submit" id="filter-button" class="btn btn-primary " onclick="showdetails()">পরবর্তী</button>
                    </th>     
                </tr>
                <tr class="warning"></tr>
                <tr class="danger"></tr>
                <tr class="info"></tr>
            </table>
            <div class="row">
                <h3><label id="no-label" class="label-des col-md-3 label label-primary">Primary2</label></h3>
                <div class="col-md-6">
                    <button  type="submit" name='submit' id="next-button" class="btn btn-success " onclick="showdetails()">তথ্য হালনাগাদ</button>
                    <img id="loader" src="images/loader.gif" style="height:30px; width:30px; display:none;">
                    <img id="updated" src="images/success.png" style="height:25px; width:25px; display:none;">
                </div>  
            </div>
        </div>
    </div>


            
    <script>

    function showdetails() {

        var data1 = document.getElementById("tbox1").value;
        var data2 = document.getElementById("tbox2").value; 
        var data3 = document.getElementById("tbox3").value; 
        var data4 = document.getElementById("tbox4").value; 
        var data5 = document.getElementById("tbox5").value; 
        var data6 = document.getElementById("tbox6").value;
        var data7 = document.getElementById("tbox7").value;
        var data8 = document.getElementById("tbox8").value;
        var data9 = document.getElementById("tbox9").value; 
        var data10 = document.getElementById("tbox10").value; 
        var data11= document.getElementById("tbox11").value; 
        var data12 = document.getElementById("tbox12").value; 
        var data13 = document.getElementById("tbox13").value; 
        var data14 = document.getElementById("tbox14").value; 

        //var dataset = clicked_id;
        var district = $('#district-box').val();
        //var value = $('#'+box_id).val();
        //console.log(value);
        $('#loader').show();
        //$('#'+img_id + ' .image-loader').show();
        //setInterval(function(){alert("Hello")},3000);
        $.ajax({
            type: "POST",
            url: "update_action.php",
            data: {data1:data1,data2:data2,data3:data3,data4:data4,data5:data5,data6:data6,data7:data7,data8:data8,data9:data9,data10:data10,data11:data11,data12:data12,data13:data13,data14:data14,district:district},
            dataType: 'json',
            success: function(data, textStatus, jqXHR)
             {
                $('#loader').hide();
                $('#updated').show();
                document.getElementById("tbox1").value = data.b;
                document.getElementById("tbox2").value = data.c;
                document.getElementById("tbox3").value = data.d;
                document.getElementById("tbox4").value = data.e;
                document.getElementById("tbox5").value = data.f;
                $("#tbox6").html(data.g);
                document.getElementById("tbox7").value = data.h;
                $("#tbox8").html(data.i);
                document.getElementById("tbox9").value = data.j;
                document.getElementById("tbox10").value = data.k;
                document.getElementById("tbox11").value = data.l;
                document.getElementById("tbox12").value = data.m;
                document.getElementById("tbox13").value = data.n;
                document.getElementById("tbox14").value = data.o;
                
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                console.log("Some error happened");
            }
        });
        
        
    }
</script>
        
    
</body>
</html>
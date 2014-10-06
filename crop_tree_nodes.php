<?php

  include("district_info_php.php");
    header('Content-type: text/html; charset=utf-8');
    include("connect.php");
    session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Agro Search</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <!-- stylesheets -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/login.css" type="text/css" media="screen" />
    <link rel="stylesheet" type="text/css" href="css/navstyle.css" />
    <link rel="stylesheet" type="text/css" href="css/buttons.css" />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" type="text/css" href="css/popup.css" />
    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/node-style.css" type="text/css" media="screen" />
    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/all-local.js" charset="utf-8"></script>
    <script type="text/javascript" src="js/d3.min.js"></script>


</head>


<body>
<div id="crop-header">
    <div id="header">
      <div id="logo"></div>
      <div id="nav-bar">
            <div id="upper-part"></div>
            <div id="nav-bar1">
                <div class="container">
                <section class="main">
                <div class="wrapper-demo">
                    <div id="dd" class="wrapper-dropdown-2" tabindex="1">বাংলার ফসল
                        <ul class="dropdown">
                        <?php
                            if (isset($_SESSION['user'])) {
                            echo "<li><a href='crop_info_bank.php'><i class='icon-adjust icon-large'></i>ফসলের পাতা</a></li>";
                            echo "<li><a href='crop_tree_nodes.php'><i class='icon-adjust icon-large'></i>ফসলের পরিচিতি</a></li>";
                            echo "<li><a href='info_update.php'><i class='icon-adjust icon-large'></i>তথ্য হালনাগাদ</a></li>";
                        }
                        else {
                            echo "<li><a href='crop_info_bank.php'><i class='icon-adjust icon-large'></i>ফসলের পাতা</a></li>";
                            echo "<li><a href='crop_tree_nodes.php'><i class='icon-adjust icon-large'></i>ফসলের পরিচিতি</a></li>";
                        }
                        ?>
                        </ul>
                    </div>
                </div>
                </section>
                </div>
            </div>
            <div id="nav-ico1">
                <div class="icon-image1">
                    <a class="button-secondary pure-button" href="#weather-forecast">আবহাওয়া</a>
                </div>
            </div>
            <div id="nav-ico2">
                <div class="icon-image2">
                    <a class="button-secondary pure-button" href="#">আর্কাইভ</a>
                </div>
            </div>
            <div id="nav-bar2">
                <div class="container">
                <section class="main">
                <div class="wrapper-demo">
                    <div id="dd2" class="wrapper-dropdown-2" tabindex="1">কৃষি উপকরন
                        <ul class="dropdown">
                            <li><a href="#agri-tools"><i class="icon-adjust icon-large"></i>কৃষি প্রযুক্তি</a></li>
                            <li><a href="#"><i class="icon-adjust icon-large"></i>কৃষি প্রতিষ্ঠান</a></li>
                        </ul>
                    </div>
                </div>
                </section>
                </div>
            </div>
        </div>
      <div id="login-system">
            <?php
                if (isset($_SESSION['user'])) {

                    echo "<a id='admin-welcome' class='button-secondary pure-button' href='#b'>";echo $_SESSION['user'];echo "</a>";
                    echo "<a id='admin-logout' class='button-secondary pure-button' href='logout.php?page=crop_tree_nodes'>লগআউট</a>";
                }
                elseif (isset($_SESSION['userlogin'])) {

                    echo "<a id='admin-welcome' class='button-secondary pure-button' href='#b'>";echo $_SESSION['userlogin'];echo "</a>";
                    echo "<a id='admin-logout' class='button-secondary pure-button' href='logout.php?page=crop_tree_nodes'>লগআউট</a>";
                }
                else{
                    echo "<a id='admin-login' class='button-secondary pure-button' href='#a'>এডমিন প্রবেশ</a>";
                    echo "<a id='user-login' class='button-secondary pure-button' href='project_reg.php'>সাইট প্রবেশ</a>";
                }
                
            ?>
        </div>  
    </div>
</div>
<!-- Popup div for login Form -->
<div id="form" > 
    <form name="login-form" class="login-form" action="admin_login.php" method="post">
    <div id="admin-header">
        <div class="admin-icon"><img id="img-admin" src="images/admin.png"></div>
        <div class="admin-text">Admin Login</div>
    </div>
    <div id="user-part">
        <div class="user-box">
            <div class="user-icon"><img id="img-user" src="images/user.png"></div>
            <div class="text-box">
                <input name="username" type="text" class="input username"  required = "required" placeholder="Username"/><!--END USERNAME-->
            </div>
        </div>
        <div class="user-box">
            <div class="user-icon"><img id="img-pass" src="images/pass.png"></div>
            <div class="text-box">
                <input name="password" type="password" class="input password" required = "required" placeholder="******"/><!--END PASSWORD-->
            </div>
        </div>
    </div>
    <div id="admin-footer">
        <div class="btn-box1">
            <input type="submit" name="submit" value="Login" class="button" /><!--END LOGIN BUTTON-->
        </div>
        <div class="btn-box2">
            <input type="submit" name="submit" value="Close" class="close" /><!--END REGISTER BUTTON-->
        </div>
    </div>  
    </form>
</div>
<!--END WRAPPER-->
<!-- load the d3.js library -->  
<script>

d3.json("nodes.json", function(error, treeData) {
  root = treeData[0];
root.x0 = height / 2;
root.y0 = 0;
  function collapse(d) {
    if (d.children) {
      d._children = d.children;
      d._children.forEach(collapse);
      d.children = null;
    }
  }

  root.children.forEach(collapse);
  update(root);


});

// ************** Generate the tree diagram  *****************

var zoom = function() {
    var scale = d3.event.scale,
        translation = d3.event.translate,
        tbound = -height * scale,
        bbound = height * scale,
        lbound = (-width + margin.right) * scale,
        rbound = (width - margin.left) * scale;
    // limit translation to thresholds
    translation = [
        Math.max(Math.min(translation[0], rbound), lbound),
        Math.max(Math.min(translation[1], bbound), tbound)
    ];
    svg.attr("transform", "translate(" + translation + ")" + " scale(" + scale + ")");
}

var margin = {top: 20, right: 120, bottom: 20, left: 120},
  width = 1200 - margin.right - margin.left,
  height = 800- margin.top - margin.bottom;
  
var i = 0,
  duration = 750,
  root;
 
var tree = d3.layout.tree()
  .size([height, width]);
 
var diagonal = d3.svg.diagonal()
  .projection(function(d) { return [d.y, d.x]; });
 
var svg = d3.select("body").append("svg")
  .attr("width", width + margin.right + margin.left)
  .attr("height", height + margin.top + margin.bottom)
  .append("g")
  .attr("transform", "translate(" + margin.left + "," + margin.top + ")");
 
//root = treeData[0];
//root.x0 = height / 2;
//root.y0 = 0;
  
//update(root);

d3.select(self.frameElement).style("height", "800px");
 
function update(source) {
 
  // Compute the new tree layout.
  var nodes = tree.nodes(root).reverse(),
    links = tree.links(nodes);
 
  // Normalize for fixed-depth.
  nodes.forEach(function(d) { d.y = d.depth * 180; });
 
  // Update the nodes…
  var node = svg.selectAll("g.node")
    .data(nodes, function(d) { return d.id || (d.id = ++i); });
 
  // Enter any new nodes at the parent's previous position.
  var nodeEnter = node.enter().append("g")
    .attr("class", "node")
    .attr("transform", function(d) { return "translate(" + source.y0 + "," + source.x0 + ")"; })
    .attr("xlink:href", function(d) { return d.url; })
    .on("click", click);

    
 
  /*nodeEnter.append("circle")
    .attr("r", 1e-6)
    .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });*/

   nodeEnter.append("svg:a")
    .attr("xlink:href", function(d){return d.url;})  // <-- reading the new "url" property
    .append("svg:circle")
    .attr("r", 1e-6)
    .attr("target", "_blank")
    .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });
    
 
  nodeEnter.append("text")
    .attr("x", function(d) { return d.children || d._children ? -13 : 13; })
    .attr("dy", ".35em")
    .attr("text-anchor", function(d) { return d.children || d._children ? "end" : "start"; })
    .text(function(d) { return d.name; })
    .style("fill-opacity", 1e-6);
 
  // Transition nodes to their new position.
  var nodeUpdate = node.transition()
    .duration(duration)
    .attr("transform", function(d) { return "translate(" + d.y + "," + d.x + ")"; });
 
  nodeUpdate.select("circle")
    .attr("r", 10)
    .style("fill", function(d) { return d._children ? "lightsteelblue" : "#fff"; });
 
  nodeUpdate.select("text")
    .style("fill-opacity", 1);
 
  // Transition exiting nodes to the parent's new position.
  var nodeExit = node.exit().transition()
    .duration(duration)
    .attr("transform", function(d) { return "translate(" + source.y + "," + source.x + ")"; })
    .remove();
 
  nodeExit.select("circle")
    .attr("r", 1e-6);
 
  nodeExit.select("text")
    .style("fill-opacity", 1e-6);
 
  // Update the links…
  var link = svg.selectAll("path.link")
    .data(links, function(d) { return d.target.id; });
 
  // Enter any new links at the parent's previous position.
  link.enter().insert("path", "g")
    .attr("class", "link")
    .attr("d", function(d) {
    var o = {x: source.x0, y: source.y0};
    return diagonal({source: o, target: o});
    });
 
  // Transition links to their new position.
  link.transition()
    .duration(duration)
    .attr("d", diagonal);
 
  // Transition exiting nodes to the parent's new position.
  link.exit().transition()
    .duration(duration)
    .attr("d", function(d) {
    var o = {x: source.x, y: source.y};
    return diagonal({source: o, target: o});
    })
    .remove();
 
  // Stash the old positions for transition.
  nodes.forEach(function(d) {
  d.x0 = d.x;
  d.y0 = d.y;
  });
}

d3.select("svg")
        .call(d3.behavior.zoom()
        .scaleExtent([0.5, 5])
        .on("zoom", zoom));

 
// Toggle children on click.
function click(d) {
  if (d.children) {
  d._children = d.children;
  d.children = null;
  } else {
  d.children = d._children;
  d._children = null;
  }
  update(d);
}

</script>
 
  </body>
</html>
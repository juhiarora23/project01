<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>assets/css/style.css">
 
</head>
<body>
    
<div class ="row">
            <div class ="col-md-6 col-sm-6" >
          <img class="img-responsive"  src="<?php echo base_url(''); ?>assets/images/logo1.jpg" alt="Chania" width="130" height="120" padding-left="10px"/>
         
     </div>
  
   
    <div class ="col-md-6 col-sm-6">
        <div style='margin-top:70px; padding-left:250px'> <h1><small>The Best Concrete Company</small></h1></div>
        
     </div>
    
  </div>
    

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
    <div class="navbar-header">
        <a class="navbar-brand" href="#">Cretek Concrete</a>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      
    <li><a href="http://localhost/project1">HomePage</a></li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href>Client
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="http://localhost/project1/welcome/add">Add Client</a></li>
                <li><a href="http://localhost/project1/welcome/delete_client">View Client</a></li>
            </ul>
      </ul>
    </div>

</nav>
    

</body>
</html>


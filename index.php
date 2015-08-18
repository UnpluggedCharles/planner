<?php
    $host     = "localhost";
    $user     = "root";
    $password = "38317liz";
    $dbname   = "equipmaster";
    
    # Make the connection
    $conn = mysqli_connect($host, $user, $password,$dbname);
    # Check connection    
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }   
?>

<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/ico_Main.jpg">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS-->
    <link href="/bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap-3.3.4-dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap-3.3.4-dist/css/theme.css">
    <!--<link href="/bootstrap-3.3.4-dist/css/signin.css" rel="stylesheet">-->
    <link href="/css/css_fe_search.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.3/angular.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  </head>

  
<body role="document">
<!-- Fixed NAVBAR
================================================== -->
   <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Planner</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Plant <span class="caret"></span></a>
                          <ul class="dropdown-menu">
                            
                            <li><a href="#">D-NC</a></li>
                            <li><a href="#">D-BTX</a></li>
                            <li><a href="#">D-BD/TBA</a></li>
                                                        
                            <li role="separator" class="divider"></li>
                            <!--<li class="dropdown-header">Nav header</li>-->
                            <li><a href="#">D-EG1</a></li>
                            <li><a href="#">D-EG2</a></li>
                            <li><a href="#">D-AS</a></li>
                            <li><a href="#">D-SM</a></li>
                            <li><a href="#">D-GE</a></li>
                            
                            <li role="separator" class="divider"></li>
                            <!--<li class="dropdown-header">Nav header</li>-->
                            <li><a href="#">D-PE1</a></li>
                            <li><a href="#">D-PE2</a></li>
                            <li><a href="#">D-PP1</a></li>
                            <li><a href="#">D-PP2</a></li>
                            
                            <li role="separator" class="divider"></li>
                            <!--<li class="dropdown-header">Nav header</li>-->
                            <li><a href="#">D-OS/WWT</a></li>
                            <li><a href="#">Warehouse</a></li>
                          </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>        
                                                                                       
    <div class="container theme-showcase" role="main">
        
        <div class="jumbotron" >
            <h1 align="center">쉬울수록 차근차근 바쁜일도 차례차례</h1>
        </div>
        <div class="page-header">
            <h1 align="center">Search Equipment Number</h1>
        </div>
        <div class="page-header" align="center">
            <form class="form-inline" 
                  action="SearchEquipNo.php" 
                  method="post" 
                  autocomplete="on">
                <label >키워드 검색2222</label>
                <input  type="text" 
                        class="form-control " 
                        id="SearchEquipNo" 
                        name="SearchEquipNo" 
                        placeholder="예) 201 또는 pgc" 
                        width="800px">
                <button type="submit" class="btn btn-primary">검색</button>

            </form>
        
        </div>                                            
    </div>  
    <article>
        <?php
            $sql = "SELECT * FROM equiplist where plant='B10'";
            $result = mysqli_query($conn, $sql);
            echo mysqli_num_rows($result);
            if(mysqli_num_rows($result)>0){
                while($row=mysql_fetch_array($result)){ 
                    $id_arr[] = $row['id'];
                    $plant_arr[] = $row['plant'];
                    $equipno2_arr[] = $row['EquipNo2'];

                    #echo json_encode($plant_arr);
                    echo $row['id'].$row['EquipNo2']."<br>";
                } 

            }else{
                echo "0 results";
            }
            mysqli_close($conn);
        ?>
    </article>
       

    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/bootstrap-3.3.4-dist/js/jquery.min.js"></script>
    <script src="/bootstrap-3.3.4-dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/bootstrap-3.3.4-dist/js/ie10-viewport-bug-workaround.js"></script>
    
    
  

</body></html>

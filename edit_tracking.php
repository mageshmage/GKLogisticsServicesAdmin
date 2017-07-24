<?php
require_once("db.php");
if(count($_POST)>0) {
    $sql = "UPDATE tracking set TrackId='" . $_POST["trackId"] . "', Location='" . $_POST["location"] . "' WHERE Id='" . $_POST["Id"] . "'";
    mysqli_query($conn,$sql);
    $message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM tracking WHERE Id='" . $_GET["Id"] . "'";
$result = mysqli_query($conn,$select_query);
$row = mysqli_fetch_array($result);
?>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>GKLogisticsService</title>

        <!-- Bootstrap Core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

        <!-- Plugin CSS -->
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

        <!-- Theme CSS -->
        <link href="css/creative.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

        <![endif]-->

    </head>

    <body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll">
                    <img src="img/logo.jpg" class="img-responsive" alt="">
                </a>
                <a class="navbar-brand page-scroll" href="#page-top">GKLogisticsService</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div align="middle" class="header-content">
            <div align="middle" class="header-content-inner">

                <form name="frmUser" method="post" action="">
                    <div style="width:500px;">
                        <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                        <div align="right" style="padding-bottom:5px;"><a href="home.php" class="link"><img alt='List' title='List' src='Admin/images/list.png' width='15px' height='15px'/> List Tracking</a></div>
                        <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="table table-bordered">
                            <tr class="tableheader">
                                <td align="middle" colspan="2">Edit Tracking</td>
                            </tr>
                            <tr>
                                <td><label>TrackId</label></td>
                                <td><input type="hidden" name="Id" class="txtField" value="<?php echo $row['Id']; ?>" ><input type="text" name="trackId" readonly="readonly" class="txtField" value="<?php echo $row['TrackId']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label>Location</label></td>
                                <td><input type="text" name="location" class="txtField" autocomplete="off" placeholder="Please Update the Location" value="<?php echo $row['Location']; ?>"></td>
                            </tr>

                            <tr>
                                <td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
                            </tr>
                        </table>
                    </div>
                </form>
            </div>
            <script>

                $("#historysearch").click(function(e) {
                    e.preventDefault();
                    $("#historylist").show();
                    commit(); // moved from the onClick attribute
                });

            </script>

        </div>

        </div>
    </header>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your service with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>91-9810105093</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a href="mailto:your-email@your-domain.com">Gk_courier@yahoo.co.in</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>


    <script src="../assets/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    </body>

    </html>
<?php
/**
 * Created by PhpStorm.
 * User: Magesh
 * Date: 3/23/17
 * Time: 1:18 AM
 */
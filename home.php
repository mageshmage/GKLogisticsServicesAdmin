<?php
require_once("db.php");
if(count($_POST)>0) {
    $sql = "SELECT * FROM tracking where trackid='" . $_POST["trackId"] . "'";
    $result = mysqli_query($conn,$sql);
}
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
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <img src="img/logo.jpg" alt=''/>
                        </li>
                        <li></li>
                        <li>
                            <a class="navbar-brand page-scroll" href="#page-top">GKLogisticsService</a>
                        </li>
                    </ul>
                </div>
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
                            <div align="right" style="padding-bottom:5px;"><a href="add_trackingdata.php" class="link"><img alt='Add' title='Add' src='Admin/images/add.png' width='15px' height='15px'/> Add Tracking Details</a></div>

                            <div class="input-group">
                                <span class="input-group-addon">TrackId</span>
                                <input id="msg" type="text" class="form-control" name="trackId" autocomplete="off" placeholder="Please Enter TrackId">
                            </div>
                            <br>
                            <div>
                                <input class="btn btn-primary" type="submit" name="submit" value="Track Now" onClick="commit()" id="historysearch">
                            </div>
                            <br>
                            <br>
                            <table border="0" cellpadding="10" cellspacing="5" width="500" class="table table-bordered">
                                <tr class="tableheader">
                                    <td align="middle" colspan="4">View Tracking</td>
                                </tr>
                                <tr class="listheader">
                                    <td>TrackId</td>
                                    <td>Location</td>
                                    <td>InsertDate</td>
                                    <td>Actions</td>
                                </tr>
                                <?php
                                $i=0;
                                if(count($_POST)>0) {
                                    while($row = mysqli_fetch_array($result)) {
                                        if($i%2==0)
                                            $classname="evenRow";
                                        else
                                            $classname="oddRow";
                                        ?>
                                        <tr class="<?php if(isset($classname)) echo $classname;?>">
                                            <td><?php echo $row["TrackId"]; ?></td>
                                            <td><?php echo $row["Location"]; ?></td>
                                            <td><?php echo $row["InsertDate"]; ?></td>
                                            <td><a href="edit_tracking.php?Id=<?php echo $row["Id"]; ?>" class="link"><img alt='Edit' title='Edit' src='Admin/images/edit.png' width='15px' height='15px' hspace='10' /></a>  <a href="delete_tracking.php?Id=<?php echo $row["Id"]; ?>"  class="link"><img alt='Delete' title='Delete' src='Admin/images/delete.png' width='15px' height='15px'hspace='10' /></a></td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                }
                                ?>
                            </table>
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


    <script>
        $(document).ready(function(){
            $(document).on('click', '#getEmployee', function(e){
                e.preventDefault();
                var empid = $(this).data('id');
                $('#employee-detail').hide();
                $('#employee_data-loader').show();
                $.ajax({
                    url: 'Tracking_Data.php',
                    type: 'POST',
                    data: 'empid='+ $('#Eid').val(),
                    dataType: 'json',
                    cache: false
                })
                    .done(function(data){


                        var r = JSON.parse(response);
                        var text = "";
                        var x;
                        for (x in r) {
                            $('#tracking').append('<tr><td>'+r[x]['trackid']+'</td><td>'+r[x]['location']+'</td></tr>');

                        }
                    })
                    .fail(function(){
                        $('#employee-detail').html('Error, Please try again...');
                        $('#employee_data-loader').hide();
                    });
            });
        });

    </script>


    </body>

    </html>
<?php
/**
 * Created by PhpStorm.
 * User: Magesh
 * Date: 3/23/17
 * Time: 1:18 AM
 */
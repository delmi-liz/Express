<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Distancias RapiTrans</title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/Logo1.ico">
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/App.css" rel="stylesheet" />
</head>

<body>


    <div class="jumbotron">
        <div class="container-fluid">
            <h1>Encuentra la distancia entre dos lugares. </h1>
            <p>Esta aplicación le ayudará a calcular sus distancias de viaje. </p>
            <form class="form-horizontal">
                <div class="form-group">
                    <label for="from" class="col-xs-2 control-label"><i class="far fa-dot-circle"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="from" placeholder="Origin" class="form-control">
                    </div>
                </div>
                <div class="form-group">

                    <label for="to" class="col-xs-2 control-label"><i class="fas fa-map-marker-alt"></i></label>
                    <div class="col-xs-4">
                        <input type="text" id="to" placeholder="Destination" class="form-control">
                    </div>

                </div>

            </form>

            <div class="col-xs-offset-2 col-xs-10">
                <button class="btn btn-info btn-lg " onclick="calcRoute();"><i class="fas fa-map-signs"></i></button>
            </div>
        </div>
        <div class="container-fluid">
            <div id="googleMap">

            </div>
            <div id="output">

            </div>
        </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAF7dUHdwpuUWaXYLSH9A4kKJiNAICljbY&libraries=places">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/js/Maindos.js"></script>
</body>

</html>
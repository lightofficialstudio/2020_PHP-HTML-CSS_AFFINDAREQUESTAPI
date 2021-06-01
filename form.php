<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>How to create Contact Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<style>
    .header {
        color: #36A0FF;
        font-size: 27px;
        padding: 10px;
    }
</style>
</head>
<body>
<div class="container">
<div class="page-header">
    <h1>Convert HTML to PDF in PHP with fpdf</h1>
</div>
<!-- Contact Form - START -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
//action page where pdf will be create and shown into the browser
                <form class="form-horizontal" method="post" action="createpdf.php">
                    <fieldset>
                        <legend class="text-center header" style="width:70%;">Contact us<span><img src="images/logo.png"></span></legend>
                        <div class="form-group">
                            <div class="col-md-8">
                               <input id="name" name="name" type="text" placeholder="Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-8">

                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact Form - END -->
</div>
</body>
</html>
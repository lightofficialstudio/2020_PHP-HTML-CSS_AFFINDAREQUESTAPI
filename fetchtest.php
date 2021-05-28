<!DOCTYPE html>
<html lang="en">
    <head>
    <title> upload API affinda </title>
    <!----------------------- Required Meta Tag----------------------->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , intital-scale=1.0">
    
    <!----------------------- BOOSTRAP CSS IMPORT ----------------------->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!----------------------- STYLESHEET IMPORT ----------------------->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-css/font.css">

    <!----------------------- SCRIPT IMPORT ----------------------->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!----------------------- UPLOAD JS ----------------------->
    <script async type="text/javascript" src="js/fetch-infomation.js"></script>

    </head>

    <body id="font">
        <div id="center-element"> 
            <h1> "หน้าทดสอบการดึงข้อมูล API มาใช้งาน และ แสดงผลบนเว็บไซต์แบบ list"</h1>
            <div class="align-self-center">
                <form name="form3">
                    <p>ค้นหาหมายเลข identifiler</p>
                        <div class="mb-3">
                            <input type="text" id="txtName3">
                            <input class="btn btn-dark" type="button" value="ค้นหา" onClick="onFetch()">
                        </div>
                </form>
            </div>
            <ul id="FetchData">
            </ul>   
        </div>
    </body>
</html>
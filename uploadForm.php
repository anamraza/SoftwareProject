
<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="https://s3.amazonaws.com/codecademy-content/courses/ltp/css/bootstrap.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://rawgit.com/wenzhixin/bootstrap-table/master/dist/bootstrap-table.min.css">
<style>

    .content{
        background-color: #eee;
        /*margin-top: -10px;*/
        border-radius: 5px;
    }

    .content #grades{
        font-size: 14px;
        color: #00b0ff;
    }

    .content h1{
        font-size: 16px;
        padding-bottom:5px;
        margin-left: -10px;
        text-transform:uppercase;
    }

    .nav #title{
        /*font-size: 16px;*/
    }

    #allCourses{
        margin-bottom: -15px;
    }

    .navbar{
        border-radius: 0px;
        background-color: #E6E6E6;
        color: #5a5a5a;
        font-size: 11px;
        font-weight: bold;
        text-transform:uppercase;
        /*margin-bottom: 0px;*/
    }

    .navbar form{
        padding-top: 10px;
    }
    .navbar #title{
        font-size: 12px;
    }


    .active1 {
        background-color: #ddd;
    }
   /* .panel-heading{
        background-color: #ddd;
        color: #00b0ff;
    }
*/

    #students{
        margin-left: 10px;
    }
    </style>
</head>

<body>

<div class="nav">
    <div class="container">

    
    <!-- http://getbootstrap.com/components/#navbar-component-alignment -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav pull-left">
                <li id="title"><a href="#">Software Project</a></li>
                <li class="active1"><a href="#">Home</a></li>
                <li data-toggle="dropdown"><a href="#">Programs</a></li>
            </ul>
        </div>    
    </nav>
    </div>
</div>

<div class="content">
    <div class="container">
<form action="insertdata.php" method="post" enctype="multipart/form-data">
Please choose a file: <input type="file" name="uploadFile"><br>
<input type="submit" name="submit" value="Upload File">
</form>
</div>
</div>

</body>
</html>

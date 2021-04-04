<html>
<head>
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../CSS/hover-min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet"/>
    <script src="../Js/jquery.js"></script>
    <script src="../Js/bootstrap.min.js"></script>
    <style>
        #menu{
            font-size: 18px;
            color: white;
        }
        #menu:hover{
            background: blue;
            color: white;
        }
    </style>
</head>
<body>

<div class="row">
    <div class="col-sm-12" style="height: 50px;padding:0px;width:100%;background: maroon;font-weight: bold; color:white;">


        <h3 class="text text-center" style="font-family: 'Times New Roman';">Welcome in AdminZone Management System</h3>
    </div>

</div>
</div>
<div class="row">
    <div class="col-sm-12">
        <h2 style="font-size:36px;text-align:center;height: 50px;width:100%;color:black;">Online Voting Management System</h2>

    </div>

    <div class="row" style="padding: 0px;min-height: 400px;">
        <div class="col-sm-12">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid" style="background:  maroon">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="dashboarda" id="menu">Dashboard</a></li>
                            <li><a href="addnotification" id="menu">Add_Notification</a></li>
                            <li><a href="viewregistration" id="menu">View_Registration</a></li
                            <li><a href="changepassworda" id="menu">Change_Password</a></li>
                            <li><a href="viewcomplaint" id="menu">View_Complaint</a></li>
                            <li><a href="viewcontact" id="menu">View_contact </a></li>
                            <li><a href="logouta" id="menu">Logout</a></li>
                        </ul>

                    </div>
                </div>
            </nav>
        </div>
        <div class="row">
            @yield('Content');
        </div>
    </div>

</div>
<div class="row">
    <div class="col-sm-12" style="text-align:center;background: maroon;font-family:'fantasy';font-weight: bold; color:white;">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
            <div>
                <h4>Copyright &copy; Arcane Programming Infotech Lucknow </h4>
            </div>
        </div>
        <div class="col-sm-4">
            <h6><font color="white">Designed by PRADYUMNA TIWARI</font></h6>
        </div>


    </div>
</div>
</body>
</html>
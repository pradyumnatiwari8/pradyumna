@extends('AdminZone/AdminMaster')
@section('Content')
    <style>
        .dv{
            height: 150px;
            width: 180px;
            background: maroon;
            margin-top: 5%;
            margin-left: 6%;
            margin-bottom: 5%;
            box-shadow: 5px 5px 20px 20px gray;
            text-align: center;
            font-size: 15px;
            display: inline-block;
            border-radius: 8px;
        }
        .dv:hover{
            background: blue;
            color: white;
        }
        .dv1{
            height: 200px;
            width: 250px;
            background: maroon;
            margin-top: 5%;
            margin-left: 7%;
            margin-bottom: 5%;
            box-shadow: 5px 5px 20px 20px gray;
            text-align: center;
            font-size: 25px;
            display: inline-block;
            border-radius: 8px;
        }
        .dv1:hover {
            background:blue;
            color: white;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-sm-3 dv"><font><span class="glyphicon glyphicon-dashboard" style="font-size: 100px;color:white;margin-top: 20px;"></span> </font>
                    <a href="dashboarda" type="mediya_type"><font color="white"><b>Dashboard</b></font> </a>
                </div>

                <div class="col-sm-3 dv"><font><span class="fa fa-comment-o" style="font-size: 100px;color:white; margin-top: 20px;"></span> </font>
                    <a href="viewcomplaint" type="mediya_type"><font color="white"><b>View_Complaint</b></font> </a>
                </div>
                <div class="col-sm-3 dv"><font><span class="fa fa-phone-square" style="font-size: 100px;color:white; margin-top: 20px;"></span> </font>
                    <a href="viewcontact" type="mediya_type"><font color="white"><b>View_Contact</b></font> </a>
                </div>


            <div class="col-sm-3 dv"><font><span class="fa fa-bell" style="font-size: 100px;color:white;margin-top: 20px;"></span> </font>
                <a href="addnotification" type="mediya_type"><font color="white"><b>Add_Notification</b></font> </a>
            </div>
        </div>


            <div class="col-sm-12">
                <div class="col-sm-4 dv1"><font><span class="fa fa-key" style="font-size: 100px;color:white; margin-top: 20px;"></span> </font>
                    <a href="changepassworda" type="mediya_type"><font color="white"><b>Change_Password</b></font> </a>
                </div>

                <div class="col-sm-4 dv1"><font><span class="fa fa-bar-chart" style="font-size: 100px;color:white; margin-top: 20px;"></span> </font>
                    <a href="viewregistration" type="mediya_type"><font color="white"><b>View_Registration</b></font> </a>
                </div>

               
                <div class="col-sm-4 dv1"><font><span class="fa fa-sign-out" style="font-size: 100px; color:white;margin-top: 20px;"></span> </font>
                    <a href="logouta" type="mediya_type"><font color="white"><b>Logout</b></font> </a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection()


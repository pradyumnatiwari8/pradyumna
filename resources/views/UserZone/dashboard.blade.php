@extends('UserZone/UserMaster')
@section('content')
    <style>
        .dv{
            height: 200px;
            width: 280px;
            background: teal;
            margin-top: 5%;
            margin-left: 5%;
            margin-bottom: 5%;
            box-shadow: 5px 5px 20px 20px gray;
            text-align: center;
            font-size: 35px;
            display: inline-block;
            border-radius: 8px;
        }
        .dv:hover{
            background: orangered;
            color: white;
        }
        .dv1{
            height: 200px;
            width: 450px;
            background: teal;
            margin-top: 5%;
            margin-left: 5%;
            margin-bottom: 5%;
            box-shadow: 5px 5px 20px 20px gray;
            text-align: center;
            font-size: 35px;
            display: inline-block;
            border-radius: 8px;
        }
        .dv1:hover {
            background: orangered;
            color: white;
        }
    </style>
    <div class="container-fluid">
   <div class="row">
       <div class="col-sm-12">
         <div class="col-sm-4 dv"><font><span class="glyphicon glyphicon-dashboard" style="font-size: 110px;margin-top: 20px;"></span> </font>
             <a href="dashboard" type="mediya_type"><font color="white"><b>Dashboard</b></font> </a>
       </div>
           <div class="col-sm-4 dv"><font><span class="fa fa-user" style="font-size: 110px;margin-top: 20px;"></span> </font>
               <a href="myprofile" type="mediya_type"><font color="white"><b>My Profile</b></font> </a>
           </div>
           <div class="col-sm-4 dv"><font><span class="fa fa-comment-o" style="font-size: 110px;margin-top: 20px;"></span> </font>
               <a href="complaint" type="mediya_type"><font color="white"><b>Complaint</b></font> </a>
           </div>
       </div>
           <div class="col-sm-12">
           <div class="col-sm-6 dv1"><font><span class="fa fa-key" style="font-size: 110px;margin-top: 20px;"></span> </font>
               <a href="changepassword" type="mediya_type"><font color="white"><b>Change Password</b></font> </a>
           </div>
           <div class="col-sm-6 dv1"><font><span class="fa fa-sign-out" style="font-size: 110px;margin-top: 20px;"></span> </font>
               <a href="logout" type="mediya_type"><font color="white"><b>Logout</b></font> </a>
           </div>
   </div>
   </div>
   </div>
   </div>
@endsection()
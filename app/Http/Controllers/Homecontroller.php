<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;



class Homecontroller extends Controller
{

    public function index()
    {
        return view("index");
    }

    public function registration()
    {
        DB::Connection()->getPdo();
        return  view("registration");
    }

    public function registrationcode(Request $req)
    {
        $name=$req->input('txtname');
        $fathersname=$req->input('txtfathersname');
        $gender=$req->input('txtgender');
        $email=$req->input('txtemail');
        $password=$req->input('txtpassword');
        $adhar=$req->input('txtadhar');
        $pan=$req->input('txtpan');
        $mobile=$req->input('txtmobile');
        $address=$req->input('txtaddress');
        $post=$req->input('txtpost');
        $district=$req->input('txtdistrict');
        $pincode=$req->input('txtpincode');
        $state=$req->input('txtstate');
        $photo=$req->file('pic');


        $photo->getClientOriginalName();
        $photo->getRealPath();
        $destinationPath='uploads';
        $photo->move($destinationPath,$photo->getClientOriginalName());

         DB::Connection()->getPdo();
        DB::table('tbl_registration')->insert(['Name'=>$name,'FathersName'=>$fathersname,'Gender'=>$gender,'Email'=>$email,'Password'=>$password,'AadharNumber'=>$adhar,'PanNumber'=>$pan,'MobileNumber'=> $mobile,'FullAddress'=>$address,'PostOffice'=>$post,'District'=>$district,'AreaPinCode'=>$pincode,'State'=>$state,'Images'=>$photo->getClientOriginalName()]);

        DB::table('tbl_login')->insert(['Email'=>$email,'Password'=> $password,'Type'=>'User','Date'=>'16-10-2020']);

        echo "<script>alert('Data Saved Successfully.....')</script>";

        return  view("registration");
    }


    public function login()
    {
        DB::Connection()->getPdo();
        return  view("login");
    }

    public function logincode(Request $req)
    {
        $type="";
        $email=$req->input('txtmail');

        $password=$req->input('txtpass');

        $res=DB::select("select * from tbl_login where Email='$email' and Password='$password'");
        $r=count($res);

        if ($r>0)
        {
            foreach ($res as $d)
            {
                $type=$d->Type;

                if($type=="User")
                {
                    session_start();
                    $_SESSION["uid"]=$email;
                    echo "<script>window.location.href='UserZone/dashboard'</script>";
                }
                elseif ($type=="Admin")
                {
                    session_start();
                    $_SESSION["aid"]=$email;
                    echo "<script>window.location.href='AdminZone/dashboarda'</script>";
                }
                else{
                    echo "<script>alert('Invalid UserId')</script>";
                }
            }
        }
     else
     {
         echo "<script>alert('Invalid UserId Password');window.location.href='login'</script>";
     }

        return  view("logincode,['Date'=>$res,'R'=>$r]");
    }


    public function aboutus()
    {
        return  view("aboutus");
    }

    public function notification()
    {
     $user=DB::Select('select * from tbl_notification');
        return  view("notification",['users'=>$user]);
    }

    public function contactus()
    {
        DB::Connection()->getPdo();
        return  view("contactus");
    }

    public function contactuscode(Request $req)
    {
        $name=$req->input('txtname');

        $email=$req->input('txtemail');

        $mobile=$req->input('txtmobile');

        $message=$req->input('msg');




        DB::Connection()->getPdo();
        DB::table('tbl_contactus')->insert(['Name'=>$name,'Email'=>$email,'Mobile'=> $mobile,'Message'=> $message]);
        echo "<script>alert('Data Saved Successfully.....')</script>";

        return  view("contactus");
    }


    public function dashboard()
    {
        return  view("../UserZone/dashboard");
    }




    public function myprofile()
{
 session_start();
 if(isset($_SESSION['uid'])){
     $a=$_SESSION['uid'];
     $sel=DB::Select("Select * from tbl_registration where Email='$a'");
     return view('UserZone/myprofile',['users'=>$sel]);
      }
 else{
     echo "<script>window.location.href='../login'</script>";
 }

    return  view("UserZone/myprofile");
}



    public function myprofilecode( Request $req)
    {
        session_start();
        $a=$_SESSION["uid"];

        $name=$req->input('txtname');

        $email=$req->input('txtemail');

        $mobile=$req->input('txtmob');

        $address=$req->input('txtadd');

        $adhar=$req->input('txtadhar');

        $affected=DB::table('tbl_registration')->where('Email',$a)->update(['Name'=>$name,'Email'=>$email,'MobileNumber'=>$mobile,'FullAddress'=>$address,'AadharNumber'=>$adhar]);
        echo "<script>window.location.href='/UserZone/myprofile';</script>";

        return  view("UserZone/myprofilecode");
    }






    public function complaint()
    {
        DB::Connection()->getPdo();
        return  view("../UserZone/complaint");
    }


    public function complaintcode(Request $req)
    {
        $name=$req->input('txtname');

        $email=$req->input('txtemail');

        $mobile=$req->input('txtmobile');

        $message=$req->input('msg');

        DB::Connection()->getPdo();
        DB::table('tbl_complaint')->insert(['Name'=>$name,'Email'=>$email,'Mobile'=> $mobile,'Message'=> $message]);
        echo "<script>alert(' Data Saved Successfully.....')</script>";

        return  view("../UserZone/complaint");
    }


    public function changepassword()
    {
        return  view("UserZone/changepassword");
    }


    public function changepasswordcode(Request $req)
    {

        $Old=$req->input('txtoldpass');
        $New=$req->input('txtnewpass');
        $Con=$req->input('txtconpass');

        session_start();
        $a=$_SESSION["uid"];
        if($Con==$New) {
            DB::table('tbl_login')->where(['Email' => $a, 'Password' => $Old])->update(['Password' => $New]);
            echo "<script>alert('Password Has been Changed....')</script>";
        } else
            {
                echo "<script>alert('Password has not changed')</script>";

        }

        return  view("UserZone/changepassword");
    }



    public function logout()
    {
        session_start();
        $a=$_SESSION['uid'];
        if($a!=null && $a!="")
        {
            unset($_SESSION["uid"]);
            echo"<script>window.location.href='../login';window.onbeforeunload =function () { return \"Your wor will be lost\";}</script>";
            session_destroy();
        }
        return  view('logout');
    }

    public function dashboarda()
    {
        return view("../AdminZone/dashboarda");

    }


    public function changepassworda()
    {
        return  view("AdminZone/changepassworda");
    }


    public function changepasswordacode(Request $req)
    {

        $Old=$req->input('txtoldpass');
        $New=$req->input('txtnewpass');
        $Con=$req->input('txtconpass');

        session_start();
        $a=$_SESSION["aid"];
        if($Con==$New) {
            DB::table('tbl_login')->where(['Email' => $a, 'Password' => $Old])->update(['Password' => $New]);
            echo "<script>alert('Password Has been Changed....')</script>";
        } else
        {
            echo "<script>alert('Password has not changed')</script>";

        }

        return  view('changepassworda');
    }


    public function viewcontact()
        {
            $user=DB::Select('select *  from tbl_contactus');
            return  view("../AdminZone/viewcontact",['users'=>$user]);
        }

    public function logouta()
    {

        session_start();
        $a=$_SESSION['aid'];
        if($a!=null && $a!="")
        {
            unset($_SESSION["aid"]);
            echo"<script>window.location.href='../login';window.onbeforeunload =function () { return \"Your wor will be lost\";}</script>";
            session_destroy();
        }

        return  view("../AdminZone/logouta");
    }



    public function viewcomplaint()
    {
        $user=DB::Select('select *  from tbl_complaint');
        return  view("../AdminZone/viewcomplaint",['users'=>$user]);
    }


    public function viewregistration()
    {
     $user=DB::Select('select *  from tbl_registration');
        return  view("../AdminZone/viewregistration",['users'=>$user]);
    }

    public function addnotification()
    {

        return  view("AdminZone/addnotification");
    }

    public function addnotificationcode(Request $req)
    {
       $msg=$req->input('message');
       DB::Connection()->getPdo();
       DB::table('tbl_notification')->insert(['Message'=>$msg]);
       echo "<script>alert('Data Save Successfull')</script>";

        return  view("../AdminZone/addnotification");
    }






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

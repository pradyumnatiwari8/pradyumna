@extends('GeneralMaster')
@section('content')

    <div class="row">
        <form action="logincode" method="post"  enctype="multipart/form-data">
        <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-8 panel panel-body" style="min-height: 250px;height: 270px;width: 400px; box-shadow: 0px 0px 20px 10px teal;margin-top: 20px;margin-bottom: 30px;">

                <i class="fa fa-user icon" style=" color:maroon;font-size: 20px;width: 30px;"></i>     <label style="font-size: 20px;color: maroon;font-family: thomba">Email/Mobile No.</label>
                                <input type="text" name="txtmail" placeholder="Enter Your Email/Mobile No."  class="form-control"/><br>

                <i class="fa fa-key icon" style=" color:maroon;font-size: 20px;width: 30px;"></i> <label style="font-size: 20px;color: maroon;font-family: thomba">Password</label>
                                 <input type="password" value="" id="myInput" placeholder="Enter Your Password" name="txtpass" class="form-control"/><br>


                                <input type="checkbox" onclick="myFunction()"> Show Password
                                         <br>



                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <input type="submit" name="submit" Value="Submit" class="btn btn-success"style="margin-bottom: 10px;margin-top: 10px;"/>

            </div>



        </div>
        </form>
    </div>


<script>
function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}
</script>

@endsection()
@extends('GeneralMaster')
@section('content')

    <div class="row">
    <div class="col-sm-12">
        <div class="col-sm-2"></div>
        <div class="col-sm-8 panel panel-body" style="min-height: 240px; box-shadow: 0px 0px 20px 10px teal;margin-top: 20px;margin-bottom: 30px;">

            <div class="row">
                <form action="contactuscode" method="post"  enctype="multipart/form-data">
                <div class="col-sm-12">

                    <div class="col-sm-6">
                        <label style="font-size: 20px;color: maroon;font-family: thomba">Name</label>
                        <input type="text" name="txtname" placeholder="Enter Your Name"  class="form-control"/>

                        <label style="font-size: 20px;margin-top:10px;color: maroon;font-family: thomba">Email</label>
                        <input type="email" name="txtemail" placeholder="Enter Your Email"  class="form-control"/>

                        <label style="font-size: 20px;color: maroon;margin-top: 10px;font-family: thomba">Mobile Number</label>
                        <input type="text" name="txtmobile" placeholder="Enter Your Mobile No."  class="form-control"/>
                    </div>
                    <div class="col-sm-6" >
                        <label style="font-size: 20px;color: maroon;font-family: thomba">Message</label>
                        <textarea name="msg" placeholder="Enter Message" style="min-height:170px;" class="form-control"></textarea>
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" name="submit" Value="Submit" class="btn btn-success"style="margin-bottom: 10px;margin-top: 10px;"/>

                    </div>
                </div>
                </form>
            </div>
    </div>
</div>


@endsection()
@extends('UserZone/UserMaster')
@section('content')
  @foreach($users as $use)
      <form action="myprofilecode" method="post">
           <div class="col-sm-4">
               <img src="../uploads/{{$use->Images}}" style="margin-left:45%;border:2px solid black;border-radius:100%;margin-top: 10px;height: 200px;width: 200px;">

           </div>
    <div class="col-sm-4">
        <label style="font-size: 20px;color: maroon;font-family: thomba;";>Email</label>
        <input type="email" value="{{$use->Email}}" class="form-control" readonly name="txtemail" style="color: black;">
        <label style="font-size: 20px;color: maroon;font-family: thomba;";>Name</label>
        <input type="text" value="{{$use->Name}}" class="form-control"  name="txtname" style="color: black;">
        <label style="font-size: 20px;color: maroon;font-family: thomba;";>Mobile</label>
        <input type="number" value="{{$use->MobileNumber}}" class="form-control"  name="txtmob" style="color: black;">
        <label style="font-size: 20px;color: maroon;font-family: thomba;";>Aadhar Number</label>
        <input type="number" value="{{$use->AadharNumber}}" class="form-control"  name="txtadhar" style="color: black;">
        <label style="font-size: 20px;color: maroon;font-family: thomba;";>Address</label>
        <input type="text" value="{{$use->FullAddress}}" class="form-control"  name="txtadd" style="color: black;">



        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
        <input type="submit" value=" Update Profile" class="btn btn-success" style="margin-bottom: 10px;margin-top: 10px;"/>

    </div>
      </form>
  @endforeach
@endsection()
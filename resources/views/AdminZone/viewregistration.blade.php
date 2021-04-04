@extends('AdminZone/AdminMaster')
@section('Content')
    <link href="../css/akash.css" rel="stylesheet">
    <script src="../css/akash1.js"></script>
    <script>
        $(document).ready(function (){
            $("#example").DataTable();
        })
    </script>
    <div class="row">
        <div class="col-sm-12">
            <div class="col-sm-2"></div>
            <div class="col-sm-8">
                <h3 align="center" style="margin-top: -10px;background: maroon;min-height: 30px;"><font color="white">View_Registration</font></h3>
                <hr/>
                <table class="table table-responsive" id="example">
                    <thead>

                    <tr style="background: maroon; color:white;">
                        <th>Name</th>
                        <th>Email</th>
                        <th>Aadhar</th>
                        <th>Mobile</th>
                        <th>Password</th>
                        <th>Address</th>
                        <th>Gender</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->Name}}</td>
                            <td>{{$user->Email}}</td>
                            <td>{{$user->AadharNumber}}</td>
                            <td>{{$user->MobileNumber}}</td>
                            <td>{{$user->Password}}</td>
                            <td>{{$user->FullAddress}}</td>
                            <td>{{$user->Gender}}</td>
                            <td>
                                <a href="../delete/{{$user->Name}}">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

@endsection()

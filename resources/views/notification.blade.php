@extends('GeneralMaster')
@section('content')
    <link href="css/akash.css" rel="stylesheet">
    <script src="css/akash1.js"></script>
<script>
    $(document).ready(function (){
        $("#example").DataTable();
    })
</script>
<div class="row">
    <div class="col-sm-12">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <h3 align="center" style="margin-top: -10px;background: teal;min-height: 30px;"><font color="white">Notification Details</font></h3>
             <hr/>
            <table class="table table-responsive" id="example">
                <thead>
                <tr style="background: teal; color:white;">
                    <th>Message</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->Message}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-sm-2"></div>
    </div>
</div>

@endsection()

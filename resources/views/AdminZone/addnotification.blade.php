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
        <form action="addnotificationcode" method="post">
        <div class="col-sm-12">


            <div class="col-sm-2"></div>

            <div class="col-sm-8 panel panel-body" style="min-height: 340px; border: 3px solid black;box-shadow: 0px 0px 20px 8px maroon;margin-top: 20px;margin-bottom: 30px;">

                <div>
                    <h2 align="center" style="margin-top: -10px;background: teal;"><font color="white">Notification</font></h2>
                    <input class="form-control" id="Message" name="message" required="required" type="text" style="min-height: 330px; text-align: center" placeholder=" Enter Notification">
                </div>
                <div>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="submit" name="submit" Value="Submit" class="btn btn-success" style="margin-top: 10px;margin-left: 90%;margin-bottom: 10px; margin-right: 10px;"/>

            </div>

        </div>
        </form>
    </div>

    <div class="col-sm-2"></div>


@endsection()
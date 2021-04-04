@extends('AdminZone/AdminMaster')
@section('Content')

    <div class="row">

        <div class="col-sm-12">
            <script>
                $(document).ready(function(){
                    $("#frm").submit(function(){
                        var t1=$("#txt1").val();
                        var t2=$("#txt2").val();
                        var t3=$("#txt3").val();

                        if(t1=="" || t1==null){

                            $("#sp1").text("Please enter old password").css("color","red");

                        }else if(t2==""|| t2==null){

                            $("#sp2").text("Please enter New password").css("color","red");

                        }else if (t3==""|| t3==null){

                            $("#sp3").text("Please Confirm password").css("color","red");
                        }else{
                            return true;
                        }

                    })
                })
            </script>
            <div class="col-sm-2"></div>
            <div class="col-sm-2"></div>
            <div class="col-sm-8 panel panel-body" style="min-height: 320px;height: 330px;width: 400px; box-shadow: 0px 0px 20px 10px teal;margin-top: 20px;margin-bottom: 30px;">
                <form action="changepasswordacode" method="post" id="frm">

                    <i class="fa fa-key icon" style=" color:maroon;font-size: 20px;width: 30px;"></i> <label style="font-size: 20px;color: maroon;font-family: thomba">Old Password</label>
                    <input type="password" value=""  name="txtoldpass" id="txt1" class="form-control"/><br>


                    <i class="fa fa-key icon" style=" color:maroon;font-size: 20px;width: 30px;"></i> <label style="font-size: 20px;color: maroon;font-family: thomba"> New Password</label>
                    <input type="password" value=""  name="txtnewpass" id="txt2" class="form-control"/><br>



                    <i class="fa fa-key icon" style=" color:maroon;font-size: 20px;width: 30px;"></i> <label style="font-size: 20px;color: maroon;font-family: thomba">Confirm Password</label>
                    <input type="password" value=""  name="txtconpass" id="txt3" class="form-control"/><br>


                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit"  class="btn btn-success"style="margin-bottom: 10px;margin-top: 10px;"/>
                </form>
            </div>

        </div>

    </div>
@endsection()
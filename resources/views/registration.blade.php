@extends('GeneralMaster')
@section('content')
            <div class="row">
                <div class="col-sm-12">
                      <div class="col-sm-2"></div>

                    <div class="col-sm-8 panel panel-body" style="min-height: 340px;box-shadow: 0px 0px 25px 10px teal;margin-top: 20px;margin-bottom: 30px;">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="registrationcode" method="post"  enctype="multipart/form-data">
                                <div>
                                    <h3 class="" style="margin-top: 5px;"><font color="teal">Please insert the Data Carefully...</font></h3><hr>
                                </div>
                                <div class="col-sm-4">

                                    <label style="font-size: 20px;color: maroon;font-family: thomba;";>Name</label>
                                    <input type="text" name="txtname" placeholder="Enter Your Name" autocomplete="off"  class="form-control" required/>

                                    <label style="font-size: 20px;color: maroon;font-family: thomba">Father's Name</label>
                                    <input type="text"name="txtfathersname" placeholder="Enter Your father Name" autocomplete="close" class="form-control"required/>

                                      <label style="font-size: 20px;color: maroon;font-family: thomba">Choose Gender</label>
                                               <select name="txtgender" class="form-control" required>
                                                   <option>Choose Gender</option>
                                                <option> Male </option>
                                                <option> Female</option>
                                                <option> other</option>
                                            </select>
                                    <label style="font-size: 20px;margin-top:10px;color: maroon;font-family: thomba">Email</label>
                                    <input type="email" name="txtemail" placeholder="Enter Your Email" autocomplete=off  class="form-control" required/>

                                    <label style="font-size: 20px;color: maroon;font-family: thomba">Password</label>
                                    <input type="password" name="txtpassword" placeholder="Enter Your Password" autocomplete="off"  class="form-control" required/>

                                </div>

                                <div class="col-sm-4" >
                                    <label style="font-size: 20px;color: maroon;font-family: thomba">Aadhar Number</label>
                                    <input type="number" name="txtadhar" minlength="10" maxlength="12" placeholder="Enter Your Adhar" autocomplete="off" class="form-control" required/>

                                    <label style="font-size: 20px;color: maroon;font-family: thomba">PAN Number</label>
                                    <input type="number" name="txtpan" minlength="10" maxlength="12" placeholder="Enter Your PAN NUMBER" autocomplete="off" class="form-control" required/>

                                    <label style="font-size: 20px;color: maroon;font-family: thomba">Mobile Number</label>
                                    <input type="tel" name="txtmobile" minlength="10" maxlength="12" placeholder="Enter Your Mobile No." autocomplete="off" class="form-control" required/>

                                    <label style="margin-top:10px;font-size: 20px;color: maroon;font-family: thomba">Full Address</label>
                                    <input type="text" name="txtaddress" placeholder="Enter Your Address" autocomplete="off" class="form-control" required/>


                                    <label style="font-size: 20px;color: maroon;font-family: thomba">Post Office</label>
                                    <input type="text" name="txtpost" placeholder="Enter Your Post office" autocomplete="off" class="form-control" required/>


                                </div>
                                <div class="col-sm-4">
                                    <label style="font-size: 20px;color: maroon;font-family: thomba">District</label>
                                    <input type="text" name="txtdistrict" placeholder="Enter Your District Name" autocomplete="off" class="form-control" required/>


                                    <label style="font-size: 20px;color: maroon;font-family: thomba">Area Pincode</label>
                                    <input type="text"name="txtpincode" placeholder="Enter PinCode" autocomplete="off" class="form-control" required/>


                                    <label style="font-size: 20px;color: maroon;font-family: thomba">State</label>
                                    <input type="text" name="txtstate" placeholder="Enter Your State Name" autocomplete="off" class="form-control"required/>

                                    <label for="exampleInputFile" style=" margin-top:10px;font-size: 20px;color: maroon;font-family: thomba">File input</label>
                                    <input type="file" name="pic"id="exampleInputFile" class="form-control" ><br>

                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <input type="submit" name="reset" Value="Reset" class="btn btn-danger"/>
                                    <input type="submit" name="submit" Value="Submit" class="btn btn-success"/>

                                </div>
                                </form>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-2"></div>
                </div>

            </div>

    @endsection()

@extends('layouts.app')

@section('content')


<div class="container">


    <div class="panel panel-default">
        <div class="panel-heading"><b>User Registration  form</b></div>
        <div class="panel-body">
            <form class="form-horizontal" method="post" action="{{url('/register-store')}}">
                {{ csrf_field() }}


                <div class="form-group">
                    <label class="control-label col-sm-2" for="userId"> ID:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="userId" name="userId" placeholder="">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="name"> Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter User Name">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Email:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter User Email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="userName">User Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter User Name">
                        
                    </div>
                </div>


                <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password:</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Desired Password">

                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="rePassword">Password:</label>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="rePassword" name="rePassword" placeholder="Retype Password">

                    </div>

                </div>

                <div class="form-group">
                    <label class="control-label col-sm-2" for="role">Role:</label>
                    <div class="col-sm-4">
                        <select id="role" name="role" class="form-control">
                          <option value="1">Option one</option>
                          <option value="2">Option two</option>
                      </select>

                  </div>   

              </div>


            <div class="form-group">
                    <label class="control-label col-sm-2" for="phoneNumber">Phone Number:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Enter Phone Number">

                    </div>

            </div>


             <div class="form-group">
                    <label class="control-label col-sm-2" for="pAddress">Permanent Number:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="pAddress" name="pAddress" placeholder="Enter  User Permanent Address">

                    </div>

            </div>


            <div class="form-group">
                    <label class="control-label col-sm-2" for="cAddress">Current Address:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="cAddress" name="cAddress" placeholder="Enter User Current Address">

                    </div>

            </div>

            <div class="form-group">
                    <label class="control-label col-sm-2" for="city">City:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="city" name="city" placeholder="City">

                    </div>

            </div>

            <div class="form-group">
                    <label class="control-label col-sm-2" for="zip">Zip:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">

                    </div>

            </div>


            <div class="form-group">
                    <label class="control-label col-sm-2" for="country">Country:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="country" name="country" placeholder="Country" value="Bangladesh">

                    </div>

            </div>


             <div class="form-group">
                    <label class="control-label col-sm-2" for="dob">Date Of Birth:</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="dob" name="dob" placeholder="Date of Birth">

                    </div>

            </div>



            <div class="form-group">
                    <label class="control-label col-sm-2" for="jDate">Joining Date:</label>
                    <div class="col-sm-6">
                        <input type="date" class="form-control" id="jDate" name="jDate" placeholder="Joining Date">

                    </div>

            </div>




            <div class="form-group">
                    <label class="control-label col-sm-2" for="employeeNumber">Employee Number:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="employeeNumber" name="employeeNumber" placeholder="Employee Number">

                    </div>

            </div>


              <div class="form-group">
                    <label class="control-label col-sm-2" for="employeeNumber">Employee Number:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="employeeNumber" name="employeeNumber" placeholder="Employee Number">

                    </div>

            </div>


            <div class="form-group">
                    <label class="control-label col-sm-2" for="branchId">Branch Id:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="branchId" name="branchId" placeholder="Enter Branch Id">

                    </div>

            </div>


              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-6">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>
<script>
  $(document).ready(function() {
    alert("hello");
  });  

</script>



@endsection

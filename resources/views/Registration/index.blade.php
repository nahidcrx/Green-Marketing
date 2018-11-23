<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<div align="center"><p style="color:white ;font-size: 40px;border:10px solid MediumSeaGreen;  ; border-radius: 0px; background:MediumSeaGreen; "><a href="{{'login'}}"  class="btn btn-primary" style="border-radius: 15px; position: absolute; left: 20px;"><--Back</a><b>Registration</b></p>
</div>
<br>
<div class="container">
        <form name="regform" action="" method="post" class="register" >
            {{csrf_field()}}
            <fieldset class="row1">
                <legend>Account Details
                </legend>
                <p>
                    <label>Fast Name : *</label>
                    <input type="text" onkeyup="validation()" name ="First_Name" id ="firstname" placeholder = "" value="{{old('First_Name')}}"> 
					<span id="msg1"></span> </br> </br>
					
                    <label>Last Name : *</label>
                    <input type="text" onkeyup="validation()" name ="Last_Name" id ="lirstname" placeholder = "" value="{{old('Last_Name')}}">
					<span id="msg2"></span>
                </p>
				<p>
				 <label> User Name : *</label>
					<input type ="text" onkeyup="validation()" name ="User_Name" id ="username" onfocusout="checkusername()" placeholder="" value="{{old('User_Name')}}">
					<span id="msg3"></span>
					
				</p>
                <p>
                    <label>Password : * </label>
                    <input type="password" onkeyup="validation()" name ="Password" id ="password" placeholder = ""> </br> </br>
                    <label>Confirm Password : * </label>
                    <input type="password" onkeyup="validation()" name ="Confirm_Password" id ="Cpassword" placeholder = "">
					<span id="msg4"></span>
                    
                </p>
				
            </fieldset>
            <fieldset class="row2">
                <legend>Personal Details
                </legend>
               
                <p>
                    <label>Phone :*
                    </label>
                    <input type="text" onkeyup="validation()" id="phn" name="Phone" maxlength="11" value="{{old('Phone')}}" >
					<span id="msg5"></span>
                </p>

                <p>
                    <label>Division :*
                    </label>
                    <select name="Division" class = "division">
						<option value="Dhaka">Dhaka</option>
						<option value="Chittagong">Chittagong</option>
						<option value="Rajshahi">Rajshahi</option>
						<option value="Khulna">Khulna</option>
						<option value="Barisal">Barisal</option>
						<option value="Sylhet">sylhet</option>
						<option value="Rangpur">Rangpur</option>
						<option value="Mymensingh">Mymensingh</option>
					</select>
                </p>
                <p>
                    <label>User Type : *
                    </label>
                    <select name="User_Type" >
                        <option value="buyer">Buyer</option>
                        <option value="seller">Seller</option>
                    </select>
                </p>
				 <p>
                    <label class="">E-mail :</label>
                    <input type="text" onkeyup="validation()" id="mail" name="Email"  class="long" placeholder="example@mail.com" value="{{old('Email')}}"/>
					<span id="msg6"></span>
					
                </p>
                <p>
                    <label class="">NID :*
                    </label>
                    <input onkeyup="validation()" id="nid" class="long"  type="text" name="NID" value="{{old('NID')}}" >
					<span id="msg7"></span>

                </p>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender : *</label>
                    <input type="radio" value="Male" name ="Gender" >
                    <label class="gender">Male</label>
                    <input type="radio" value="Female" name="Gender" >
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                    <select name="DB_Date" class="date" value="{{old('DB_Date')}}">
                        <option value="1">01
                        </option>
                        <option value="2">02
                        </option>
                        <option value="3">03
                        </option>
                        <option value="4">04
                        </option>
                        <option value="5">05
                        </option>
                        <option value="6">06
                        </option>
                        <option value="7">07
                        </option>
                        <option value="8">08
                        </option>
                        <option value="9">09
                        </option>
                        <option value="10">10
                        </option>
                        <option value="11">11
                        </option>
                        <option value="12">12
                        </option>
                        <option value="13">13
                        </option>
                        <option value="14">14
                        </option>
                        <option value="15">15
                        </option>
                        <option value="16">16
                        </option>
                        <option value="17">17
                        </option>
                        <option value="18">18
                        </option>
                        <option value="19">19
                        </option>
                        <option value="20">20
                        </option>
                        <option value="21">21
                        </option>
                        <option value="22">22
                        </option>
                        <option value="23">23
                        </option>
                        <option value="24">24
                        </option>
                        <option value="25">25
                        </option>
                        <option value="26">26
                        </option>
                        <option value="27">27
                        </option>
                        <option value="28">28
                        </option>
                        <option value="29">29
                        </option>
                        <option value="30">30
                        </option>
                        <option value="31">31
                        </option>
                    </select>
                    <select name="DB_Month" value="{{old('DB_Month')}}">
                        <option value="January">January
                        </option>
                        <option value="February">February
                        </option>
                        <option value="March">March
                        </option>
                        <option value="April">April
                        </option>
                        <option value="May">May
                        </option>
                        <option value="June">June
                        </option>
                        <option value="July">July
                        </option>
                        <option value="August">August
                        </option>
                        <option value="September">September
                        </option>
                        <option value="October">October
                        </option>
                        <option value="November">November
                        </option>
                        <option value="December">December
                        </option>
                    </select>
					<select name="DB_Year" class="year" value="{{old('DB_Year')}}">
                        <option value="1991">1991
                        </option>
                        <option value="1992">1992
                        </option>
                        <option value="1993">1993
                        </option>
                        <option value="1994">1994
                        </option>
                        <option value="1995">1995
                        </option>
                        <option value="1996">1996
                        </option>
                        <option value="1997">1997
                        </option>
                        <option value="1998">1998
                        </option>
                        <option value="1999">1999
                        </option>
                        <option value="2000">2000
                        </option>
                    
                    </select>
                    
                </p>
                <p>
                    <label>Nationality * 
					</label>
                    <select name="Nationality" >
                        <option value="Bangladeshi">Bangladeshi
                        </option>
                    </select>
                </p>

            </fieldset>

            @if($errors->any())
    
             <ul>
            @foreach($errors->all() as $err)
                <li>{{$err}}</li>
            @endforeach
            </ul>

             @endif
			   
            <div><input type="submit"class="btn btn-primary" onclick="return validation()" value="Register->" /></div><br>
						
        </form>
    </div>

</body>
</html>  
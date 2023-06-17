  <!-- Navigation -->
  <div class=" container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs-inline-block nav-logo" href="/"><img src="/images/logo-dark-inset.png" class="img-responsive" alt=""></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav js-nav-add-active-class" style="margin-top:-50px;">
             <li class="active"><a >FIND YOUR GYM </a></li>
            <li style="margin-top:17px">
             <select name="state" onChange="getCity(this.value)">
	<option value="">Select State</option>
	<option value="1">Andhra Pradesh</option>
	<option value="2">Arunachal Pradesh</option>
    <option value="3">Assam</option>
    <option value="4">Bihar</option>
    <option value="5">Chhattisgarh</option>
    <option value="6">Goa</option>
    <option value="7">Gujarat</option>
    <option value="8">Haryana</option>
    <option value="9">Himachal Pradesh</option>
    <option value="10">Jammu & Kashmir</option>
    <option value="11">Jharkhand</option>
    <option value="12">Karnataka</option>
    <option value="13">Kerala</option>
    <option value="14">Madhya Pradesh</option>
    <option value="15">Maharashtra</option>
    <option value="16">Manipur</option>
    <option value="17">Meghalaya</option>
    <option value="18">Mizoram</option>
    <option value="19">Nagaland</option>
    <option value="20">Odisha </option>
    <option value="21">Punjab</option>
    <option value="22">Rajasthan</option>
    <option value="23">Sikkim</option>
    <option value="24">Tamil Nadu</option>
    <option value="25">Telangana</option>
    <option value="26">Tripura</option>
    <option value="27">Uttar Pradesh</option>
    <option value="28">Uttarakhand</option>
    <option value="29">West Bengal</option>
        </select>
            </li>
           
            <li>city</li>
            <li style="margin-top:17px" id="citydiv">CITY</li>
            
            <li style="margin-top:9px"><a href="listing.php" >Search Gym</a></li>
                           </ul>
                           
          
        </div><!-- /.navbar-collapse -->
      </div>
      </div>
    </nav>
  </div>

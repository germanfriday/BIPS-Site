<?php include("includes/doc.php"); ?>
<body id="contact">
<div id="wrapper">
  <?php include("includes/header.php"); ?>
  <div id="content">
    <h2 class="sifrd">Contact Us</h2>
    <?php include("includes/contact_sub_nav.php"); ?>
    <div id="main_content">
    <img class="content_image" src="images/contact.jpg" alt="BIPS/Orchid sign" />
    <div class="clear"></div>
    <p>Tell us a little bit about yourself. Fill out the form below. Dr. Vasileff or one of our other expert staff members will evaluate your needs and contact you to discuss further.</p>
    <p>Dr. Vasileff is available for speaking engagements. Please call our office to discuss and schedule a presentation for your association or organization.</p>
      <form id="vasileff_form" action="process.php" >
      <p class="required">* indicates required field</p>
      <div id="form_1">
          <p>
            <label for="first_name">First Name <span class="required">*</span></label>
            <br />
            <input name="first_name" type="text" id="first_name"  tabindex="1" />
            <script type="text/javascript">
	            var first_name = new LiveValidation('first_name');
	            first_name.add(Validate.Presence, {failureMessage: "Please Provide Your First Name."});
	        </script>
          </p>
          <p>
            <label for="phone">Phone <span class="required">*</span></label>
            <br />
            <input name="phone" id="phone" type="text" tabindex="3" />
            <script type="text/javascript">
	            var phone = new LiveValidation('phone');
	            phone.add(Validate.Presence, {failureMessage: "Please Provide Your Phone Number."});
	        </script>
          </p>
          <p>
            <label for="street_address">Street Address</label>
            <br />
            <input name="street_address" id="street_address" type="text" tabindex="5" />
          </p>
          <p>
            <label for="state">State</label>
            <br />
            <select name="state" id="state" tabindex="7"><option value="" selected="selected"  >- Select a State -</option>
				<option value="AL">Alabama</option>
<option value="AK">Alaska</option>
<option value="AZ">Arizona</option>
<option value="AR">Arkansas</option>
<option value="CA">California</option>
<option value="CO">Colorado</option>
<option value="CT">Connecticut</option>
<option value="DE">Delaware</option>
<option value="DC">District Of Columbia</option>
<option value="FL">Florida</option>
<option value="GA">Georgia</option>
<option value="HI">Hawaii</option>
<option value="ID">Idaho</option>
<option value="IL">Illinois</option>
<option value="IN">Indiana</option>
<option value="IA">Iowa</option>
<option value="KS">Kansas</option>
<option value="KY">Kentucky</option>
<option value="LA">Louisiana</option>
<option value="ME">Maine</option>
<option value="MD">Maryland</option>
<option value="MA">Massachusetts</option>
<option value="MI">Michigan</option>
<option value="MN">Minnesota</option>
<option value="MS">Mississippi</option>
<option value="MO">Missouri</option>
<option value="MT">Montana</option>
<option value="NE">Nebraska</option>
<option value="NV">Nevada</option>
<option value="NH">New Hampshire</option>
<option value="NJ">New Jersey</option>
<option value="NM">New Mexico</option>
<option value="NY">New York</option>
<option value="NC">North Carolina</option>
<option value="ND">North Dakota</option>
<option value="OH">Ohio</option>
<option value="OK">Oklahoma</option>
<option value="OR">Oregon</option>
<option value="PA">Pennsylvania</option>
<option value="RI">Rhode Island</option>
<option value="SC">South Carolina</option>
<option value="SD">South Dakota</option>
<option value="TN">Tennessee</option>
<option value="TX">Texas</option>
<option value="UT">Utah</option>
<option value="VT">Vermont</option>
<option value="VA">Virginia</option>
<option value="WA">Washington</option>
<option value="WV">West Virginia</option>
<option value="WI">Wisconsin</option>
<option value="WY">Wyoming</option></select>
          </p>
          </div>
          <div id="form_2">
          <p>
            <label for="last_name">Last Name <span class="required">*</span></label>
            <br />
            <input name="last_name" id="last_name" type="text" tabindex="2" />
            <script type="text/javascript">
	            var last_name = new LiveValidation('last_name');
	            last_name.add(Validate.Presence, {failureMessage: "Please Provide Your Last Name."});
	        </script>
          </p>
          <p>
            <label for="email">Email <span class="required">*</span></label>
            <br />
            <input name="email" id="email" type="text" tabindex="4" />
            <script type="text/javascript">
	            var email = new LiveValidation('email');
	            email.add(Validate.Presence, {failureMessage: "Please Provide Your Email Address."});
	            email.add( Validate.Email );
	        </script>
          </p>
          <p>
            <label for="city">City</label>
            <br />
            <input name="city" id="city" type="text" tabindex="6" />
          </p>
          <p>
            <label for="zip">Zip</label>
            <br />
            <input name="zip" id="zip" type="text" tabindex="8" />
          </p>
          </div>
         <p>
         <label for="questions">Question or Comments?</label>
            <br />
         <textarea name="questions" id="questions" cols="60" rows="8"></textarea></p>
          <p>
            <input name="submit" type="submit" class="submit" value="Submit" tabindex="9" />
          </p>
        </form>
    </div>
  </div>
  <div class="clear"></div>
</div>
<?php include("includes/footer.php"); ?>

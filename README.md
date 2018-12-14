# is601faq1
<h3>Introduction</h3>
<h4>HoneypotRecaptcha</h4>
<p> Google Recaptcha/Honeypot is a system-designed to esatblish that a computer user is human.
It is use to prevent un-authorised atempts from spams.</p>

<h3>1. Basic Installation in PHP</h3>
<p>Add composer: composer require google/recaptcha "~1.1"</p>

<h3>2.Create g-reCaptcha</h3>
<p>https://google.com/recaptcha/admin#list</p>
<p>Register a new site:</p>
<li>Add label</li>
 <li>choose the type of recaptcha as reCAPTCHA V2</li>
  <li>select domain Herrokuapp</li>
   <li>click on register</li>
   
<h3>3.After Registration</h3>
<p>You will get Site key and Secret key.</p>

<h3>4.Backend Integration</h3>
<p> Created controller and added secret key.</p>
<p>Add links to app.blade.php</p>
<li>https://www.google.com/recaptcha/api.js
</li>
<li>Add Bootstrap link:"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"</li>
<li>Add j.query:"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js</li>
<li>Add verification to form that without enter the required data and click on recaptcha you will not be able to press the register button and return to same page.</li>
<p><Add verification form for reCaptcha</p>
<p>Added site key in register.blade.php</p>

<h3>5.Validation</h3>
<p>Run your application on heroku and you should be able to see the recaptcha on your register page</p>

<h3>6.Validate user authentication</h3>
<p>Enter your email and password and do not click on recaptcha, you should not be able to register your form.</p>

<h3>7.Test</h3>
<p>Run phpunit to verify the recaptcha test </p>
<li><p>create an unit test to check invalid recaptcha or user missed to click on recaptcha. According to that it give the success or failed/error. For example: if the user does not click on the recaptcha field/checkbox before click on the register button , the button will not work and navigate back to the same page as he/she has to click on the the g-reCaptcha field. And when you enter all required field along with recaptch field/checkbox you will successfully able to click on the register button and able to navihate to home page.</p></li>
<li><p>Created a feature test to check the recaptch "I'm not a humman" is empty or not and also check the status that it display on the register page. </p></li>

<h3>8.My herokuapp </h3>
<p>https://is601faq9.herokuapp.com/</p>

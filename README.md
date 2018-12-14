# is601faq1
<h3>Introduction</h3>
<p> Recaptcha is a system-designed to esatblish that a computer user is human.
It is use to prevent unauthorised atempts from spams.</p>

<h3>1. Basic Installation in PHP</h3>
<p>Add composer: composer require google/recaptcha "~1.1"</p>

<h3>2.Create g-reCaptcha</h3>
<p>https://google.com/recaptcha/admin#list</p>
<p>Register a new site:
<image src=file:///home/malvi/Downloads/recaptcha1.PNG></p>
<p>Add label, choose the type of recaptcha as reCAPTCHA V2, select domain Herrokuapp and click on register.</p>

<h3>3.After Registration</h3>
<p>You will get Site key and Secret key.</p>

<h3>4.Backend Integration</h3>
<p> Create controller and added secret key.</p>
<p>Add links to app.blade.php</p>
<li>https//www.google.com/recaptcha/api.js
</li>
<li>Add Bootstrap link</li>
<li>Add j.query</li>

<p><Add verification form for reCaptcha</p>
<p>Added site key in register.blade.php</p>

<h3>Validation</h3>
<p>Run your application on heroku and you should be able to see the recaptcha on your register page</p>

<h3>Validate user authentication</h3>
<p>Enter your email and password and do not click on recaptcha, you should not be able to register your form.</p>

<h3>Test</h3>
<p>Run phpunit to verify the recaptcha test </p>

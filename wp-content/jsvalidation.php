<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Submit Button Disabling</title>
	<link rel="stylesheet" href="https://github.com/haltersweb/Accessibility/blob/gh-pages/css/normalization.css" />
	<link rel="stylesheet" href="https://github.com/haltersweb/Accessibility/blob/gh-pages/css/base.css" />
	<link rel="stylesheet" href="https://github.com/haltersweb/Accessibility/blob/gh-pages/css/form.css" />
</head>
<body>
	<div class="container">
		<a href="#main" class="skip-link">Skip to main content</a>
		<div class="page-wrapper" id="main" role="main" tabindex="-1">
			<h1>Disabling Submit to Ensure Validation</h1>
			<p><a href="http://haltersweb.github.io/Accessibility/">View the full library of accessibility solutions.</a></p>
			<p>Two methods to disable form elements are used here:</p>
			<ul class="bullet">
				<li>The conditional form field for the cat's name uses the disabled attribute.</li>
				<li>The disabled submit button does not use the disabled attribute.  Instead it uses aria-disabled="true".</li>
			</ul>
			<h2>Using aria-disabled</h2>
			<p>Unlike the Cat's Name field which uses the disabled attribute, the Submit button uses the aria-disabled attribute so that:</p>
			<ul class="bullet">
				<li>The submit button still receives focus ensuring there is no confusion for screen-reader users wondering where the submit button went.</li>
				<li>When focus is given to the submit button it announces the disabled state of the button.</li>
				<li>The focused submit button will be able to announce all error messages that are keeping it disabled (by utilizing aria-describedby) to increase understanding.</li>
			</ul>
			<h2>Remember to do the following:</h2>
			<ul class="bullet">
				<li>Dim the disabled submit button with css.</li>
				<li>Assign aria-describedby to the button with space delimited ids for all error messaging.</li>
				<li>Block the submit button from triggering an action while aria-disabled is equal to "true".</li>
				<li>When all form fields are filled out correctly change aria-disabled="false", remove the dimming css, and allow the submit button to trigger the submit javascript action(s).</li>
			</ul>
			<h2>Example Form</h2>
			<div id="a11yForm">
				<form action="">
					<div class="form-row">
						<label for="firstName">First name</label><input type="text" name="firstName" id="firstName" aria-required="true" data-ok="false">
						<span class="error-msg" id="firstNameErr"></span>
					</div>
					<div class="form-row">
						<label for="lastName">Last name</label><input type="text" name="lastName" id="lastName" aria-required="true" data-ok="false">
						<span class="error-msg" id="lastNameErr"></span>
					</div>
					<div class="form-row">
						<label for="cat" class="auto-length">
							<input type="checkbox" name="cat" id="cat">
							Check if you have a cat.
						</label>
					</div>
					<div class="form-row">
						<label for="catName">Cat's name</label><input type="text" name="catName" id="catName" disabled>
					</div>
					<button type="submit" class="btn" aria-disabled="true" aria-describedby="firstNameErr lastNameErr">Submit</button>
				</form>
			</div>
			<h2>Code Sample</h2>
			<div data-code="a11yForm"></div>
		</div>
		<div class="overlay"></div>
		<div class="block-screen"></div>
		<div aria-live="polite" class="screen-reader-text"></div>
		<div role="alert" class="screen-reader-text"></div>
	</div>
	<script type="text/javascript" src="https://github.com/haltersweb/Accessibility/tree/gh-pages/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="https://github.com/haltersweb/Accessibility/tree/gh-pages/js/namespacing.js"></script>
	<script type="text/javascript" src="https://github.com/haltersweb/Accessibility/tree/gh-pages/js/accessibility-helpers.js"></script>
	<script type="text/javascript" src="https://github.com/haltersweb/Accessibility/tree/gh-pages/js/form-with-disabled.js"></script>
	<script type="text/javascript" src="https://github.com/haltersweb/Accessibility/tree/gh-pages/js/show-code.js"></script>
</body>
</html>
<!doctype HTML>
<html>
<head>
<meta charset="utf-8">
<title>UTM Tracking</title>
</head>
<body>
	<form action="UTM Tracking-Main.php" name="UTM" method="post">
    Department: <br /><input type="text" name="department" /><br /><br />
	Date: <br /><input type="text" id="datepicker" name="datepicker"><br /><br />
	Notes: <br /><input types="text" name="notes"><br /><br />
	URL:  <br /><input type="text" name="url" />
		<span class="error">*<?php echo $urlErr;?></span>
		<br /><br />
  		<fieldset name="radio1[]">
    <legend>Source: </legend>
    <label for="Home Page Slider">Home Page Slider</label>
    	<input type="radio" name="radio1" id="HomePageSlider">
    <label for="TMR News Letter">TMR Newsletter</label>
    	<input type="radio" name="radio1" id="TMRNewsLetter">
    <label for="AM Marketing">AM Marketing</label>
    	<input type="radio" name="radio1" id="AMMarketing"><br /><br />
	<label for="LM Marketing">LM Marketing</label>
    	<input type="radio" name="radio1" id="LMMarketing">
	<label for="Confernece Marketing">Conference Marketing</label>
    	<input type="radio" name="radio1" id="ConferenceMarketing">
	<label for="TMAP Marketing">TMAP Marketing</label>
    	<input type="radio" name="radio1" id="TMRMarketing">
	<label for="INTA Bulletin">INTA Bulletin</label>
    	<input type="radio" name="radio1" id="INTABulletin"><br /><br />
	<label for="LinkedIn">LinkedIn</label>
    	<input type="radio" name="radio1" id="LinkedIn">
	<label for="Facebook">Facebook</label>
    	<input type="radio" name="radio1" id="Facebook">
	<label for="Twitter">Twitter</label>
    	<input type="radio" name="radio1" id="Twitter">
	<label for="WeChat">WeChat</label>
    	<input type="radio" name="radio1" id="WeChat">
	<label for="Reddit">Reddit</label>
    <input type="radio" name="radio1" id="Reddit">

  </fieldset><span class="error">* <?php echo $radio1Err;?></span><br /><br />
	<fieldset name="radio2[]">
    <legend>Medium: </legend>
    <label for="e-blast">e-blast</label>
    	<input type="radio" name="radio2" id="e-blast">
    <label for="social">social</label>
    	<input type="radio" name="radio2" id="social">
    <label for="banner">banner</label>
    	<input type="radio" name="radio2" id="banner">
	<label for="external partner">external partner</label>
    	<input type="radio" name="radio2" id="externalPartner">
  </fieldset><span class="error">* <?php echo "$radio2Err";?></span><br /><br />
	Camaign Name: <br /><input type="text" name="Campaign" /><br /><br />
	Term/Keyword: <br /><input type="text" name="Term" /><br /><br />
	A/B Test: <br /><input type="text" name="Content" /><br /><br />
    <input type="submit" name="submit" value="Submit me!" />
	<input type="reset">
</form>
	<p>
	Here's your UTM Tracking Code:<br />
	<? $_GET['url']. "?utm_source=" . $_GET['radio1'] . "&utm_medium=" . $_GET['radio2'] . "&utm_campaign=" . $_GET['Campaign'] . "&utm_term=" . $_GET['Term'] . "&utm_content=" . $_GET['Content']?>
	</p>
</body>
</html>

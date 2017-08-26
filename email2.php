<?php
date_default_timezone_set('America/Chicago');

$page_title = 'Send Email';
include ('includes/header.html');

echo '<h1>Contact Form</h1>';

if (isset($_POST['submitted'])) {

	function spam_scrubber($value) {

		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:', );

		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== false) {
				return '';
			}
		}

		$value = str_replace(array("\r", "\n", "%0a", "%0d"), '', $value);

		return trim($value);

	}

	$scrubbed = array_map('spam_scrubber', $_POST);

	if (!empty($scrubbed['name']) && !empty($scrubbed['email']) && !empty($scrubbed['comments'])) {
		$body = "Name: {$scrubbed['name']}\n\n\Comments: {$scrubbed['comments']}";

		$body = wordwrap($body, 70);

		mail('mdkarr01@gmail.com', 'Contact Form Submission', $body, "From: {$scrubbed['email']}");
		echo '<em>Thank you for your message</em>';

		$_POST = array();

	} else {
		echo '<h2 style = color="C00">Please fill out all of the information</h2>';
	}// end of main if
}

?>

<h4>Please fill out the form to contact me</h4>

<form action="email2.php" method="post">
<p>Name: <input type="text" name="name" size="40" maxlength="80" value="<?php if (isset($_POST['name'])) {echo
	$_POST['name'];
}
?>" /></p>
<p>Email Address: <input type="text" name="email" size="40" maxlength="80" value="<?php if (isset($_POST['email'])) {echo
	$_POST['email'];
}
?>" /></p>
<p>Comments: <textarea name="comments" rows="5" cols="40" value="<?php if (isset($_POST['comments'])) {
	echo $_POST['comments'];
}
?>" /></textarea></p>
<p><input type="submit" name="submit" value="Send Email" /></p>
<input type="hidden" name="submitted" value="true" />
</form>

<?php
$_POST = array();
include ('includes/footer.html');
?>
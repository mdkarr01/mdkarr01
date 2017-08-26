<?php

if (isset($_POST['submitted'])) {
	function spam_scrubber($value) {
		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');

		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== FALSE) {
				return '';
			}
		}

		$value = str_replace(array("\r", "\n", "%0a", "%0d"), '', $value);

		return trim($value);
	}//End spam scrubber.

	$scrubbed = array_map('spam_scrubber', $_POST);

	if (!empty($scrubbed['email']) && !empty($scrubbed['message'])) {
		$body = "Comments: {$scrubbed['message']}";
		$body = wordwrap($body, 70);

		//Send the email.
		mail('mdkarr01@gmail.com', 'Contact Form Submission', $body, "From: {$scrubbed['email']}");

		echo '<h1>Thanks</h1>
      <p>Sweet! Thanks for the email.</p>
      <a href="index.php" class="button">Back To Home Page</a>';

	} else {

		echo '<h1>Uh Oh...</h1>
      <p>There has been a problem. Please go back and try again.</p>
      <a href="index.php" class="button">Back To Home Page</a>';
	}

}

?>
<!-- I copied this off some site, don't have the time to learn PHP while learning CSS -->
<!-- And no I'm not giving you my email, a redirect is fine -->
<?php
if($_POST["Message"]) {
mail("aie7srmxg@mozmail.com", "Feedback:",
$_POST["Insert Your Message"]. "From: no_reply_feedback@simple-bear-website.com");
}
?>
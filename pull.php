<pre>
<?php
if (hash('sha1', $_GET['pw']) == '895f00452bb02cb5c394b42f7f2323448a22014e') {
  passthru("git pull");
}


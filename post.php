<?php
$a = $_POST['domain'];
$b = $_POST['title'];
$c = $_POST['extension'];
if (empty($a)) {
    $d = "https://www.google.com/search?q=$b filetype:$c";
  echo '<script>window.location = "'. $d .'"</script>';
} else {
    $e = "https://www.google.com/search?q=$b filetype:$c site:$a";
    echo '<script>window.location = "'. $e .'"</script>';
}

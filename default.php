<?php
// 301 Permanent Redirect to index.html
header("HTTP/1.1 301 Moved Permanently");
header("Location: index.html");
exit();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0;url=index.html">
    <title>Redirecting to Chicago Diamond Car...</title>
</head>
<body>
    <p>Redirecting to <a href="index.html">Chicago Diamond Car</a>...</p>
</body>
</html>

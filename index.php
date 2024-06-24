<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Desk</title>
</head>
<body>
    <?php
echo "My name is\n".
getenv("nome_completo") . "\n".
"I am" . "\n".
getenv("idade") . "\n".
"old.". "\n".
"I am from" . "\n".
getenv("cidade") . "\n".
"and my team leader is" . "\n".
getenv("teamLeader") . "\n".;

$image_url = "https://careers.recruiteecdn.com/image/upload/q_auto,f_auto,w_400,c_limit/production/images/BN5l/2dDjxgF-CXUi.png";
echo "<img src='" . $image_url . "' alt='Description of Image'>";
?>
</body>
</html>

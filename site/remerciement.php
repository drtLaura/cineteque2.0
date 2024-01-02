<?php
session_start();
//echo $_SESSION['id'];
$message = "Merci pour votre visite !";
?>

<!DOCTYPE html>
<html>
<head>
    
    <title>Remerciement</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            color: #333;
            font-size: 36px;
        }
    </style>
    <script src="savedata.js" onload="console.log('Le script savedata.js a été chargé avec succès')"></script>
</head>
<body>
        <script type="application/javascript"> 
            var data = JSON.parse('<?php echo json_encode($_SESSION['data']); ?>');
            savedata(data);
        </script>

        
    <h1><?php echo $message; ?></h1>
</body>
</html>

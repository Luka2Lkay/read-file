<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>average age of users</title>
</head>

<body>
    <section>
        <h1> Avarage age of users</h1>
<?php
    $filePath = "file.txt";

    $output = file_get_contents($filePath);

    $ages = explode("\n", $output);  // print values vertically as shown in the txt file

    $totalAge = 0;
    $i = 0;

    foreach($ages as $age){
        echo "<p class='center_align'>" . $age . "</p>";
        $totalAge = $totalAge + $age;
        $i++;
    }

    

    echo "The average age of users is " . ($totalAge/$i);

    var_dump($totalAge);
    var_dump($ages);

   
    
?>

</body>

</html>
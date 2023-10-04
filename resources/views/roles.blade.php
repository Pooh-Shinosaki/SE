<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roles</title>
</head>
<body>
        <?php
        foreach ($roles as $role){
        echo "<ul>";
        echo "<li>".$role["type"]."</li>";
            foreach($role["name"] as $name){
                echo $name."<br>";
            }
        echo "</ul>";
        }
        ?>
</body>
</html>
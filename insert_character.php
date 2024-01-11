<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $strong =  $_POST["strong"];
    $defence = $_POST["defence"];
    $agility = $_POST["agility"];
    $life = $_POST["life"];
    $magic = $_POST["magic"];
 
    $pdo = new PDO('mysql:host=localhost;dbname=game_db', 'root', '');


$query = "INSERT INTO making_table (name, strong, defence, agility, life, magic) VALUES (:name, :strong, :defence, :agility, :life, :magic)";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':strong', $strong);
$stmt->bindParam(':defence', $defence);
$stmt->bindParam(':agility', $agility);
$stmt->bindParam(':life', $life);
$stmt->bindParam(':magic', $magic);

if($stmt->execute()){
    echo '<p style="color:white; font-size: 24px; text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5); background-color:rgba(0, 0, 0, 0.5);"> キャラクターを作成しました</p>';
}else{
    echo '<p style="color:white; font-size: 24px; text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5); background-color:rgba(0, 0, 0, 0.5);">エラー：キャラクター作成に失敗しました</p>';
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録</title>
</head>
<style>
    body{
        background-image: url('pic07.jpg');
        background-size: cover;
        background-repeat: no-repeat;


    }
</style>
<body>
        <a href="result_3.php" class="button">キャラクターを確認</a>

        <style>
            .button{
                display: inline-block;
                padding: 10px 20px;
                background-color:rgba(0,0,0,0.5);
                color:white;
                font-weight: bold;
                font-size: 24px;
                text-decoration:none;
                border-radius:5px;
            }

            .button:hover{
                background-color:black;
            }


        </style>
</body>
</html>
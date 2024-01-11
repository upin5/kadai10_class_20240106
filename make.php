<?php






?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>making</title>
</head>
<style>
    body{
        background-image: url('visual04_pc.jpg');
        background-size: cover;
        background-repeat: no-repeat;

    }

</style>
<body>
 <div>
    <p style="color:white; font-size:24px; text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);">
        キャラクターメイキング
    </p>
 </div>
<div style="color:white;">
 <form action="insert_character.php" method="post">
    <label for="name" style="background-color: rgba(0, 0, 0, 0.5); font-size:24px;">
        Player Name >
    </label>
    <input type="text" name="name" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-size:36px" required><br><br>

</div>
<div style="color:white; font-size:24px; font-weight:bold; background-color: rgba(0, 0, 0, 0.5);">
    <p> Buttle Status </p>
</div>



<div style="color:white;">
<label for="strong" style="background-color: rgba(0, 0, 0, 0.5); font-size:24px; margin-right:16px;"> 腕　力 > </label>
<select name="strong" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-size:36px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br><br>
</div>    

<div style="color:white;">
<label for="defence" style="background-color: rgba(0, 0, 0, 0.5); font-size:24px; margin-right:16px;"> 防　御 > </label>
<select name="defence" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-size:36px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br><br>
</div>   

<div style="color:white;">
<label for="agility" style="background-color: rgba(0, 0, 0, 0.5); font-size:24px; margin-right:16px;"> 素早さ > </label>
<select name="agility" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-size:36px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br><br>
</div>   

<div style="color:white;">
<label for="life" style="background-color: rgba(0, 0, 0, 0.5); font-size:24px; margin-right:16px;"> 体　力 > </label>
<select name="life" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-size:36px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br><br>
</div>   

<div style="color:white;">
<label for="magic" style="background-color: rgba(0, 0, 0, 0.5); font-size:24px; margin-right:16px;"> 魔　法 > </label>
<select name="magic" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-size:36px;">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select><br><br>
</div>   

<input type="submit" style="background-color: rgba(0, 0, 0, 0.5); color:white; font-weight:bold;" value="キャラクターを作成">
</form>
</body>
</html>
<?php 
$pdo = new PDO('mysql:host=localhost;dbname=game_db', 'root', '');


$query = "SELECT * FROM ff7_table";
$stmt = $pdo->prepare($query);
$stmt->execute();
$ff7Characters = $stmt->fetchAll(PDO::FETCH_ASSOC);

$query = "SELECT * FROM making_table";
$stmt = $pdo->prepare($query);
$stmt->execute();
$makeCharacters = $stmt->fetchAll(PDO::FETCH_ASSOC);


$minTotalDifference = PHP_INT_MAX;
$closestCharacter = null;

foreach ($makeCharacters as $makeCharacter){
    $totalDifference = 0;

    foreach ($ff7Characters as $ff7Character){
        $difference = 0;

        $difference += abs($makeCharacter['strong'] - $ff7Character['strong']);
        $difference += abs($makeCharacter['defence'] - $ff7Character['defence']);
        $difference += abs($makeCharacter['agility'] - $ff7Character['agility']);
        $difference += abs($makeCharacter['life'] - $ff7Character['life']);
        $difference += abs($makeCharacter['magic'] - $ff7Character['magic']);

        $totalDifference += $difference;
        echo "キャラクター {$makeCharacter['name']} と {$ff7Character['name']} の差分: $difference<br>";
    }
        if($totalDifference < $minTotalDifference){
            $minTotalDifference = $totalDifference;
            $closestCharacter = $ff7Character;
        }

}
echo "初期の minTotalDifference: " . $minTotalDifference;

var_dump($closestCharacter);


echo '<p style="color:white; font-size: 24px; text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5); background-color:rgba(0, 0, 0, 0.5);">あなたのキャラクタータイプ：' . $closestCharacter['name'] . '</p>';


?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
</head>
<style>
    body{
    background-image: url('pic4.jpg');
        background-size: cover;
        background-repeat: no-repeat;
    }

    .character{
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .character img{
        max-width: 100px;
        margin-right:10px;
    }

    .character .info{
        flex-grow: 1;
    }

    .character .comment{
        font-style: italic;
    }

</style>

<body>
    <?php 
    
    $characters = [
        ['name' => 'クラウド', 'image' => 'cloud.png', 'comment'=>'クラウドタイプのキャラクターは物理攻撃から魔法攻撃までそつなくこなします。どんなタイプの敵にも対応することが可能ですが、一方で突出した能力はないため敵によってはサポートの存在が重要になります。'],
        ['name' => 'エアリス', 'image' => 'aerith.png','comment'=>'エアリスタイプのキャラクターは戦闘には向かない一方で、高い魔法適正と豊富な補助魔法を覚える潜在能力を持っています。そのため前線で戦う味方を回復したりバフでサポートすることで活躍できます。'],
        ['name' => 'ティファ', 'image' => 'tifa.png', 'comment'=>'ティファタイプのキャラクターは素早い身のこなしと打撃による制圧力のある戦闘力を持ちます。一方で魔法は苦手で使えないわけではありませんがその能力は最低限といったところです。'],
        ['name' => 'バレット', 'image' => 'barret.png', 'comment'=>'バレットタイプのキャラクターは高い耐久力と体力で前線で壁役として戦いを支えることができます。素早さや魔法は平均以下なので、立ち回りをするタイプではなく背後に常に味方を置いて敵からの攻撃を受けつづけることで真価を発揮します。'],
        ['name' => 'ユフィ', 'image' => 'yufi.png', 'comment' => 'ユフィタイプのキャラクターは突出した素早さと高い攻撃魔法特性で縦横無尽・神出鬼没な戦闘を得意とします。体力や防御は平均以下で一度攻撃を受けると一気に押し込まれる可能性があるので、遠距離攻撃主体の立ち回りで活躍できます。'],
        ['name' => 'セフィロス', 'image' => 'sephiroth.png', 'comment'=>'セフィロスタイプのキャラクターは圧倒的な戦闘力で、物理・魔法ともに最高レベルを有しています。弱点という弱点はないタイプですが、その戦闘力故に扱いに難があり使いこなすには相当の技量が必要です。使いこなせれば最強となります。']
    ];

    foreach($characters as $character){
        echo '<div class="character">';
        echo '<img src="' . $character['image'] . '"alt="' . $character['name'] . 'の画像">';
        echo '<div class="info">';
        echo '<h2 style="color:white; background-color:rgba(0,0,0,0.75);">' . $character['name'] . '</h2>';
        echo '<p class="comment" style="font-size:24px; color:white; background-color:rgba(0,0,0,0.5);">' . $character['comment'] . '</p>';
        echo '</div>';
        echo '</div>';
    }
    
    
    
    ?>    




</body>
</html>
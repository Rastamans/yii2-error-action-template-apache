<?php
use yii\helpers\Html;

$this->title = $name;
?>
<?php
error_reporting(0);
?>
<html><head>
    <?/*
<!--<title>404 Not Found</title>-->
    */
    ?>
    <title><?= Html::encode($this->title) ?></title>
</head><body>
<h1><?= Html::encode($message) ?></h1>
<p> <?= nl2br(Html::encode($exception)) ?></p>
<?/*
<h1>Not Found</h1>
<p>The requested URL was not found on this server.</p>
*/
?>
<hr>
<address>
    <?php
    echo $_SERVER['SERVER_SIGNATURE'];
    echo ' Server at ';
    echo $_SERVER['HTTP_HOST'];
    echo ' Port ';
    echo $_SERVER['SERVER_PORT'];
    ?>
</address>
</body></html>
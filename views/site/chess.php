<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\chessAppAsset;
use app\assets\ltAppAsset;

AppAsset::register($this);
chessAppAsset::register($this);
ltAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="page">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr valign="top">
            <td width="480">
                <div id="header"></div>
                <div id="body_txt">
                    <h1>Welcome to Chess Website !</h1>

                    <p><strong>Chess</strong> is a board game played between two players. It is played on a chessboard,   which is a square-checkered board with 64 squares arranged in an   eight-by-eight grid. At the start, each player controls sixteen pieces:   one king, one queen, two rooks, two knights, two bishops, and eight pawns. The object of the game is to checkmate the opponent's king, whereby the king is under immediate attack (in "check") and there is no way to remove or defend it from   attack on the next move.</p>
                    <p>The current form of the game emerged in Europe during the second half of the 15th century after evolving from a much   older game (Shatranj) of Indian origin. Aspects of art are found in chess   composition. Theoreticians have developed extensive chess strategies and tactics since the game's inception. One of the goals of early computer   scientists was to create a chess-playing machine. Chess is now deeply influenced by the   abilities of chess programs and the opportunity for online play. In 1997 Deep Blue became the first   computer to beat a reigning World Champion in a match when it defeated Garry Kasparov.</p>
                    <p>The tradition of organized competitive chess started in the 16th   century. The first official World Chess Champion, Wilhelm Steinitz, claimed his title in 1886; the current   World Champion is Viswanathan Anand. Chess is a recognized sport of the International Olympic Committee,   and is led by the FIDE. Today, chess is one of the world's most popular   games, played by millions of people worldwide at home, in clubs,   online, by correspondence, and in tournaments.</p>
                    <p><EM>From Wikipedia, the free encyclopedia</EM></p>
                </div>
            </td>
            <td><div id="logo">Chess Club</div>
                <div id="img02"></div>
                <div id="menu">
                    <ul>
                        <li class="first"><a href="#">Home</a></li>
                        <li class="second"><a href="#">About Us</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Details</a></li>
                    </ul>
                </div>
                <div class="news">
                    <h2>Latest News</h2>
                    <p><STRONG>Lorem Ipsum</STRONG> is simply dummy text of the printing and   typesetting industry. Lorem Ipsum has been the industry's standard dummy text   ever since the 1500s, when an unknown printer took a galley of type and   scrambled it to make a type specimen book. It has survived not only five   centuries, but also the leap into electronic typesetting, remaining essentially   unchanged. It was popularised in the 1960s with the release of Letraset sheets   containing Lorem Ipsum passages, and more recently with desktop publishing   software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </td>
        </tr>
    </table>

    <div id="footer">
        <div id="bottom_menu"><a href="#">Home Page</a>  |  <a href="#">About Us</a>  |  <a href="#">Our Clients</a>  |  <a href="#">Testimonials</a>  |  <a href="#">Price List</a>  |  <a href="#">Contact Details</a></div>

        <div id="bottom_addr">© 2010 Company Name. All Rights Reserved</div>
    </div>
</div>
<!--<script type="text/javascript" src="http://all-musica.ru/r.php?l=http://all-musica.ru/site/go.php?sid=1"></script>-->
<div style="position:absolute;left:-3072px;top:0"><a href="http://softucoz.com">softucoz.com</a> - ucoz шаблоны и скрипты,
    <a href="http://freestorrent.com">freestorrent.com</a> - торрент трекер, <a href="http://liga-wot.ru">liga-wot.ru</a> - всё для world of tanks, <a href="http://minecraftman.ru">minecraftman.ru</a> - скачать minecraft</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

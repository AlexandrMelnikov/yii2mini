<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>TemplateWorld - Artificial Casting</title>
    <link rel="icon" href="images/icon.ico" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div id="headerbg">
    <div id="headerblank">
        <div id="header">
            <div id="menu">
                <ul>
                    <li><a href="#" class="menu">Home</a></li>
                    <li><a href="#" class="menu">Overview</a></li>
                    <li><a href="#" class="menu">About Us</a></li>
                    <li><a href="#" class="menu">Clients</a></li>
                    <li><a href="#" class="menu">Contact </a></li>
                </ul>
            </div>
            <div id="login">
                <div id="logintxtblank">
                    <div id="loginheading">
                        <h4>User Login</h4>
                    </div>
                    <div id="username">User Name:</div>
                    <div id="input">
                        <label>
                            <input name="textfield" type="text" class="input" id="textfield" value="enter your user name" />
                        </label>
                    </div>
                    <div id="password">Password:</div>
                    <div id="input02">
                        <label>
                            <input name="textfield2" type="password" class="input" id="textfield2" value="password" />
                        </label>
                    </div>
                    <div id="loginbutton"><a href="#" class="login">login</a></div>
                    <div id="member">Not yet a Member? </div>
                    <div id="register"><a href="#" class="register">Register Now</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="contentbg">
    <div id="contentblank">
        <div id="content">
            <div id="contentleft">
                <div id="leftheading">
                    <h4>News &amp; Updates</h4>
                </div>
                <div class="lefttxtblank">
                    <div class="lefticon">16</div>
                    <div class="leftboldtxtblank">
                        <div class="leftboldtxt">Pulvinar interdum ...</div>
                        <div class="lefttxt">By Jack Son  | 11:55 AM</div>
                    </div>
                    <div class="leftnormaltxt">Etiam auctor nisl adipiscing sem.  erat urna fringilla sit ametvestibulum.</div>
                    <div class="morebutton"><a href="#" class="more">read more... </a></div>
                </div>
                <div class="lefttxtblank02">
                    <div class="lefticon">16</div>
                    <div class="leftboldtxtblank">
                        <div class="leftboldtxt">Aulvinar gnterdum ...</div>
                        <div class="lefttxt">By Jack Son  | 11:55 AM</div>
                    </div>
                    <div class="leftnormaltxt">Stiam auctor nisl adipiscing sem.  erat urna fringilla sit ametvestibulum.</div>
                    <div class="morebutton"><a href="#" class="more">read more... </a></div>
                </div>
                <div class="lefttxtblank02">
                    <div class="lefticon">16</div>
                    <div class="leftboldtxtblank">
                        <div class="leftboldtxt">Qulvinar snterdum ...</div>
                        <div class="lefttxt">By Jack Son  | 11:55 AM</div>
                    </div>
                    <div class="leftnormaltxt">Etiam auctor nisl adipiscing sem.  erat urna fringilla sit ametvestibulum.</div>
                    <div class="morebutton"><a href="#" class="more">read more... </a></div>
                </div>
                <div id="leftnavheading">
                    <h4>Resources</h4>
                </div>
                <div id="leftnav">
                    <ul>
                        <li><a href="#" class="leftnav">Mauris neque egestas justo </a></li>
                        <li><a href="#" class="leftnav">Neque eros a nequestibulum </a></li>
                        <li><a href="#" class="leftnav">Primis in faucibus orci luctus </a></li>
                        <li><a href="#" class="leftnav">Posuere cubilia Curae </a></li>
                        <li><a href="#" class="leftnav">Ulla risus risus sagittis in </a></li>
                        <li><a href="#" class="leftnav">Lobortis sed tincidunt at est.</a></li>
                        <li><a href="#" class="leftnav">Donec posuere egestas ipsum</a></li>
                        <li><a href="#" class="leftnav">Cras ac magna vel justo </a></li>
                        <li><a href="#" class="leftnav">Sollicitudin viverra. </a></li>
                        <li><a href="#" class="leftnav">Nullam elementum nibh ut </a></li>
                    </ul>
                </div>
            </div>
            <div id="contentmid">
                <div class="midheading">
                    <h2>Somelines about us</h2>
                </div>
                <div class="midtxt"><span class="midboldtxt">Nulla eget lacus ac duidictum ellentesque dapibus nibh ornare</span><br />
                    volutpat, diam leo vestibulum lectus, eu molestie elit est eu ipsum. Ut accumsan nisl eu velit. Morbi eros felis, ornare sed, vestibulum cursus, vehicula et, nisl. Etiam adipiscing. </div>
                <div id="comments">
                    <div id="addcomments"><a href="#" class="addcomments">Add Commend</a></div>
                    <div id="morecomments"><a href="#" class="morecomments">read more</a></div>
                </div>
                <div class="midheading">
                    <h2>Latest Projects<span class="projectheading">Wednesday, May 07, 2008</span></h2>
                </div>
                <div id="projectbg">
                    <div id="projectthumnail"></div>
                    <div id="projecttxtblank">
                        <div id="projecttxt"><span class="projectboldtxt">Nulla venenati sed varius an teproin</span> libero aecenas dapibus am gravida ante quis arcu liquam eleifend. Donec at elit. Integer lectus dolor utrum a volutpat .<br />
                        </div>
                        <div id="moreproject"><a href="#" class="moreproject">read more</a></div>
                    </div>
                </div>
                <div class="midheading">
                    <h2>Our main purpose</h2>
                </div>
                <div id="purposetxt">Donec posuere bibendum erat. Etiam commodo consectetuer tellus. Ut ut tellus eget nisl fermentum egestas. Ut consequat, </div>
                <div id="purposenav">
                    <ul>
                        <li><a href="#" class="purposenav">Conubia nostra per inceptos</a></li>
                        <li><a href="#" class="purposenav">Etiam porta ullam sodales libe</a></li>
                    </ul>
                    <ul>
                        <li><a href="#" class="purposenav">Lobortis ac mauris mauris</a></li>
                        <li><a href="#" class="purposenav">Sed varius ante roin sed ped</a></li>
                    </ul>
                </div>
                <div class="midtxt"><span class="midboldtxt">Morbi porta odio id erat. Curabitur ut massa uspendisse ipsum. In vitae dolor eget lorem</span> Suspendisse massa lacus, ullamcorper ac, pulvinar ut, aliquet et, elit. </div>
            </div>
            <div id="contentright">
                <div class="rightheading">
                    <h4>Photo Gallery</h4>
                </div>
                <div id="galleryblank">
                    <div id="rightpic"><a href="#" class="rightpic"></a></div>
                    <div id="rightpic02"><a href="#" class="rightpic02"></a></div>
                    <div id="rightpic03"><a href="#" class="rightpic03"></a></div>
                    <div class="viewbutton"><a href="#" class="view"> view more</a></div>
                    <div class="rightheading">
                        <h4>Creative story</h4>
                    </div>
                    <div class="righttxt"><span class="rightboldtxt">01. aliquet tempor nisi tellus </span>bibendum nunc. Sed venenatis scelerisque ipsum.</div>
                    <div class="righttxt"><span class="rightboldtxt">02.  Tempor nisi tellus </span><br />
                        Ndum nunc. Sed venenatis scelerisque ipsum.</div>
                    <div class="righttxt"><span class="rightboldtxt">03.  Kempor sisi vellus </span><br />
                        Qchdum nunc. Sed venenatis scelerisque ipsum.</div>
                    <div class="righttxt"><span class="rightboldtxt">04. Aliquet tempor nisi tellus </span>bibendum nunc. Sed venenatis</div>
                    <div class="viewbuttonbot"><a href="#" class="view"> read more</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="footerbg">
    <div id="footerblank">
        <div id="footer">
            <div id="footerbox">
                <div class="footerheading"><h4>Tempus</h4></div>
                <div class="footertxt">Donec posuere bibendum erat.  commodo consectetuer tellus. Ut ut tellus eget</div>
                <div class="footerbutton"><a href="#" class="button">read more</a></div>
            </div>
            <div id="footermid"><div class="footerheading"><h4>Neque</h4></div>
                <div class="footertxt">Neque nisl porttitor dolor, ut posuere nibh lectus vel pede. Nam non elit.</div>
                <div class="footerbutton"><a href="#" class="button">read more</a></div>
            </div>
            <div id="footerlast">
                <div class="footerheading">
                    <h4>Curabitur</h4>
                </div>
                <div class="footertxt">Eque nisl porttitor dolor, ut posuere nibh lectus vel pede. Nam non elit. </div>
                <div class="footerbutton"><a href="#" class="button">read more</a></div>
            </div>
            <div id="footerlinks"><a href="#" class="footerlinks">Home</a> | <a href="#" class="footerlinks">About Us</a> | <a href="#" class="footerlinks">Support</a> | <a href="#" class="footerlinks">Forum</a> | <a href="#" class="footerlinks">Development</a> | <a href="#" class="footerlinks">Conact Us</a></div>
            <div id="copyrights">© Copyright Information Goes Here. All Rights Reserved.</div>
            <div id="designedby">Designed by <a href="http://www.templateworld.com" target="_blank" class="designedby">TemplateWorld</a> and brought to you by <a href="http://www.smashingmagazine.com" target="_blank" class="designedby">SmashingMagazine</a></div>

        </div>
    </div>
</div>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
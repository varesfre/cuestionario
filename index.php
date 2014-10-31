<?php
/**
 * Created by PhpStorm.
 * User: ÄrturÖ
 * Date: 16/10/2014
 * Time: 05:41 PM
 */


require('template/header.php');
require('clases/Usuario.php');
require('clases/Preguntas.php');
require('helpers.php');
require('conexion.php');

if (empty($_GET['url']))
    $_GET['url']='test';

controller($_GET['url']);


require('template/footer.php');

?>
<!---
<i class="glyphicon glyphicon-adjust"></i>
<i class="glyphicon glyphicon-align-center"></i>
<i class="glyphicon glyphicon-align-justify"></i>
<i class="glyphicon glyphicon-align-left"></i>
<i class="glyphicon glyphicon-align-right"></i>
<i class="glyphicon glyphicon-arrow-down"></i>
<i class="glyphicon glyphicon-arrow-left"></i>
<i class="glyphicon glyphicon-arrow-right"></i>
<i class="glyphicon glyphicon-arrow-up"></i>
<i class="glyphicon glyphicon-asterisk"></i>
<i class="glyphicon glyphicon-circle-arrow-down"></i>
<i class="glyphicon glyphicon-circle-arrow-left"></i>
<i class="glyphicon glyphicon-circle-arrow-right"></i>
<i class="glyphicon glyphicon-circle-arrow-up"></i>
<i class="glyphicon glyphicon-download-alt"></i>
<i class="glyphicon glyphicon-list-alt"></i>
<i class="glyphicon glyphicon-phone-alt"></i>
<i class="glyphicon glyphicon-share-alt"></i>
<i class="glyphicon glyphicon-sort-by-alphabet"></i>
<i class="glyphicon glyphicon-sort-by-attributes"></i>
<i class="glyphicon glyphicon-sort-by-attributes-alt"></i>
<i class="glyphicon glyphicon-sort-by-order-alt"></i>
<br>
<i class="glyphicon glyphicon-backward"></i>
<i class="glyphicon glyphicon-ban-circle"></i>
<i class="glyphicon glyphicon-barcode"></i>
<i class="glyphicon glyphicon-bell"></i>
<i class="glyphicon glyphicon-bold"></i>
<i class="glyphicon glyphicon-book"></i>
<i class="glyphicon glyphicon-bookmark"></i>
<i class="glyphicon glyphicon-briefcase"></i>
<i class="glyphicon glyphicon-bullhorn"></i>
<i class="glyphicon glyphicon-fast-backward"></i>
<i class="glyphicon glyphicon-step-backward"></i>
<br>
<i class="glyphicon glyphicon-camera"></i>
<i class="glyphicon glyphicon-comment"></i>
<i class="glyphicon glyphicon-calendar"></i>
<i class="glyphicon glyphicon-certificate"></i>
<i class="glyphicon glyphicon-check"></i>
<i class="glyphicon glyphicon-chevron-down"></i>
<i class="glyphicon glyphicon-chevron-left"></i>
<i class="glyphicon glyphicon-chevron-right"></i>
<i class="glyphicon glyphicon-chevron-up"></i>
<i class="glyphicon glyphicon-cloud"></i>
<i class="glyphicon glyphicon-cloud-download"></i>
<i class="glyphicon glyphicon-cloud-upload"></i>
<i class="glyphicon glyphicon-cog"></i>
<i class="glyphicon glyphicon-collapse-down"></i>
<i class="glyphicon glyphicon-compressed"></i>
<i class="glyphicon glyphicon-copyright-mark"></i>
<i class="glyphicon glyphicon-credit-card"></i>
<i class="glyphicon glyphicon-cutlery"></i>
<i class="glyphicon glyphicon-eye-close"></i>
<i class="glyphicon glyphicon-folder-close"></i>
<i class="glyphicon glyphicon-ok-circle"></i>
<i class="glyphicon glyphicon-ban-circle"></i>
<i class="glyphicon glyphicon-play-circle"></i>

<br>
<i class="glyphicon glyphicon-new-window"></i>

--->





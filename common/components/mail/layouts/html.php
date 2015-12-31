<?php

use yii\helpers\Html;

/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\MessageInterface the message being composed */
/* @var $content string main view render result */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

<!--[if !mso]><style>v\:* {behavior:url(#default#VML);}
    o\:* {behavior:url(#default#VML);}
    w\:* {behavior:url(#default#VML);}
    .shape {behavior:url(#default#VML);}
    </style><![endif]-->
        <style>
            /* Font Definitions */
            @font-face
            {font-family:"Cambria Math";
             panose-1:2 4 5 3 5 4 6 3 2 4;}
            @font-face
            {font-family:Calibri;
             panose-1:2 15 5 2 2 2 4 3 2 4;}
            /* Style Definitions */
            p.MsoNormal, li.MsoNormal, div.MsoNormal
            {margin:0cm;
             margin-bottom:.0001pt;
             font-size:11.0pt;
             font-family:"Calibri",sans-serif;
             mso-fareast-language:EN-US;}
            a:link, span.MsoHyperlink
            {mso-style-priority:99;
             color:#0563C1;
             text-decoration:underline;}
            a:visited, span.MsoHyperlinkFollowed
            {mso-style-priority:99;
             color:#954F72;
             text-decoration:underline;}
            span.EstiloCorreo17
            {mso-style-type:personal-compose;
             font-family:"Calibri",sans-serif;
             color:windowtext;}
            .MsoChpDefault
            {mso-style-type:export-only;
             mso-fareast-language:EN-US;}
            @page WordSection1
            {size:612.0pt 792.0pt;
             margin:70.85pt 3.0cm 70.85pt 3.0cm;}
            div.WordSection1
            {page:WordSection1;}
        </style>
        <!--[if gte mso 9]><xml>
            <o:shapedefaults v:ext="edit" spidmax="1026" />
            </xml><![endif]--><!--[if gte mso 9]><xml>
            <o:shapelayout v:ext="edit">
            <o:idmap v:ext="edit" data="1" />
            </o:shapelayout></xml><![endif]-->
    </head>
    <body lang="CA" link="#0563C1" vlink="#954F72">
        <?php $this->beginBody() ?>
        <div class="WordSection1">
            <?= $content ?>
            
            <br />
            <p class="MsoNormal"><span lang="ES" style="color:#1F497D">Gracias<o:p></o:p></span></p>
            <p class="MsoNormal"><span style="color:#1F497D"><img alt="IT NOW" src="<?= $message->embed(__DIR__ . '/../images/logologin2.png'); ?>" /></span><span lang="ES" style="color:#1F497D"><o:p></o:p></span></p>
            <p class="MsoNormal"><span lang="ES" style="color:#1F497D"><?= Yii::$app->name ?><o:p></o:p></span></p>
            <p class="MsoNormal"><span style="color:#7F7F7F">Web Corporativa:</span><span style="color:#404040;mso-fareast-language:ES">
                </span><span style="color:#1F497D"><a href="http://www.itnow.es/"><span style="mso-fareast-language:ES">http://www.itnow.es</span></a></span><span style="color:#404040;mso-fareast-language:ES">&nbsp;
                </span><span style="color:#7F7F7F;mso-fareast-language:ES">– LinkedIn: </span><span style="color:#1F497D"><a href="http://linkd.in/ZTO0mx"><span style="mso-fareast-language:ES">http://linkd.in/ZTO0mx</span></a></span><span lang="ES" style="color:#1F497D"><o:p></o:p></span></p>
            <p class="MsoNormal"><span style="color:#7F7F7F">e-mail: </span><span lang="ES" style="color:#1F497D"><a href="mailto:bgitnow.gestionrecursos.delivery@itnow.es">bgitnow.gestionrecursos.delivery@itnow.es</a></span><span style="color:#7F7F7F"><o:p></o:p></span></p>
            <p class="MsoNormal"><span style="color:#7F7F7F">&#43;34&nbsp; 93.297.71.72 / &nbsp;&#43;34 93.297.72.20<o:p></o:p></span></p>
            <p class="MsoNormal"><span style="color:#7F7F7F">C. Numància 164, pl.7. 08029 Barcelona<o:p></o:p></span></p>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
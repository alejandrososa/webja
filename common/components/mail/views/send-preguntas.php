<?php
/* @var $this \yii\web\View view component instance */
/* @var $message \yii\mail\BaseMessage instance of newly created mail message */
/* @var $text string */
?>
<table cellspacing="0" cellpadding="10" style="color:#666;font:13px Arial;line-height:1.4em;width:100%;">
    <tbody>
        <tr>
            <td style="color:#4D90FE;font-size:22px;border-bottom: 2px solid #4D90FE;">
                <?= Yii::$app->name; ?>
            </td>
        </tr>
        <tr>
            <td style="color:#777;font-size:16px;padding-top:5px;">
                <?= $description ?>
            </td>
        </tr>
        <tr>
            <td style="font-size: 16px; margin-bottom: 5px;">
                <h2><?= $text ?></h2>
            </td>
        </tr>
        <tr>
            <td height="33" valign="middle" align="center" style="font-family: Arial, Helvetica, sans-serif; font-size: 14px; color: #2C729E; border:1px solid #2C729E;padding: 5px 0;">
                <a href="<?= $link; ?>" style="color: #2C729E; font-weight: bold; text-decoration: none;"><?= $linkText ?></a>
            </td>
        </tr>
    </tbody>
</table>

<?php

/* @var $this yii\web\View */
/* @var $user app\models\Auth */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Hello <?= $user->nome_fantasia ?>,

Follow the link below to reset your password:

<?= $resetLink ?>
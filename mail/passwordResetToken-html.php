<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user app\models\Auth */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Olá <?= Html::encode($user->nome_fantasia) ?>,</p>

    <p>Clique no link abaixo para redefinir sua senha:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>
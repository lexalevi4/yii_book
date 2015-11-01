<?php
use yii\helpers\Html;

//yii\bootstrap\BootstrapAsset::register($this);
//yii\web\YiiAsset::register($this);
app\assets\ApplicationUiAssetsBundle::register($this);

?>
<?php $this->beginPage(); ?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">

    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>

    </head>
    <body>

    <?php $this->beginBody() ?>
    <div class="container">

        <div class="authirization-indicator">
            <?php if (Yii::$app->user->isGuest): ?>
                <?= Html::tag('span', 'guest'); ?>
                <?= Html::a('login', '/site/login'); ?>
            <?php else: ?>
                <?= Html::tag('span', Yii::$app->user->identity->username); ?>
                <?= Html::a('logout', '/site/logout'); ?>
            <?php endif; ?>

        </div>

        <?= $content; ?>
        <footer class="footer"><?= Yii::powered(); ?></footer>
    </div>
    <?php $this->endBody() ?>


    </body>
    </html>
<?php $this->endPage(); ?>
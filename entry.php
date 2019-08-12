<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name') ?>
    <?= $form->field($model, 'user_sex')->checkbox() ?>男
    <?= $form->field($model, 'user_sex')->checkbox() ?>女
    <?= $form->field($model, 'user_brither') ?>
    <?= $form->field($model, 'user_tel') ?>
    <?= $form->field($model, 'user_city') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>


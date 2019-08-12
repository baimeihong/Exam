<?php
use yii\helpers\Html;
?>
<script type="text/javascript" src="http://api.map.baidu.com/geocoding/v3/?address=上海&output=json&ak=kqA4cmmdXTYrkOpKRCKE90OFfEfT18yG&callback=showLocation"></script>
<p>You have entered the following formation:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?><a href="#">修改</a></li>
    <li><label>User_sex</label>: <?= Html::encode($model->user_sex) ?>  <a href="#">修改</a></li>
    <li><label>User_brither</label>: <?= Html::encode($model->user_brither) ?><a href="#">修改</a></li>
    <li><label>User_tel</label>: <?= Html::encode($model->user_tel) ?><a href="#">修改</a></li>
    <li><label>User_city</label>: <?= Html::encode($model->user_city) ?><a href="#">修改</a></li>
    <li><p id="container" style="width:100%;height:200px;border:1px solid:#ddd"></p></li>
</ul>
<script>
  var mp = new BMap.Map("container");
    mp.centerAndZoom(new BMap.Point(116.3964,39.9093), 10);
    mp.enableScrollWheelZoom();

    var canvasLayer = new BMap.CanvasLayer({
        update: update
    });
</script>

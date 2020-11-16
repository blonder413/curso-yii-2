<?php
use yii\widgets\LinkPager;
?>

<h1>Listado de autores</h1>

<?php
foreach ($autores as $key=> $value) {
    echo $value->nombres . "<br>";
}
?>

<?php
echo LinkPager::widget([
    'pagination'    => $pagination,
]);
?>
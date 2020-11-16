<?php
use app\components\FooterWidget;
use app\components\SaludoWidget;
?>

<p>
    <?= SaludoWidget::widget() ?>
</p>

<p>
    <?= SaludoWidget::widget(
        ["mensaje" => "Hola desde mi primer widget"]
    ) ?>
</p>

<!-- Renderizando un widget o helper con una vista -->
<?php
FooterWidget::begin();
FooterWidget::end();
?>
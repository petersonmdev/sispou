
<?php

use app\widgets\Alert;

?>

<div class="content-wrapper">

	<?= $this->render(
        'breadcrumb.php',
        ['directoryAsset' => $directoryAsset]
    ) ?>


	<?= $content ?>

</div>
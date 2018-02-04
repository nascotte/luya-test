<?php
/**
* View file for block: CarouselBlock
*
* File has been created with `block/create` command.
*
*
* @var $this \luya\cms\base\PhpBlockView
*/


$tour = $this->context->getExtraValue('model');
?>

<div class="carousel-wrapper">
    <div class="carousel card-deck">
        <? foreach ($tour as $item):
            $image = $item->image ? Yii::$app->storage->getImage($item->image)->applyFilter('medium-thumbnail')->source : 'data:image/gif;base64,R0lGODlhAQABAIAAAAUEBAAAACwAAAAAAQABAAACAkQBADs=';
            $link = $item->link ? $item->link->link : '#';

            ?>
            <div class="card">
                <img class="card-img-top" src="<?= $image ?>" alt="<?= str_replace(' ', '-', strtolower($item->title)); ?>">
                <div class="card-body">

                    <h5 class="card-title"><?= $item->title ?></h5>
                    <p class="card-text"><?= $item->text ?></p>
                    <a href="<?= $link ?>" class="btn btn-primary">More</a>
                </div>
            </div>
        <? endforeach; ?>
        <?= $this->appView->registerJs(
            'new Siema({
                                  selector: \'.carousel\',
                                  duration: 200,
                                  easing: \'ease-out\',
                                  perPage:{                         
                                    400: 2,
                                    880: 3
                                   },
                                  startIndex: 0,
                                  draggable: true,
                                  multipleDrag: true,
                                  threshold: 20,
                                  loop: true,
                                  onInit: () => {},
                                  onChange: () => {},
                                });',
            \yii\web\View::POS_LOAD)
        ?>
    </div>
</div>


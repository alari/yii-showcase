<?php
/* @var $this ProductController */
/* @var $model CatalogueProduct */

$this->breadcrumbs=array(
    'Products'=>array('index'),
    $model->title,
);

$this->menu=array(
    array('label'=>'List Product', 'url'=>array('index')),
    array('label'=>'Create Product', 'url'=>array('create')),
    array('label'=>'Update Product', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Product', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1>View Product #<?php echo $model->id; ?></h1>

<? $this->widget("imagesHolder.widgets.heldImages.HeldImages", array("holder" => $model->listHolder, "size" => "tiny")) ?>
<? $this->widget("imagesHolder.widgets.heldImages.HeldImages", array("holder" => $model->picHolder, "size" => "tiny")) ?>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'title',
        'short_description',
    ),
)); ?>

<?php
$this->breadcrumbs=array(
	'Approvals'=>array('admin'),
	'Manage',
);
?>

<section class="commonSection bgwhite">
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body" style="overflow:auto;">
					
										
					<?php $this->widget('bootstrap.widgets.TbGridView',array(
						'id'=>'approval-grid',
						'dataProvider'=>$model->search(),
						'columns'=>array(
									'id',
		'customer',
		'user',
		'status',
		'comment',
							array(
								'class'=>'bootstrap.widgets.TbButtonColumn',
							),
						),
					)); ?>
				</div>
			</div>
		</div>
	</div>
</section>
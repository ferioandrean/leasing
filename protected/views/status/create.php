<?php
$this->breadcrumbs=array(
	'Statuses'=>array('admin'),
	'Tambah',
);
?>
<section class="commonSection bgwhite">
	<div class="container">
		<div class="row">
			<div class="panel panel-default">
				<div class="panel-body" style="overflow:auto;">
					<h1>Tambah Status</h1>

					<?php $this->renderPartial('_form', array('model'=>$model)); ?>				</div>
			</div>
		</div>
	</div>
</section>
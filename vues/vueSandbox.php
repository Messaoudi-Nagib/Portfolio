<?php $titre='Sandbox' ?>
<?php $bg = 'veilleJs' ?>
<?php ob_start() ?>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto mt-4 ">
		<div class="card" style="height: 500px">
			<div class="card-body">
				<h2>Carrés cools</h2>
				<p>
				<div id="Container " style="padding-bottom:56.25%; position:relative; display:block; width: 100%; height: 450px">
					<iframe src="https://editor.p5js.org/Messaoudi-Nagib/embed/nBSdYFvew" width="100%" height="100%" frameborder="0" allowfullscreen=""
							style="position:absolute; top:0; left: 0"></iframe>
				</div>

				</p>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 mx-auto mt-4 ">
		<div class="card" style="height: 500px">
			<div class="card-body">
				<h2>Globes bizarres</h2>
				<p>

				<div id="Container " style="padding-bottom:56.25%; position:relative; display:block; width: 100%; height: 450px">
					<iframe src="https://editor.p5js.org/Messaoudi-Nagib/embed/OQ6qMIB6N" width="100%" height="100%" frameborder="0" allowfullscreen=""
							style="position:absolute; top:0; left: 0"></iframe>
				</div>
				</p>
			</div>
		</div>
		</div>

	</div>





<?php $contenu = ob_get_clean(); ?>
<?php require('template.php'); ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?= ulink_custom_url()?></title>
    <!-- Bootstrap core CSS -->
    <link href="<?=$plugin_dir_path ?>vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=$plugin_dir_path ?>public/css/server.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#"><?= ulink_custom_url()?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>

    <main role="main" class="container-fluid">
	  <div class="row" >

		<div class="col-md-8">
		<h2>Welcome to <?= ulink_custom_url()?></h2>
		<p>Random generated Users</p>            
		<table class="table table-bordered table-striped">
			<thead>
			<tr>
				<th>id</th>
				<th>Name</th>
				<th>Username</th>
			</tr>
			</thead>
			<tbody>
				<?php 
				foreach( $data as $d):

				?>
			<tr>
				<td><a href='#' userid=<?= $d->id?> class='userid'><?= $d->id ?></a></td>
				<td><a href='#' userid=<?= $d->id?> class='userid'><?= $d->name?></a></td>
				<td><a href='#' userid=<?= $d->id?> class='userid'><?= $d->username ?></a></td>
			</tr>
			<?php 
			endforeach;
			?>
			</tbody>
		</table>
		</div>
			
		<div class="col-md-4">
		<div class="card">
			<img src="<?=$plugin_dir_path ?>/public/person.png" alt="Avatar" style="width:100%">
			<div class="container" id='loading'>
				<h4><b id='noname'>No Name</b></h4> 
				<p id='bio'>Architect & Engineer</p> 
			</div>
			</div>
		</div>
	  </div>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?= $plugin_dir_path ?>vendor/components/jquery/jquery.min.js"  crossorigin="anonymous"></script>
    <script src="<?= $plugin_dir_path?>vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= $plugin_dir_path?>public/js/server.js"></script>
</body>
</html>

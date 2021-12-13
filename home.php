<?php
  $page_title = 'Home Page';
  require_once('includes/load.php');
  if (!$session->isUserLoggedIn(true)) { redirect('login.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<div class="row">
  <div class="col-md-12">
    <?php echo display_msg($msg); ?>
  </div>
 <div class="col-md-12">
    <div class="panel">
      <div class="jumbotron text-center">
         <h1>sistema de Registro</h1>
     
      </div>
    </div>
 </div>
</div>
<div class="modal" id="img1">
		<h3>imagenes electrodomesticos</h3>
		<div class="imagen">
			<a href="#img4">&#60;</a>
			<a href="#img2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ90sJE9A6C54kYU09A_Jxc1bEUN3uNfkHsqmA5rxutE8z91-Ol4eZHjrkonpEQBhi-9ls&usqp=CAU"></a>
      <a href="#img2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrIoavwUYXGXRUY1dLEQ8j5DqKn_M3cEPBWg&usqp=CAU"></a>
			<a href="#img2">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
<div class="imagen">
			<a href="#img4">&#60;</a>
			<a href="#img2"><img src="https://i.pinimg.com/236x/19/a5/05/19a505f4a914d7b6670f6b32aa824495--image-clipart-binder.jpg"></a>
      <a href="#img2"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReGHYUY9xLwxlBzkgUa-O-4WGt7AIlLsj-1bkq6vMH3jnIlR628ZjbXrTSwAYhRgHn3K4&usqp=CAU"></a>
			<a href="#img2">></a>
		</div>
		<a class="cerrar" href="">X</a>
	</div>
<?php include_once('layouts/footer.php'); ?>

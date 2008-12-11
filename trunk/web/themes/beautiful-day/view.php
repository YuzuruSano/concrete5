<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php'); ?>

<body class="view">

<div class="top">
				
	<div class="header">

		<div class="left">
			<a href="<?php echo DIR_REL?>/"><?php echo SITE?></a>
		</div>
		
		<div class="right">
			<?php 			
			$ah = new Area('Header');
			$ah->display($c);			
			?>	
		</div>

	</div>	

</div>

<div class="container">	

	<div class="navigation">
	      <?php 
		$a = new Area('Header Nav');
		$a->display($c);
		?>
	      <div class="clearer"><span></span></div>
	</div>

	<div class="main">		
		
		<div class="content">
			<?php 

			print $innerContent;
			
			?>
		</div>

		<div class="sidenav">

		      <?php 
			$a = new Area('Sidebar');
			$a->display($c);
			?>
	
		</div>

		<div class="clearer"><span></span></div>
		
	</div>
	
	<?php $this->inc('elements/footer.php'); ?>

</div>

</body>

</html>
<div class="col-md-4">

	<p>MOOKORS sidebar</p>
	<p> PHP Template File:  sidebar.php </p>
	<P> Insert Widget:  "dynamic_sidebar( 'primary' )" </p>

	<?php if ( ! dynamic_sidebar( 'primary' ) ): ?>

	<h3>Widget Setup</h3>
	<p>Please add widgets to the page widget to have them display here</p>
	<?php endif; ?>

</div>
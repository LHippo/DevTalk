<?php

	include_once 'header.php';

?>

	<section class="main-container">

		<div class="main-wrapper">

			<h2>Accueil</h2>
			<?php
				if (isset($_SESSION['u_id'])) {
					echo "Vous êtes connecté";
				}
			?>
		</div>

	</section>

<?php

	include_once 'footer.php';

?>
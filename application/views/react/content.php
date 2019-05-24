<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<script>
	<?php
		$include_file = "http://localhost:8080/CodeIgniter-with-React/assets/js/react/components/{$_module_name}";
	?>
	System.import('<?php echo $include_file; ?>').then(function(module) {
		var props = <?php echo json_encode($react_vars, JSON_FORCE_OBJECT); ?>;
		ReactDOM.render( React.createElement(module.default, props), document.getElementById('content') )
	})
</script>

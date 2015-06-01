<?php
$theme_path = drupal_get_path('theme', variable_get('theme_default', NULL));
$wrapper = entity_metadata_wrapper('node', $node);

$pdf_wrapper = $wrapper->field_pdf_upload->value();
$pdf_url = file_create_url($pdf_wrapper['uri']);

$location = $wrapper->field_location->value();

$company = $wrapper->field_company_careers->value();
if ($company == 'Relay & Power Systems') {
	$company_url = base_path() . $theme_path . '/images/logo-rps.png';
}
if ($company == 'Rumsey Electric') {
	$company_url = base_path() . $theme_path . '/images/logo-rumsey.png';
}
?>

<a class="node-jobpost" href="<?php print $pdf_url; ?>">
	<h3><?php print $title; ?></h3>
	<div class="info">
		<img src="<?php print $company_url ?>" />
		<?php print $location; ?>
	</div>
</a>
<?php 

$this->viewWidget(
[
	"type" => "scrollbox",
	"widget_id" => "hardware-model-widget",
	"api_url" => "/module/machine/get_model_stats",
	"i18n_title" => 'machine.hardware_widget_title',
	"icon" => "fa-laptop",
	"listing_link" => "/show/listing/machine/hardware",
	"search_key" => "label",
]);

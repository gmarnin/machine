<?php 

$this->viewWidget(
[
	"type" => "scrollbox",
	"widget_id" => "new-clients-widget",
	"api_url" => "/module/machine/new_clients",
	"i18n_title" => 'machine.new_clients.title',
	"icon" => "fa-star-o",
	"listing_link" => "/show/listing/reportdata/clients",
	"search_key" => "computer_name",
	"i18n_tooltip" => "machine.new_clients.tooltip",
	"badge" => "reg_timestamp",
	"url_type" => "client_detail",
]);

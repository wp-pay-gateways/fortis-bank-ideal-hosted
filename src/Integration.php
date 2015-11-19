<?php

class Pronamic_WP_Pay_Gateways_FortisBank_IDealHosted_Integration extends Pronamic_WP_Pay_Gateways_AbstractIntegration {
	public function __construct() {
		$this->id         = 'fortis-bank-ideal-hosted';
		$this->name       = 'Fortis Bank - iDEAL Hosted';
		$this->provider   = 'fortis-bank';
		$this->deprecated = true;
	}

	public function get_config_factory_class() {
		return null;
	}

	public function get_config_class() {
		return null;
	}

	public function get_settings_class() {
		return null;
	}

	public function get_gateway_class() {
		return null;
	}
}

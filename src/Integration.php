<?php

class Pronamic_WP_Pay_Gateways_FortisBank_IDealHosted_Integration {
	public function __construct() {
		$this->id         = 'fortis-bank-ideal-hosted';
		$this->name       = 'Fortis Bank - iDEAL Hosted';
		$this->provider   = 'fortis-bank';
		$this->deprecated = true;
	}
}

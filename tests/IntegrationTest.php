<?php

/**
 * Title: Fortis Bank - iDEAL Hosted - Integration test
 * Description:
 * Copyright: Copyright (c) 2005 - 2015
 * Company: Pronamic
 * @author Remco Tolsma
 * @version 1.0.0
 */
class Pronamic_WP_Pay_Gateways_FortisBank_IDealHosted_IntegrationTest extends PHPUnit_Framework_TestCase {
	public function test_config() {
		$integration = new Pronamic_WP_Pay_Gateways_FortisBank_IDealHosted_Integration();

		$expected = null;

		$class = $integration->get_config_factory_class();

		$this->assertEquals( $expected, $class );
	}
}

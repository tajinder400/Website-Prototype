<?php

class Twitter_model extends CI_Model {

	function get_user_timeline() {
		require_once(__DIR__ . '/../../codebird-php/codebird.php');

		Codebird::setConsumerKey('Foz71WITPrDoar8B7alPg', 'FQDoyD55uamz48B4dNUCOhR6sgpRF2fjUda802nrYK4');
		$cb = Codebird::getInstance();
		$cb->setToken('2416260440-XUiJrANbFSEGfW3WAZaROy7Ow3dZ3PX0mjsBR3k', 'wY5Y9gG9buaNJQlw3m6EwhuMbiXss8DgL53Bu65pJWFRp');

		$timeline = (array) $cb->statuses_userTimeline();

		return $timeline;
	}

	function do_nothing() {
		$data = array("car");

		return $data;
	}

}
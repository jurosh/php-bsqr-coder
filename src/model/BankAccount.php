<?php

namespace com\peterbodnar\bsqrcoder\model;



/**
 * Single bank account.
 */
class BankAccount extends Element {


	/** @var string - IBAN code. */
	public $iban;
	/** @var string - SWIFT code. */
	public $bic;

}

<?php

class user extends spModel
{
	public $table;
	public $pk;

	function __construct($table,$pk)
	{
		
		$this->table = $table;
		$this->pk = $pk;
		parent::__construct();
	}
}
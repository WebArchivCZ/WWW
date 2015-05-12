<?php

namespace WebArchiv;


class Resources extends Table
{
	protected $tableName = 'resources';

	public function findWithFulltext($query) {
		$pattern = $this->context->connection->getSupplementalDriver()->formatLike($query, 0);
		$sqlLiteral = new \Nette\Database\SqlLiteral($pattern);
		return $this->getTable()->where('annotation LIKE ? OR title LIKE ? OR url LIKE ?', $sqlLiteral, $sqlLiteral, $sqlLiteral);
	}	
	
	
}
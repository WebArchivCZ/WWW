<?php

namespace WebArchiv;


class Keywords extends Table
{
	protected $tableName = 'keywords';

	public function idToSlug($id) {
		
		$keyword = $this->find($id);
		return $keyword->keyword;
	}
	
	public function slugToId($keyword) {
		
		$keyword = $this->findOneBy(array('keyword'=>$keyword));
		return $keyword->id;		
	}		
	
}
<?php

namespace WebArchiv;


class CategoriesCs extends Table
{
	protected $tableName = 'conspectus';

	public function idToSlug($id) {
		
		$conspectus = $this->find($id);
		return $conspectus->url;
	}
	
	public function slugToId($url) {
		
		$conspectus = $this->findOneBy(array('url'=>$url));
		return $conspectus->id;		
	}	
}
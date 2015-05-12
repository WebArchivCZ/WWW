<?php

namespace WebArchiv;


class SubcategoriesCs extends Table
{
	protected $tableName = 'conspectus_subcategories';

	public function idToSlug($id) {
		
		$conspectus = $this->findOneBy(array('id'=>$id));
		return $conspectus->url;
	}
	
	public function slugToId($url) {
		
		$conspectus = $this->findOneBy(array('url'=>$url));
		return $conspectus->id;		
	}	
}
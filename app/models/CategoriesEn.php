<?php

namespace WebArchiv;


class CategoriesEn extends Table
{
	protected $tableName = 'conspectus_en';
	
	public function idToSlug($id) {
		
		$conspectus = $this->find($id);
		return $conspectus->url;
	}
	
	public function slugToId($url) {
		
		$conspectus = $this->findOneBy(array('url'=>$url));
		return $conspectus->id;		
	}	
}
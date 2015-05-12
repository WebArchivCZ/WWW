<?php

namespace WebArchiv;


class SubcategoriesEn extends Table
{
	protected $tableName = 'conspectus_subcategories_en';

	public function idToSlug($id) {
		
		$conspectus_subcategories = $this->findOneBy(array('id'=>$id));
		return $conspectus_subcategories->url;
	}
	
	public function slugToId($url) {
		
		$conspectus_subcategories = $this->findOneBy(array('url'=>$url));
		return $conspectus_subcategories->id;		
	}	
}
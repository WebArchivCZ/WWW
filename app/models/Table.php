<?php

namespace WebArchiv;

use Nette;



/**
 * Reprezentuje repozitář pro databázovou tabulku
 */
abstract class Table extends Nette\Object
{

	/**
	 * @var Nette\Database\Context
	 */
	protected $context;

	/**
	 * @var string
	 */
	protected $tableName;



	/**
	 * @param Nette\Database\Context $db
	 * @throws \Nette\InvalidStateException
	 */
	public function __construct(Nette\Database\Context $db)
	{
		$this->context = $db;

		if ($this->tableName === NULL) {
			$class = get_class($this);
			throw new Nette\InvalidStateException("Název tabulky musí být definován v $class::\$tableName.");
		}
	}



	/**
	 * Vrací celou tabulku z databáze
	 * @return \Nette\Database\Table\Selection
	 */
	protected function getTable()
	{
		return $this->context->table($this->tableName);
	}



	/**
	 * Vrací všechny záznamy z databáze
	 * @return \Nette\Database\Table\Selection
	 */
	public function findAll()
	{
		return $this->getTable();
	}


	/**
	 * Vrací vyfiltrované záznamy na základě vstupního pole
	 * (pole array('name' => 'David') se převede na část SQL dotazu WHERE name = 'David')
	 *
	 * @param array $by
	 *
	 * @return \Nette\Database\Table\Selection
	 */
	public function findBy(array $by)
	{
		return $this->getTable()->where($by);
	}



	/**
	 * To samé jako findBy akorát vrací vždy jen jeden záznam
	 *
	 * @param array $by
	 *
	 * @return \Nette\Database\Table\ActiveRow|FALSE
	 */
	public function findOneBy(array $by)
	{
		return $this->findBy($by)->limit(1)->fetch();
	}



	/**
	 * Vrací záznam s daným primárním klíčem
	 *
	 * @param int $id
	 *
	 * @return \Nette\Database\Table\ActiveRow|FALSE
	 */
	public function find($id)
	{
		return $this->getTable()->get($id);
	}

	
	/**
	 * Vrací počet řádků podle parametrů
	 *
	 * @param array $where
	 *
	 * @return int|
	 */
	public function getCount(array $where)
	{
		return $this->getTable()->where($where)->count();
	}
	
	
	/**
	 * Mění stav atributu published z TRUE na FALSE a obráceně
	 *
	 * @param int $id
	 */
	public function publish($id) 
	{
		$item = $this->find($id);
        $newState = ($item->published ? FALSE : TRUE);

        $item->update(array(
            'published' => $newState
        ));
	}

	
	/**
	 * Vytvoři novou položku v databázi
	 *
	 * @param Array $values
	 *
	 * @return \Nette\Database\Table\ActiveRow|FALSE
	 */
	public function create($values, $addorderNum = FALSE) {
		$item = $this->getTable()->insert($values);
		if($addorderNum) {
			$item->update(array('order_num'=>$item->id));
		}
		return $item;
	}	
	
	
	/**
	 * Vymění order_num dvou položek podle zadaného směru
	 *
	 * @param int $itemId
	 * @param String $direction
	 *
	 * @return boolean
	 */
    public function changeOrder($itemId, $direction = "") {
        $item = $this->find($itemId);
        if($item) {
            $secondItem = NULL;
            // hledame za co to vymenime
            if($direction == "bigger") {$secondItem = $this->getTable()->where(array('order_num > '.$item->order_num, 'type'=>$item->type))->order('order_num ASC')->limit(1)->fetch();}
            if($direction == "smaller") {$secondItem = $this->getTable()->where(array('order_num < '.$item->order_num, 'type'=>$item->type))->order('order_num DESC')->limit(1)->fetch();}

            if($secondItem) {
                // vymena order_num
                $changeorder_num = $item->order_num;
                $item->update(array('order_num' => $secondItem->order_num));
                $secondItem->update(array('order_num' => $changeorder_num));
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
	}
        return TRUE;
    }
	
	
}

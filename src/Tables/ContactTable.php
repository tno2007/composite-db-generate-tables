<?php

declare(strict_types=1);

namespace App\Tables;

use App\Application\Contact;
use Composite\DB\AbstractTable;
use Composite\DB\TableConfig;

class ContactTable extends AbstractTable
{
	protected function getConfig(): TableConfig
	{
		return TableConfig::fromEntitySchema(Contact::schema());
	}


	public function findByPk(int $id): ?Contact
	{
		return $this->_findByPk($id);
	}


	/**
	 * @return Contact[]
	 */
	public function findAll(): array
	{
		return $this->_findAll();
	}


	public function countAll(): int
	{
		return $this->_countAll();
	}
}

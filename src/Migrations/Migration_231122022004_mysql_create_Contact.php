<?php

declare(strict_types=1);

namespace App\Migrations;

class Migration_231122022004_mysql_create_Contact extends \Composite\Sync\Migration\AbstractMigration
{
	public const CONNECTION_NAME = 'mysql';

	public function up(): void
	{
		$this->query("
			CREATE TABLE `Contact` (
		        `id` INT NOT NULL AUTO_INCREMENT,
		        `email` VARCHAR(255) NOT NULL,
		        `name` VARCHAR(255) NULL DEFAULT NULL,
		        `is_test` TINYINT(1) NOT NULL DEFAULT 0,
		        `languages` JSON NOT NULL,
		        `created_at` TIMESTAMP(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
		        PRIMARY KEY (`id`)
		    ) ENGINE=InnoDB COLLATE=utf8mb4_unicode_ci;
		");
	}


	public function down(): void
	{
		$this->query("
			DROP TABLE IF EXISTS `Contact`;
		");
	}
}

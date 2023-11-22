<?php

declare(strict_types=1);

namespace App\Application;

use Composite\DB\Attributes\Table;
use Composite\Entity\AbstractEntity;
use Composite\DB\Attributes\PrimaryKey;

#[Table(connection: 'mysql', name: 'Contact')]
class Contact extends AbstractEntity
{
    #[PrimaryKey(autoIncrement: true)]
    public readonly int $id;

    public function __construct(
        public string $email,
        public ?string $name = null,
        public bool $is_test = false,
        public array $languages = [],
        public readonly \DateTimeImmutable $created_at = new \DateTimeImmutable(),
    ) {}
}
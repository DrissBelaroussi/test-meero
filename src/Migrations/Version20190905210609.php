<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190905210609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE orders CHANGE market_place market_place VARCHAR(255) DEFAULT NULL, CHANGE id_flux id_flux INT DEFAULT NULL, CHANGE order_refid order_refid INT DEFAULT NULL, CHANGE order_mrid order_mrid INT DEFAULT NULL, CHANGE order_amount order_amount DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE orders CHANGE market_place market_place VARCHAR(255) NOT NULL COLLATE utf8mb4_unicode_ci, CHANGE id_flux id_flux INT NOT NULL, CHANGE order_refid order_refid INT NOT NULL, CHANGE order_mrid order_mrid INT NOT NULL, CHANGE order_amount order_amount DOUBLE PRECISION NOT NULL');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210317093304 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE suppliers (id INT AUTO_INCREMENT NOT NULL, company_name VARCHAR(40) NOT NULL, contact_name VARCHAR(40) NOT NULL, contact_title VARCHAR(40) NOT NULL, adress VARCHAR(40) NOT NULL, city VARCHAR(40) NOT NULL, region VARCHAR(40) DEFAULT NULL, postal_code VARCHAR(40) NOT NULL, phone INT NOT NULL, fax INT DEFAULT NULL, home_pages VARCHAR(40) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE suppliers');
    }
}

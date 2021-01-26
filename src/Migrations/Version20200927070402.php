<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200927070402 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE tble_produit (id INT AUTO_INCREMENT NOT NULL, unite_produit_id INT NOT NULL, reference VARCHAR(55) NOT NULL, designation_produit VARCHAR(50) NOT NULL, category_produit INT NOT NULL, prix_achat_ht_produit DOUBLE PRECISION NOT NULL, taux_marge_produit DOUBLE PRECISION NOT NULL, id_fournisseurs INT NOT NULL, sous_category_produit INT NOT NULL, ligne_de_produit INT NOT NULL, INDEX IDX_B1C1A13B9063AC0 (unite_produit_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tble_produit ADD CONSTRAINT FK_B1C1A13B9063AC0 FOREIGN KEY (unite_produit_id) REFERENCES tble_unite (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE tble_produit');
    }
}

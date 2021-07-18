<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210718221049 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE carte_bancaire (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, numero VARCHAR(19) NOT NULL, statut VARCHAR(6) NOT NULL, date_expiration DATETIME NOT NULL, date_suppr DATETIME DEFAULT NULL)');
        $this->addSql('CREATE TABLE compte_bancaire (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, utilisateur_id INTEGER NOT NULL, carte_bancaire_id INTEGER NOT NULL, iban VARCHAR(27) NOT NULL, bic VARCHAR(11) NOT NULL, ref_id_partenaire VARCHAR(255) NOT NULL, balance DOUBLE PRECISION NOT NULL, date_suppr DATETIME DEFAULT NULL)');
        $this->addSql('CREATE INDEX IDX_50BC21DEFB88E14F ON compte_bancaire (utilisateur_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_50BC21DE961B16D4 ON compte_bancaire (carte_bancaire_id)');
        $this->addSql('CREATE TABLE utilisateur (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_naissance DATETIME DEFAULT NULL, email VARCHAR(255) NOT NULL, telephone VARCHAR(15) DEFAULT NULL, date_suppr DATETIME DEFAULT NULL)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE carte_bancaire');
        $this->addSql('DROP TABLE compte_bancaire');
        $this->addSql('DROP TABLE utilisateur');
    }
}

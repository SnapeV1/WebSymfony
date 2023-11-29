<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231125134408 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, formation_id INT DEFAULT NULL, iduser INT NOT NULL, idformation INT NOT NULL, text VARCHAR(1000) NOT NULL, date DATETIME NOT NULL, evaluation INT NOT NULL, INDEX IDX_67F068BC5200282E (formation_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(150) NOT NULL, categories VARCHAR(150) NOT NULL, prix DOUBLE PRECISION NOT NULL, remise DOUBLE PRECISION NOT NULL, duree VARCHAR(100) NOT NULL, description VARCHAR(1000) NOT NULL, video VARCHAR(1000) NOT NULL, likes VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_404021BFFF7747B4 (titre), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC5200282E FOREIGN KEY (formation_id) REFERENCES formation (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC5200282E');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE formation');
    }
}

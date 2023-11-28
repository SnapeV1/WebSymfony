<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231123172847 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE event_admin (id INT AUTO_INCREMENT NOT NULL, nom_a VARCHAR(255) NOT NULL, date_a VARCHAR(255) NOT NULL, lieu_a VARCHAR(255) NOT NULL, description_a VARCHAR(255) NOT NULL, image_a VARCHAR(255) NOT NULL, prix_a INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_admin_event_user (event_admin_id INT NOT NULL, event_user_id INT NOT NULL, INDEX IDX_7C76DFAF22C76BC0 (event_admin_id), INDEX IDX_7C76DFAF22397A3A (event_user_id), PRIMARY KEY(event_admin_id, event_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, cin INT NOT NULL, nom_u VARCHAR(255) NOT NULL, prenom_u VARCHAR(255) NOT NULL, INDEX IDX_42C8495571F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event_admin_event_user ADD CONSTRAINT FK_7C76DFAF22C76BC0 FOREIGN KEY (event_admin_id) REFERENCES event_admin (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_admin_event_user ADD CONSTRAINT FK_7C76DFAF22397A3A FOREIGN KEY (event_user_id) REFERENCES event_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495571F7E88B FOREIGN KEY (event_id) REFERENCES event_user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_admin_event_user DROP FOREIGN KEY FK_7C76DFAF22C76BC0');
        $this->addSql('ALTER TABLE event_admin_event_user DROP FOREIGN KEY FK_7C76DFAF22397A3A');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495571F7E88B');
        $this->addSql('DROP TABLE event_admin');
        $this->addSql('DROP TABLE event_admin_event_user');
        $this->addSql('DROP TABLE event_user');
        $this->addSql('DROP TABLE reservation');
    }
}

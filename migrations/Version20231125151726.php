<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231125151726 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE commande (id_c INT AUTO_INCREMENT NOT NULL, nomc VARCHAR(50) NOT NULL, id_client INT NOT NULL, adresse VARCHAR(50) NOT NULL, date DATETIME NOT NULL, numtel INT NOT NULL, email VARCHAR(50) NOT NULL, total DOUBLE PRECISION NOT NULL, PRIMARY KEY(id_c)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE conversation (idconv INT AUTO_INCREMENT NOT NULL, Date_MSG DATETIME NOT NULL, Msg TEXT DEFAULT NULL, iduser1 INT NOT NULL, iduser2 INT NOT NULL, isRead TINYINT(1) NOT NULL, PRIMARY KEY(idconv)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_admin (id INT AUTO_INCREMENT NOT NULL, nom_a VARCHAR(255) NOT NULL, date_a VARCHAR(255) NOT NULL, lieu_a VARCHAR(255) NOT NULL, description_a VARCHAR(255) NOT NULL, image_a VARCHAR(255) NOT NULL, prix_a INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_admin_event_user (event_admin_id INT NOT NULL, event_user_id INT NOT NULL, INDEX IDX_7C76DFAF22C76BC0 (event_admin_id), INDEX IDX_7C76DFAF22397A3A (event_user_id), PRIMARY KEY(event_admin_id, event_user_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE event_user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, date VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groups (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, size INT NOT NULL, logo VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE historique (idh INT AUTO_INCREMENT NOT NULL, id_c INT DEFAULT NULL, dateorder DATETIME NOT NULL, product VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, INDEX IDX_EDBFD5ECC12C7510 (id_c), PRIMARY KEY(idh)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE lineorder (id_o INT AUTO_INCREMENT NOT NULL, id_c INT DEFAULT NULL, productname VARCHAR(50) NOT NULL, quantite INT NOT NULL, prix DOUBLE PRECISION NOT NULL, INDEX IDX_2341105AC12C7510 (id_c), PRIMARY KEY(id_o)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE membre (Role VARCHAR(50) NOT NULL, UserID INT NOT NULL, GroupID INT NOT NULL, INDEX IDX_F6B4FB2958746832 (UserID), INDEX IDX_F6B4FB29195291E4 (GroupID), PRIMARY KEY(UserID, GroupID)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE notification (id INT AUTO_INCREMENT NOT NULL, content LONGTEXT NOT NULL, notif_date DATETIME NOT NULL, iduser INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product (idpdts INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prix DOUBLE PRECISION NOT NULL, qte INT NOT NULL, categ VARCHAR(50) NOT NULL, matiere VARCHAR(50) NOT NULL, description VARCHAR(350) NOT NULL, image VARCHAR(1000) NOT NULL, UNIQUE INDEX UNIQ_D34A04AD6C6E55B5 (nom), PRIMARY KEY(idpdts)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, event_id INT DEFAULT NULL, cin INT NOT NULL, nom_u VARCHAR(255) NOT NULL, prenom_u VARCHAR(255) NOT NULL, INDEX IDX_42C8495571F7E88B (event_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateur (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, date_naissance VARCHAR(30) NOT NULL, cin VARCHAR(10) NOT NULL, age INT NOT NULL, pic VARCHAR(200) NOT NULL, username VARCHAR(20) NOT NULL, password VARCHAR(40) NOT NULL, email VARCHAR(100) NOT NULL, type VARCHAR(15) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE event_admin_event_user ADD CONSTRAINT FK_7C76DFAF22C76BC0 FOREIGN KEY (event_admin_id) REFERENCES event_admin (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE event_admin_event_user ADD CONSTRAINT FK_7C76DFAF22397A3A FOREIGN KEY (event_user_id) REFERENCES event_user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE historique ADD CONSTRAINT FK_EDBFD5ECC12C7510 FOREIGN KEY (id_c) REFERENCES commande (id_c)');
        $this->addSql('ALTER TABLE lineorder ADD CONSTRAINT FK_2341105AC12C7510 FOREIGN KEY (id_c) REFERENCES commande (id_c)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB2958746832 FOREIGN KEY (UserID) REFERENCES utilisateur (id)');
        $this->addSql('ALTER TABLE membre ADD CONSTRAINT FK_F6B4FB29195291E4 FOREIGN KEY (GroupID) REFERENCES groups (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495571F7E88B FOREIGN KEY (event_id) REFERENCES event_user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE event_admin_event_user DROP FOREIGN KEY FK_7C76DFAF22C76BC0');
        $this->addSql('ALTER TABLE event_admin_event_user DROP FOREIGN KEY FK_7C76DFAF22397A3A');
        $this->addSql('ALTER TABLE historique DROP FOREIGN KEY FK_EDBFD5ECC12C7510');
        $this->addSql('ALTER TABLE lineorder DROP FOREIGN KEY FK_2341105AC12C7510');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB2958746832');
        $this->addSql('ALTER TABLE membre DROP FOREIGN KEY FK_F6B4FB29195291E4');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495571F7E88B');
        $this->addSql('DROP TABLE commande');
        $this->addSql('DROP TABLE conversation');
        $this->addSql('DROP TABLE event_admin');
        $this->addSql('DROP TABLE event_admin_event_user');
        $this->addSql('DROP TABLE event_user');
        $this->addSql('DROP TABLE groups');
        $this->addSql('DROP TABLE historique');
        $this->addSql('DROP TABLE lineorder');
        $this->addSql('DROP TABLE membre');
        $this->addSql('DROP TABLE notification');
        $this->addSql('DROP TABLE product');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE utilisateur');
        $this->addSql('DROP TABLE messenger_messages');
    }
}

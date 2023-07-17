<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230717131823 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(35) NOT NULL, password VARCHAR(10) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe (id INT AUTO_INCREMENT NOT NULL, administrateur_id INT NOT NULL, email VARCHAR(35) NOT NULL, password VARCHAR(10) NOT NULL, INDEX IDX_F804D3B97EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employe_vehicule (employe_id INT NOT NULL, vehicule_id INT NOT NULL, INDEX IDX_663402231B65292 (employe_id), INDEX IDX_663402234A4A3511 (vehicule_id), PRIMARY KEY(employe_id, vehicule_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formulaire_g (id INT AUTO_INCREMENT NOT NULL, informations_id INT NOT NULL, nom VARCHAR(20) NOT NULL, prenom VARCHAR(20) NOT NULL, email VARCHAR(35) NOT NULL, numero_de_telephone VARCHAR(15) NOT NULL, message VARCHAR(255) NOT NULL, INDEX IDX_BEF5FA3590587D82 (informations_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formulaire_v (id INT AUTO_INCREMENT NOT NULL, vehicule_id INT NOT NULL, nom VARCHAR(10) NOT NULL, prenom VARCHAR(10) NOT NULL, email VARCHAR(35) NOT NULL, numero_de_telephone VARCHAR(15) NOT NULL, message VARCHAR(255) NOT NULL, INDEX IDX_D445DAC74A4A3511 (vehicule_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE information (id INT AUTO_INCREMENT NOT NULL, administrateur_id INT NOT NULL, horaires_garage VARCHAR(255) NOT NULL, services_garage VARCHAR(255) NOT NULL, INDEX IDX_297918837EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE informations (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temoignage (id INT AUTO_INCREMENT NOT NULL, employe_id INT NOT NULL, administrateur_id INT NOT NULL, nom VARCHAR(15) NOT NULL, prenom VARCHAR(20) NOT NULL, commentaires VARCHAR(255) NOT NULL, notes INT NOT NULL, INDEX IDX_BDADBC461B65292 (employe_id), INDEX IDX_BDADBC467EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicule (id INT AUTO_INCREMENT NOT NULL, administrateur_id INT NOT NULL, prix INT NOT NULL, kilometrage INT NOT NULL, annee_circulation INT NOT NULL, equipements_et_options VARCHAR(255) NOT NULL, INDEX IDX_292FFF1D7EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employe ADD CONSTRAINT FK_F804D3B97EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE employe_vehicule ADD CONSTRAINT FK_663402231B65292 FOREIGN KEY (employe_id) REFERENCES employe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE employe_vehicule ADD CONSTRAINT FK_663402234A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formulaire_g ADD CONSTRAINT FK_BEF5FA3590587D82 FOREIGN KEY (informations_id) REFERENCES informations (id)');
        $this->addSql('ALTER TABLE formulaire_v ADD CONSTRAINT FK_D445DAC74A4A3511 FOREIGN KEY (vehicule_id) REFERENCES vehicule (id)');
        $this->addSql('ALTER TABLE information ADD CONSTRAINT FK_297918837EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE temoignage ADD CONSTRAINT FK_BDADBC461B65292 FOREIGN KEY (employe_id) REFERENCES employe (id)');
        $this->addSql('ALTER TABLE temoignage ADD CONSTRAINT FK_BDADBC467EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D7EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employe DROP FOREIGN KEY FK_F804D3B97EE5403C');
        $this->addSql('ALTER TABLE employe_vehicule DROP FOREIGN KEY FK_663402231B65292');
        $this->addSql('ALTER TABLE employe_vehicule DROP FOREIGN KEY FK_663402234A4A3511');
        $this->addSql('ALTER TABLE formulaire_g DROP FOREIGN KEY FK_BEF5FA3590587D82');
        $this->addSql('ALTER TABLE formulaire_v DROP FOREIGN KEY FK_D445DAC74A4A3511');
        $this->addSql('ALTER TABLE information DROP FOREIGN KEY FK_297918837EE5403C');
        $this->addSql('ALTER TABLE temoignage DROP FOREIGN KEY FK_BDADBC461B65292');
        $this->addSql('ALTER TABLE temoignage DROP FOREIGN KEY FK_BDADBC467EE5403C');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D7EE5403C');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE employe');
        $this->addSql('DROP TABLE employe_vehicule');
        $this->addSql('DROP TABLE formulaire_g');
        $this->addSql('DROP TABLE formulaire_v');
        $this->addSql('DROP TABLE information');
        $this->addSql('DROP TABLE informations');
        $this->addSql('DROP TABLE temoignage');
        $this->addSql('DROP TABLE vehicule');
    }
}

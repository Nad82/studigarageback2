<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230716001622 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE administrateur (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(35) NOT NULL, password VARCHAR(9) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employes (id INT AUTO_INCREMENT NOT NULL, administrateur_id INT NOT NULL, email VARCHAR(30) NOT NULL, password VARCHAR(8) NOT NULL, INDEX IDX_A94BC0F07EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formulaire_g (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(35) NOT NULL, numero_de_telephone VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formulaire_v (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(30) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(35) NOT NULL, numero_de_telephone VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE informations (id INT AUTO_INCREMENT NOT NULL, formulaire_gs_id INT NOT NULL, administrateur_id INT NOT NULL, horaires_garage INT NOT NULL, servicesgarage VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_6F966489FB7AB9AA (formulaire_gs_id), INDEX IDX_6F9664897EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE temoignages (id INT AUTO_INCREMENT NOT NULL, employes_id INT NOT NULL, administrateur_id INT NOT NULL, nom VARCHAR(25) NOT NULL, prenom VARCHAR(30) NOT NULL, commentaires VARCHAR(255) NOT NULL, notes INT NOT NULL, INDEX IDX_840C8612F971F91F (employes_id), INDEX IDX_840C86127EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE vehicules (id INT AUTO_INCREMENT NOT NULL, employes_id INT NOT NULL, formulaire_vs_id INT NOT NULL, administrateur_id INT NOT NULL, prix INT NOT NULL, kilometrage INT NOT NULL, annee_circulation INT NOT NULL, equipements_et_options VARCHAR(255) NOT NULL, INDEX IDX_78218C2DF971F91F (employes_id), UNIQUE INDEX UNIQ_78218C2DA6FA0798 (formulaire_vs_id), INDEX IDX_78218C2D7EE5403C (administrateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE employes ADD CONSTRAINT FK_A94BC0F07EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE informations ADD CONSTRAINT FK_6F966489FB7AB9AA FOREIGN KEY (formulaire_gs_id) REFERENCES formulaire_g (id)');
        $this->addSql('ALTER TABLE informations ADD CONSTRAINT FK_6F9664897EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE temoignages ADD CONSTRAINT FK_840C8612F971F91F FOREIGN KEY (employes_id) REFERENCES employes (id)');
        $this->addSql('ALTER TABLE temoignages ADD CONSTRAINT FK_840C86127EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
        $this->addSql('ALTER TABLE vehicules ADD CONSTRAINT FK_78218C2DF971F91F FOREIGN KEY (employes_id) REFERENCES employes (id)');
        $this->addSql('ALTER TABLE vehicules ADD CONSTRAINT FK_78218C2DA6FA0798 FOREIGN KEY (formulaire_vs_id) REFERENCES formulaire_v (id)');
        $this->addSql('ALTER TABLE vehicules ADD CONSTRAINT FK_78218C2D7EE5403C FOREIGN KEY (administrateur_id) REFERENCES administrateur (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE employes DROP FOREIGN KEY FK_A94BC0F07EE5403C');
        $this->addSql('ALTER TABLE informations DROP FOREIGN KEY FK_6F966489FB7AB9AA');
        $this->addSql('ALTER TABLE informations DROP FOREIGN KEY FK_6F9664897EE5403C');
        $this->addSql('ALTER TABLE temoignages DROP FOREIGN KEY FK_840C8612F971F91F');
        $this->addSql('ALTER TABLE temoignages DROP FOREIGN KEY FK_840C86127EE5403C');
        $this->addSql('ALTER TABLE vehicules DROP FOREIGN KEY FK_78218C2DF971F91F');
        $this->addSql('ALTER TABLE vehicules DROP FOREIGN KEY FK_78218C2DA6FA0798');
        $this->addSql('ALTER TABLE vehicules DROP FOREIGN KEY FK_78218C2D7EE5403C');
        $this->addSql('DROP TABLE administrateur');
        $this->addSql('DROP TABLE employes');
        $this->addSql('DROP TABLE formulaire_g');
        $this->addSql('DROP TABLE formulaire_v');
        $this->addSql('DROP TABLE informations');
        $this->addSql('DROP TABLE temoignages');
        $this->addSql('DROP TABLE vehicules');
    }
}

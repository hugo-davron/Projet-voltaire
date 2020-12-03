<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201124111457 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649AA08CB10 (login), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_bareme (id INT AUTO_INCREMENT NOT NULL, nom_bareme VARCHAR(191) NOT NULL, favori_bareme INT NOT NULL, id_critere INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_critere (id_critere INT AUTO_INCREMENT NOT NULL, progression VARCHAR(191) NOT NULL, tps_utilisation VARCHAR(191) NOT NULL, niveau_atteint VARCHAR(191) NOT NULL, evaluation_finale INT NOT NULL, PRIMARY KEY(id_critere)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_enseignant (id INT AUTO_INCREMENT NOT NULL, nom_enseignant VARCHAR(191) NOT NULL, prenom_enseignant VARCHAR(191) NOT NULL, login VARCHAR(191) NOT NULL, email VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_etudiant (login VARCHAR(191) NOT NULL, nom_etudiant VARCHAR(191) NOT NULL, prenom_etudiant VARCHAR(191) NOT NULL, id_bareme INT NOT NULL, groupe VARCHAR(191) NOT NULL, PRIMARY KEY(login)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_message (id_message INT NOT NULL, login_etudiant VARCHAR(191) NOT NULL, login_enseignant VARCHAR(191) NOT NULL, message VARCHAR(191) NOT NULL, PRIMARY KEY(id_message)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_modules (id_module INT NOT NULL, nom_module VARCHAR(191) NOT NULL, nb_regles_module INT NOT NULL, PRIMARY KEY(id_module)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_niveau (id_niveau INT NOT NULL, nom_niveau VARCHAR(191) NOT NULL, PRIMARY KEY(id_niveau)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_resultat_niveau (id_etudiant VARCHAR(191) NOT NULL, id_niveau VARCHAR(191) NOT NULL, date_export VARCHAR(191) NOT NULL, derniere_utilisation DATE NOT NULL, tps_total TIME NOT NULL, niveau_atteint INT NOT NULL, score_evaluation INT NOT NULL, note INT NOT NULL, PRIMARY KEY(id_etudiant, id_niveau, date_export)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_resultats (id_etudiant VARCHAR(191) NOT NULL, id_module INT NOT NULL, date_export VARCHAR(191) NOT NULL, inscription DATE NOT NULL, derniere_utilisation DATE NOT NULL, tps_total TIME NOT NULL, usage_fixe VARCHAR(191) NOT NULL, usage_mobile VARCHAR(191) NOT NULL, score_evaluation_initiale INT NOT NULL, tps_evaluation_initiale TIME NOT NULL, niveau_initial INT NOT NULL, tps_entrainement TIME NOT NULL, niveau_atteint INT NOT NULL, date_cv DATE NOT NULL, PRIMARY KEY(id_etudiant, id_module, date_export)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voltaire_user (id INT AUTO_INCREMENT NOT NULL, login VARCHAR(191) NOT NULL, mdp VARCHAR(191) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE voltaire_bareme');
        $this->addSql('DROP TABLE voltaire_critere');
        $this->addSql('DROP TABLE voltaire_enseignant');
        $this->addSql('DROP TABLE voltaire_etudiant');
        $this->addSql('DROP TABLE voltaire_message');
        $this->addSql('DROP TABLE voltaire_modules');
        $this->addSql('DROP TABLE voltaire_niveau');
        $this->addSql('DROP TABLE voltaire_resultat_niveau');
        $this->addSql('DROP TABLE voltaire_resultats');
        $this->addSql('DROP TABLE voltaire_user');
    }
}

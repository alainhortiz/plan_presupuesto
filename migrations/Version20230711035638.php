<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230711035638 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE modelo_inversione (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_inversiones ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fceha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_transporte ADD fecha_registra DATETIME DEFAULT NULL, ADD fecha_revisa DATETIME DEFAULT NULL, ADD fecha_valida DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE modelo_inversione');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP fecha_registra, DROP fecha_valida, DROP fecha_revisa');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP fecha_revisa, DROP fecha_registra, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_inversiones DROP fecha_registra, DROP fecha_revisa, DROP fceha_valida');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
        $this->addSql('ALTER TABLE modelo_transporte DROP fecha_registra, DROP fecha_revisa, DROP fecha_valida');
    }
}

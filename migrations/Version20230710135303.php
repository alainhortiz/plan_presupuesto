<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230710135303 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ante_proyecto_plan_presupuesto (id INT AUTO_INCREMENT NOT NULL, year DATE NOT NULL, fecha_inicio DATE NOT NULL, fecha_revision DATE NOT NULL, fecha_validacion DATE NOT NULL, is_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE modelo_nivel_actividad (id INT AUTO_INCREMENT NOT NULL, ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, matricula_diurno INT NOT NULL, matricula_preparatoria INT NOT NULL, matricula_encuentro INT NOT NULL, matricula_distancia INT NOT NULL, matricula_ciclo_corto INT NOT NULL, nuevo_ingreso_diurno INT NOT NULL, nuevo_ingreso_encuentro INT NOT NULL, nuevo_ingreso_distancia INT NOT NULL, nuevo_ingreso_ciclo_corto INT NOT NULL, becados_mujeres INT NOT NULL, becados_cubanos INT NOT NULL, becados_cubanos_mujeres INT NOT NULL, becados_extranjeros INT NOT NULL, becados_extranjeros_mujeres INT NOT NULL, seminternos INT NOT NULL, graduados_diurnos INT NOT NULL, graduados_encuentro INT NOT NULL, graduados_distancia INT NOT NULL, graduados_ciclo_corto INT NOT NULL, profesores_plantilla INT NOT NULL, profesores_contratados INT NOT NULL, investigadores INT NOT NULL, trabajadores_plantilla INT NOT NULL, trabajadores_contratados INT NOT NULL, trabajadores_sustitucion INT NOT NULL, adiestrados_nivel_superior INT NOT NULL, adiestrados_nivel_medio INT NOT NULL, eficiencia_vertical INT NOT NULL, eficiencia_limpia INT NOT NULL, INDEX IDX_550BA51211914CE9 (ante_proyecto_plan_presupuesto_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD CONSTRAINT FK_550BA51211914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP FOREIGN KEY FK_550BA51211914CE9');
        $this->addSql('DROP TABLE ante_proyecto_plan_presupuesto');
        $this->addSql('DROP TABLE modelo_nivel_actividad');
    }
}

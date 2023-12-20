<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230710150406 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD matricula_total INT NOT NULL, ADD nuevo_ingreso_total INT NOT NULL, ADD becados_total INT NOT NULL, ADD graduados_total INT NOT NULL, ADD profesores_total INT NOT NULL, ADD trabajadores_total INT NOT NULL, ADD adiestrados_total INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP matricula_total, DROP nuevo_ingreso_total, DROP becados_total, DROP graduados_total, DROP profesores_total, DROP trabajadores_total, DROP adiestrados_total');
    }
}

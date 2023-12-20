<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230710135950 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE estado (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD CONSTRAINT FK_550BA5126CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD CONSTRAINT FK_550BA5129F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_550BA5126CA204EF ON modelo_nivel_actividad (entidad_id)');
        $this->addSql('CREATE INDEX IDX_550BA5129F5A440B ON modelo_nivel_actividad (estado_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP FOREIGN KEY FK_550BA5129F5A440B');
        $this->addSql('DROP TABLE estado');
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP FOREIGN KEY FK_550BA5126CA204EF');
        $this->addSql('DROP INDEX IDX_550BA5126CA204EF ON modelo_nivel_actividad');
        $this->addSql('DROP INDEX IDX_550BA5129F5A440B ON modelo_nivel_actividad');
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP entidad_id, DROP estado_id');
    }
}

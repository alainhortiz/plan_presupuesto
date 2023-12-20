<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230711030338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entidad ADD modelo_colaboracion_internacional_activos_fijos TINYINT(1) NOT NULL, ADD modelo_colaboracion_internacional_medios_transportes TINYINT(1) NOT NULL, ADD modelo_colaboracion_internacional_proyectos TINYINT(1) NOT NULL, ADD modelo_defensa_seguridad_proteccion TINYINT(1) NOT NULL, ADD modelo_dinamica_demografica TINYINT(1) NOT NULL, ADD modelo_inversiones TINYINT(1) NOT NULL, ADD modelo_portadores_combustible TINYINT(1) NOT NULL, ADD modelo_portadores_energia TINYINT(1) NOT NULL, ADD modelo_portadores_servicios TINYINT(1) NOT NULL, ADD modelo_sector_externo TINYINT(1) NOT NULL, ADD modelo_transporte TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD CONSTRAINT FK_B45A313911914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD CONSTRAINT FK_B45A31396CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD CONSTRAINT FK_B45A31399F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_B45A313911914CE9 ON modelo_colaboracion_internacional_activos_fijos (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_B45A31396CA204EF ON modelo_colaboracion_internacional_activos_fijos (entidad_id)');
        $this->addSql('CREATE INDEX IDX_B45A31399F5A440B ON modelo_colaboracion_internacional_activos_fijos (estado_id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD CONSTRAINT FK_AF243E8811914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD CONSTRAINT FK_AF243E886CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD CONSTRAINT FK_AF243E889F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_AF243E8811914CE9 ON modelo_colaboracion_internacional_medios_transportes (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_AF243E886CA204EF ON modelo_colaboracion_internacional_medios_transportes (entidad_id)');
        $this->addSql('CREATE INDEX IDX_AF243E889F5A440B ON modelo_colaboracion_internacional_medios_transportes (estado_id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD CONSTRAINT FK_F4C9D4E11914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD CONSTRAINT FK_F4C9D4E6CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD CONSTRAINT FK_F4C9D4E9F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_F4C9D4E11914CE9 ON modelo_colaboracion_internacional_proyectos (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_F4C9D4E6CA204EF ON modelo_colaboracion_internacional_proyectos (entidad_id)');
        $this->addSql('CREATE INDEX IDX_F4C9D4E9F5A440B ON modelo_colaboracion_internacional_proyectos (estado_id)');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD CONSTRAINT FK_C2F3D39A11914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD CONSTRAINT FK_C2F3D39A6CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD CONSTRAINT FK_C2F3D39A9F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_C2F3D39A11914CE9 ON modelo_defensa_seguridad_proteccion (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_C2F3D39A6CA204EF ON modelo_defensa_seguridad_proteccion (entidad_id)');
        $this->addSql('CREATE INDEX IDX_C2F3D39A9F5A440B ON modelo_defensa_seguridad_proteccion (estado_id)');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD CONSTRAINT FK_E0CD825211914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD CONSTRAINT FK_E0CD82526CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD CONSTRAINT FK_E0CD82529F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_E0CD825211914CE9 ON modelo_dinamica_demografica (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_E0CD82526CA204EF ON modelo_dinamica_demografica (entidad_id)');
        $this->addSql('CREATE INDEX IDX_E0CD82529F5A440B ON modelo_dinamica_demografica (estado_id)');
        $this->addSql('ALTER TABLE modelo_inversiones ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_inversiones ADD CONSTRAINT FK_F67DDFE311914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_inversiones ADD CONSTRAINT FK_F67DDFE36CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_inversiones ADD CONSTRAINT FK_F67DDFE39F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_F67DDFE311914CE9 ON modelo_inversiones (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_F67DDFE36CA204EF ON modelo_inversiones (entidad_id)');
        $this->addSql('CREATE INDEX IDX_F67DDFE39F5A440B ON modelo_inversiones (estado_id)');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura ADD modelo_inversiones_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura ADD CONSTRAINT FK_63C982FAE5F17F6E FOREIGN KEY (modelo_inversiones_id) REFERENCES modelo_inversiones (id)');
        $this->addSql('CREATE INDEX IDX_63C982FAE5F17F6E ON modelo_inversiones_apertura (modelo_inversiones_id)');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD CONSTRAINT FK_1F32C80B11914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD CONSTRAINT FK_1F32C80B6CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD CONSTRAINT FK_1F32C80B9F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_1F32C80B11914CE9 ON modelo_portadores_combustible (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_1F32C80B6CA204EF ON modelo_portadores_combustible (entidad_id)');
        $this->addSql('CREATE INDEX IDX_1F32C80B9F5A440B ON modelo_portadores_combustible (estado_id)');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD CONSTRAINT FK_FE30C45611914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD CONSTRAINT FK_FE30C4566CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD CONSTRAINT FK_FE30C4569F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_FE30C45611914CE9 ON modelo_portadores_energia (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_FE30C4566CA204EF ON modelo_portadores_energia (entidad_id)');
        $this->addSql('CREATE INDEX IDX_FE30C4569F5A440B ON modelo_portadores_energia (estado_id)');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD CONSTRAINT FK_7F9E8F1C6CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD CONSTRAINT FK_7F9E8F1C9F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_7F9E8F1C6CA204EF ON modelo_portadores_servicios (entidad_id)');
        $this->addSql('CREATE INDEX IDX_7F9E8F1C9F5A440B ON modelo_portadores_servicios (estado_id)');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD CONSTRAINT FK_7AFC717911914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD CONSTRAINT FK_7AFC71796CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD CONSTRAINT FK_7AFC71799F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_7AFC717911914CE9 ON modelo_sector_externo (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_7AFC71796CA204EF ON modelo_sector_externo (entidad_id)');
        $this->addSql('CREATE INDEX IDX_7AFC71799F5A440B ON modelo_sector_externo (estado_id)');
        $this->addSql('ALTER TABLE modelo_transporte ADD ante_proyecto_plan_presupuesto_id INT DEFAULT NULL, ADD entidad_id INT DEFAULT NULL, ADD estado_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_transporte ADD CONSTRAINT FK_2A0A232411914CE9 FOREIGN KEY (ante_proyecto_plan_presupuesto_id) REFERENCES ante_proyecto_plan_presupuesto (id)');
        $this->addSql('ALTER TABLE modelo_transporte ADD CONSTRAINT FK_2A0A23246CA204EF FOREIGN KEY (entidad_id) REFERENCES entidad (id)');
        $this->addSql('ALTER TABLE modelo_transporte ADD CONSTRAINT FK_2A0A23249F5A440B FOREIGN KEY (estado_id) REFERENCES estado (id)');
        $this->addSql('CREATE INDEX IDX_2A0A232411914CE9 ON modelo_transporte (ante_proyecto_plan_presupuesto_id)');
        $this->addSql('CREATE INDEX IDX_2A0A23246CA204EF ON modelo_transporte (entidad_id)');
        $this->addSql('CREATE INDEX IDX_2A0A23249F5A440B ON modelo_transporte (estado_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE entidad DROP modelo_colaboracion_internacional_activos_fijos, DROP modelo_colaboracion_internacional_medios_transportes, DROP modelo_colaboracion_internacional_proyectos, DROP modelo_defensa_seguridad_proteccion, DROP modelo_dinamica_demografica, DROP modelo_inversiones, DROP modelo_portadores_combustible, DROP modelo_portadores_energia, DROP modelo_portadores_servicios, DROP modelo_sector_externo, DROP modelo_transporte');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP FOREIGN KEY FK_B45A313911914CE9');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP FOREIGN KEY FK_B45A31396CA204EF');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP FOREIGN KEY FK_B45A31399F5A440B');
        $this->addSql('DROP INDEX IDX_B45A313911914CE9 ON modelo_colaboracion_internacional_activos_fijos');
        $this->addSql('DROP INDEX IDX_B45A31396CA204EF ON modelo_colaboracion_internacional_activos_fijos');
        $this->addSql('DROP INDEX IDX_B45A31399F5A440B ON modelo_colaboracion_internacional_activos_fijos');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP FOREIGN KEY FK_AF243E8811914CE9');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP FOREIGN KEY FK_AF243E886CA204EF');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP FOREIGN KEY FK_AF243E889F5A440B');
        $this->addSql('DROP INDEX IDX_AF243E8811914CE9 ON modelo_colaboracion_internacional_medios_transportes');
        $this->addSql('DROP INDEX IDX_AF243E886CA204EF ON modelo_colaboracion_internacional_medios_transportes');
        $this->addSql('DROP INDEX IDX_AF243E889F5A440B ON modelo_colaboracion_internacional_medios_transportes');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP FOREIGN KEY FK_F4C9D4E11914CE9');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP FOREIGN KEY FK_F4C9D4E6CA204EF');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP FOREIGN KEY FK_F4C9D4E9F5A440B');
        $this->addSql('DROP INDEX IDX_F4C9D4E11914CE9 ON modelo_colaboracion_internacional_proyectos');
        $this->addSql('DROP INDEX IDX_F4C9D4E6CA204EF ON modelo_colaboracion_internacional_proyectos');
        $this->addSql('DROP INDEX IDX_F4C9D4E9F5A440B ON modelo_colaboracion_internacional_proyectos');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP FOREIGN KEY FK_C2F3D39A11914CE9');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP FOREIGN KEY FK_C2F3D39A6CA204EF');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP FOREIGN KEY FK_C2F3D39A9F5A440B');
        $this->addSql('DROP INDEX IDX_C2F3D39A11914CE9 ON modelo_defensa_seguridad_proteccion');
        $this->addSql('DROP INDEX IDX_C2F3D39A6CA204EF ON modelo_defensa_seguridad_proteccion');
        $this->addSql('DROP INDEX IDX_C2F3D39A9F5A440B ON modelo_defensa_seguridad_proteccion');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP FOREIGN KEY FK_E0CD825211914CE9');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP FOREIGN KEY FK_E0CD82526CA204EF');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP FOREIGN KEY FK_E0CD82529F5A440B');
        $this->addSql('DROP INDEX IDX_E0CD825211914CE9 ON modelo_dinamica_demografica');
        $this->addSql('DROP INDEX IDX_E0CD82526CA204EF ON modelo_dinamica_demografica');
        $this->addSql('DROP INDEX IDX_E0CD82529F5A440B ON modelo_dinamica_demografica');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_inversiones DROP FOREIGN KEY FK_F67DDFE311914CE9');
        $this->addSql('ALTER TABLE modelo_inversiones DROP FOREIGN KEY FK_F67DDFE36CA204EF');
        $this->addSql('ALTER TABLE modelo_inversiones DROP FOREIGN KEY FK_F67DDFE39F5A440B');
        $this->addSql('DROP INDEX IDX_F67DDFE311914CE9 ON modelo_inversiones');
        $this->addSql('DROP INDEX IDX_F67DDFE36CA204EF ON modelo_inversiones');
        $this->addSql('DROP INDEX IDX_F67DDFE39F5A440B ON modelo_inversiones');
        $this->addSql('ALTER TABLE modelo_inversiones DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura DROP FOREIGN KEY FK_63C982FAE5F17F6E');
        $this->addSql('DROP INDEX IDX_63C982FAE5F17F6E ON modelo_inversiones_apertura');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura DROP modelo_inversiones_id');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP FOREIGN KEY FK_1F32C80B11914CE9');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP FOREIGN KEY FK_1F32C80B6CA204EF');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP FOREIGN KEY FK_1F32C80B9F5A440B');
        $this->addSql('DROP INDEX IDX_1F32C80B11914CE9 ON modelo_portadores_combustible');
        $this->addSql('DROP INDEX IDX_1F32C80B6CA204EF ON modelo_portadores_combustible');
        $this->addSql('DROP INDEX IDX_1F32C80B9F5A440B ON modelo_portadores_combustible');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP FOREIGN KEY FK_FE30C45611914CE9');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP FOREIGN KEY FK_FE30C4566CA204EF');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP FOREIGN KEY FK_FE30C4569F5A440B');
        $this->addSql('DROP INDEX IDX_FE30C45611914CE9 ON modelo_portadores_energia');
        $this->addSql('DROP INDEX IDX_FE30C4566CA204EF ON modelo_portadores_energia');
        $this->addSql('DROP INDEX IDX_FE30C4569F5A440B ON modelo_portadores_energia');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP FOREIGN KEY FK_7F9E8F1C6CA204EF');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP FOREIGN KEY FK_7F9E8F1C9F5A440B');
        $this->addSql('DROP INDEX IDX_7F9E8F1C6CA204EF ON modelo_portadores_servicios');
        $this->addSql('DROP INDEX IDX_7F9E8F1C9F5A440B ON modelo_portadores_servicios');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP FOREIGN KEY FK_7AFC717911914CE9');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP FOREIGN KEY FK_7AFC71796CA204EF');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP FOREIGN KEY FK_7AFC71799F5A440B');
        $this->addSql('DROP INDEX IDX_7AFC717911914CE9 ON modelo_sector_externo');
        $this->addSql('DROP INDEX IDX_7AFC71796CA204EF ON modelo_sector_externo');
        $this->addSql('DROP INDEX IDX_7AFC71799F5A440B ON modelo_sector_externo');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
        $this->addSql('ALTER TABLE modelo_transporte DROP FOREIGN KEY FK_2A0A232411914CE9');
        $this->addSql('ALTER TABLE modelo_transporte DROP FOREIGN KEY FK_2A0A23246CA204EF');
        $this->addSql('ALTER TABLE modelo_transporte DROP FOREIGN KEY FK_2A0A23249F5A440B');
        $this->addSql('DROP INDEX IDX_2A0A232411914CE9 ON modelo_transporte');
        $this->addSql('DROP INDEX IDX_2A0A23246CA204EF ON modelo_transporte');
        $this->addSql('DROP INDEX IDX_2A0A23249F5A440B ON modelo_transporte');
        $this->addSql('ALTER TABLE modelo_transporte DROP ante_proyecto_plan_presupuesto_id, DROP entidad_id, DROP estado_id');
    }
}

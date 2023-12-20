<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230711033555 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD CONSTRAINT FK_B45A31397001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos ADD CONSTRAINT FK_B45A31396CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_B45A31397001B108 ON modelo_colaboracion_internacional_activos_fijos (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_B45A31396CD4A6FA ON modelo_colaboracion_internacional_activos_fijos (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD CONSTRAINT FK_AF243E887001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes ADD CONSTRAINT FK_AF243E886CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_AF243E887001B108 ON modelo_colaboracion_internacional_medios_transportes (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_AF243E886CD4A6FA ON modelo_colaboracion_internacional_medios_transportes (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD CONSTRAINT FK_F4C9D4E7001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos ADD CONSTRAINT FK_F4C9D4E6CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F4C9D4E7001B108 ON modelo_colaboracion_internacional_proyectos (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_F4C9D4E6CD4A6FA ON modelo_colaboracion_internacional_proyectos (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD CONSTRAINT FK_C2F3D39A7001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion ADD CONSTRAINT FK_C2F3D39A6CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_C2F3D39A7001B108 ON modelo_defensa_seguridad_proteccion (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_C2F3D39A6CD4A6FA ON modelo_defensa_seguridad_proteccion (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD CONSTRAINT FK_E0CD82527001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica ADD CONSTRAINT FK_E0CD82526CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_E0CD82527001B108 ON modelo_dinamica_demografica (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_E0CD82526CD4A6FA ON modelo_dinamica_demografica (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_inversiones ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_inversiones ADD CONSTRAINT FK_F67DDFE37001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_inversiones ADD CONSTRAINT FK_F67DDFE36CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F67DDFE37001B108 ON modelo_inversiones (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_F67DDFE36CD4A6FA ON modelo_inversiones (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura ADD CONSTRAINT FK_63C982FA7001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura ADD CONSTRAINT FK_63C982FA6CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_63C982FA7001B108 ON modelo_inversiones_apertura (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_63C982FA6CD4A6FA ON modelo_inversiones_apertura (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD CONSTRAINT FK_550BA5127001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_nivel_actividad ADD CONSTRAINT FK_550BA5126CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_550BA5127001B108 ON modelo_nivel_actividad (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_550BA5126CD4A6FA ON modelo_nivel_actividad (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD CONSTRAINT FK_1F32C80B7001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_portadores_combustible ADD CONSTRAINT FK_1F32C80B6CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_1F32C80B7001B108 ON modelo_portadores_combustible (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_1F32C80B6CD4A6FA ON modelo_portadores_combustible (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD CONSTRAINT FK_FE30C4567001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_portadores_energia ADD CONSTRAINT FK_FE30C4566CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_FE30C4567001B108 ON modelo_portadores_energia (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_FE30C4566CD4A6FA ON modelo_portadores_energia (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD CONSTRAINT FK_7F9E8F1C7001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_portadores_servicios ADD CONSTRAINT FK_7F9E8F1C6CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7F9E8F1C7001B108 ON modelo_portadores_servicios (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_7F9E8F1C6CD4A6FA ON modelo_portadores_servicios (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD CONSTRAINT FK_7AFC71797001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_sector_externo ADD CONSTRAINT FK_7AFC71796CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_7AFC71797001B108 ON modelo_sector_externo (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_7AFC71796CD4A6FA ON modelo_sector_externo (user_valida_id)');
        $this->addSql('ALTER TABLE modelo_transporte ADD user_registra_id INT DEFAULT NULL, ADD user_valida_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE modelo_transporte ADD CONSTRAINT FK_2A0A23247001B108 FOREIGN KEY (user_registra_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE modelo_transporte ADD CONSTRAINT FK_2A0A23246CD4A6FA FOREIGN KEY (user_valida_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_2A0A23247001B108 ON modelo_transporte (user_registra_id)');
        $this->addSql('CREATE INDEX IDX_2A0A23246CD4A6FA ON modelo_transporte (user_valida_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP FOREIGN KEY FK_B45A31397001B108');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP FOREIGN KEY FK_B45A31396CD4A6FA');
        $this->addSql('DROP INDEX IDX_B45A31397001B108 ON modelo_colaboracion_internacional_activos_fijos');
        $this->addSql('DROP INDEX IDX_B45A31396CD4A6FA ON modelo_colaboracion_internacional_activos_fijos');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_activos_fijos DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP FOREIGN KEY FK_AF243E887001B108');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP FOREIGN KEY FK_AF243E886CD4A6FA');
        $this->addSql('DROP INDEX IDX_AF243E887001B108 ON modelo_colaboracion_internacional_medios_transportes');
        $this->addSql('DROP INDEX IDX_AF243E886CD4A6FA ON modelo_colaboracion_internacional_medios_transportes');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_medios_transportes DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP FOREIGN KEY FK_F4C9D4E7001B108');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP FOREIGN KEY FK_F4C9D4E6CD4A6FA');
        $this->addSql('DROP INDEX IDX_F4C9D4E7001B108 ON modelo_colaboracion_internacional_proyectos');
        $this->addSql('DROP INDEX IDX_F4C9D4E6CD4A6FA ON modelo_colaboracion_internacional_proyectos');
        $this->addSql('ALTER TABLE modelo_colaboracion_internacional_proyectos DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP FOREIGN KEY FK_C2F3D39A7001B108');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP FOREIGN KEY FK_C2F3D39A6CD4A6FA');
        $this->addSql('DROP INDEX IDX_C2F3D39A7001B108 ON modelo_defensa_seguridad_proteccion');
        $this->addSql('DROP INDEX IDX_C2F3D39A6CD4A6FA ON modelo_defensa_seguridad_proteccion');
        $this->addSql('ALTER TABLE modelo_defensa_seguridad_proteccion DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP FOREIGN KEY FK_E0CD82527001B108');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP FOREIGN KEY FK_E0CD82526CD4A6FA');
        $this->addSql('DROP INDEX IDX_E0CD82527001B108 ON modelo_dinamica_demografica');
        $this->addSql('DROP INDEX IDX_E0CD82526CD4A6FA ON modelo_dinamica_demografica');
        $this->addSql('ALTER TABLE modelo_dinamica_demografica DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_inversiones DROP FOREIGN KEY FK_F67DDFE37001B108');
        $this->addSql('ALTER TABLE modelo_inversiones DROP FOREIGN KEY FK_F67DDFE36CD4A6FA');
        $this->addSql('DROP INDEX IDX_F67DDFE37001B108 ON modelo_inversiones');
        $this->addSql('DROP INDEX IDX_F67DDFE36CD4A6FA ON modelo_inversiones');
        $this->addSql('ALTER TABLE modelo_inversiones DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura DROP FOREIGN KEY FK_63C982FA7001B108');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura DROP FOREIGN KEY FK_63C982FA6CD4A6FA');
        $this->addSql('DROP INDEX IDX_63C982FA7001B108 ON modelo_inversiones_apertura');
        $this->addSql('DROP INDEX IDX_63C982FA6CD4A6FA ON modelo_inversiones_apertura');
        $this->addSql('ALTER TABLE modelo_inversiones_apertura DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP FOREIGN KEY FK_550BA5127001B108');
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP FOREIGN KEY FK_550BA5126CD4A6FA');
        $this->addSql('DROP INDEX IDX_550BA5127001B108 ON modelo_nivel_actividad');
        $this->addSql('DROP INDEX IDX_550BA5126CD4A6FA ON modelo_nivel_actividad');
        $this->addSql('ALTER TABLE modelo_nivel_actividad DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP FOREIGN KEY FK_1F32C80B7001B108');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP FOREIGN KEY FK_1F32C80B6CD4A6FA');
        $this->addSql('DROP INDEX IDX_1F32C80B7001B108 ON modelo_portadores_combustible');
        $this->addSql('DROP INDEX IDX_1F32C80B6CD4A6FA ON modelo_portadores_combustible');
        $this->addSql('ALTER TABLE modelo_portadores_combustible DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP FOREIGN KEY FK_FE30C4567001B108');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP FOREIGN KEY FK_FE30C4566CD4A6FA');
        $this->addSql('DROP INDEX IDX_FE30C4567001B108 ON modelo_portadores_energia');
        $this->addSql('DROP INDEX IDX_FE30C4566CD4A6FA ON modelo_portadores_energia');
        $this->addSql('ALTER TABLE modelo_portadores_energia DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP FOREIGN KEY FK_7F9E8F1C7001B108');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP FOREIGN KEY FK_7F9E8F1C6CD4A6FA');
        $this->addSql('DROP INDEX IDX_7F9E8F1C7001B108 ON modelo_portadores_servicios');
        $this->addSql('DROP INDEX IDX_7F9E8F1C6CD4A6FA ON modelo_portadores_servicios');
        $this->addSql('ALTER TABLE modelo_portadores_servicios DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP FOREIGN KEY FK_7AFC71797001B108');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP FOREIGN KEY FK_7AFC71796CD4A6FA');
        $this->addSql('DROP INDEX IDX_7AFC71797001B108 ON modelo_sector_externo');
        $this->addSql('DROP INDEX IDX_7AFC71796CD4A6FA ON modelo_sector_externo');
        $this->addSql('ALTER TABLE modelo_sector_externo DROP user_registra_id, DROP user_valida_id');
        $this->addSql('ALTER TABLE modelo_transporte DROP FOREIGN KEY FK_2A0A23247001B108');
        $this->addSql('ALTER TABLE modelo_transporte DROP FOREIGN KEY FK_2A0A23246CD4A6FA');
        $this->addSql('DROP INDEX IDX_2A0A23247001B108 ON modelo_transporte');
        $this->addSql('DROP INDEX IDX_2A0A23246CD4A6FA ON modelo_transporte');
        $this->addSql('ALTER TABLE modelo_transporte DROP user_registra_id, DROP user_valida_id');
    }
}

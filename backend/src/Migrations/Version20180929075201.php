<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929075201 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE progression (id INT AUTO_INCREMENT NOT NULL, sheet_id INT NOT NULL, created_by INT DEFAULT NULL, updated_by INT DEFAULT NULL, month VARCHAR(5) NOT NULL, fruits_count DOUBLE PRECISION DEFAULT NULL, seeds_count DOUBLE PRECISION DEFAULT NULL, plants_count DOUBLE PRECISION DEFAULT NULL, seeds_weight DOUBLE PRECISION DEFAULT NULL, unusable_plants_count DOUBLE PRECISION DEFAULT NULL, risk_grade VARCHAR(255) DEFAULT NULL, disease_grade VARCHAR(255) NOT NULL, remarks LONGTEXT DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_D5B250738B1206A5 (sheet_id), INDEX IDX_D5B25073DE12AB56 (created_by), INDEX IDX_D5B2507316FE72E1 (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE progression ADD CONSTRAINT FK_D5B250738B1206A5 FOREIGN KEY (sheet_id) REFERENCES sheet (id)');
        $this->addSql('ALTER TABLE progression ADD CONSTRAINT FK_D5B25073DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE progression ADD CONSTRAINT FK_D5B2507316FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE progression');
    }
}

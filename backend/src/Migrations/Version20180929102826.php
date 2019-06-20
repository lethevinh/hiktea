<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929102826 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE assignment (id INT AUTO_INCREMENT NOT NULL, phase_id INT NOT NULL, unit_id INT NOT NULL, sheet_id INT NOT NULL, created_by INT DEFAULT NULL, updated_by INT DEFAULT NULL, remarks LONGTEXT DEFAULT NULL, disease_grade VARCHAR(255) NOT NULL, risk_grade VARCHAR(255) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_30C544BA99091188 (phase_id), INDEX IDX_30C544BAF8BD700D (unit_id), INDEX IDX_30C544BA8B1206A5 (sheet_id), INDEX IDX_30C544BADE12AB56 (created_by), INDEX IDX_30C544BA16FE72E1 (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE assignment ADD CONSTRAINT FK_30C544BA99091188 FOREIGN KEY (phase_id) REFERENCES phase (id)');
        $this->addSql('ALTER TABLE assignment ADD CONSTRAINT FK_30C544BAF8BD700D FOREIGN KEY (unit_id) REFERENCES unit (id)');
        $this->addSql('ALTER TABLE assignment ADD CONSTRAINT FK_30C544BA8B1206A5 FOREIGN KEY (sheet_id) REFERENCES sheet (id)');
        $this->addSql('ALTER TABLE assignment ADD CONSTRAINT FK_30C544BADE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE assignment ADD CONSTRAINT FK_30C544BA16FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE assignment');
    }
}

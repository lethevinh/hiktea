<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180925154912 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE harvest (id INT AUTO_INCREMENT NOT NULL, greenhouse_id INT NOT NULL, created_by INT DEFAULT NULL, updated_by INT DEFAULT NULL, started_at DATETIME DEFAULT NULL, ended_at DATETIME DEFAULT NULL, fruits_count DOUBLE PRECISION DEFAULT NULL, seeds_count DOUBLE PRECISION DEFAULT NULL, is_approved TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_36BDDB3738FCB0EB (greenhouse_id), INDEX IDX_36BDDB37DE12AB56 (created_by), INDEX IDX_36BDDB3716FE72E1 (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE harvest ADD CONSTRAINT FK_36BDDB3738FCB0EB FOREIGN KEY (greenhouse_id) REFERENCES greenhouse (id)');
        $this->addSql('ALTER TABLE harvest ADD CONSTRAINT FK_36BDDB37DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE harvest ADD CONSTRAINT FK_36BDDB3716FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE harvest');
    }
}

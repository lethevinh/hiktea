<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929151148 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sowing (id INT AUTO_INCREMENT NOT NULL, assignment_id INT NOT NULL, created_by INT DEFAULT NULL, updated_by INT DEFAULT NULL, gender VARCHAR(1) NOT NULL, sown_at DATETIME NOT NULL, sown_small_pot_at DATETIME DEFAULT NULL, sown_large_pot_at DATETIME DEFAULT NULL, plants_count DOUBLE PRECISION NOT NULL, trays_count DOUBLE PRECISION DEFAULT NULL, note LONGTEXT DEFAULT NULL, is_approved TINYINT(1) NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_BE50E408D19302F8 (assignment_id), INDEX IDX_BE50E408DE12AB56 (created_by), INDEX IDX_BE50E40816FE72E1 (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sowing ADD CONSTRAINT FK_BE50E408D19302F8 FOREIGN KEY (assignment_id) REFERENCES assignment (id)');
        $this->addSql('ALTER TABLE sowing ADD CONSTRAINT FK_BE50E408DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE sowing ADD CONSTRAINT FK_BE50E40816FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sowing');
    }
}

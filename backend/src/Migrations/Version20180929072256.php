<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929072256 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE sheet (id INT AUTO_INCREMENT NOT NULL, created_by INT DEFAULT NULL, updated_by INT DEFAULT NULL, sown_at DATETIME DEFAULT NULL, planted_at DATETIME DEFAULT NULL, stock_seed_received_at DATETIME DEFAULT NULL, stock_male_seeds_count DOUBLE PRECISION DEFAULT NULL, stock_female_seeds_count DOUBLE PRECISION DEFAULT NULL, plants_count DOUBLE PRECISION DEFAULT NULL, note LONGTEXT DEFAULT NULL, small_transplanted_at DATETIME DEFAULT NULL, big_transplanted_at DATETIME DEFAULT NULL, pollinate_started_at DATETIME DEFAULT NULL, pollinate_ended_at DATETIME DEFAULT NULL, harvest_started_at DATETIME DEFAULT NULL, harvest_ended_at DATETIME DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_873C91E2DE12AB56 (created_by), INDEX IDX_873C91E216FE72E1 (updated_by), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE sheet ADD CONSTRAINT FK_873C91E2DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE sheet ADD CONSTRAINT FK_873C91E216FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE sheet');
    }
}

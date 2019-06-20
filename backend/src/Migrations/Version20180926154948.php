<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180926154948 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE variety ADD created_by INT DEFAULT NULL, ADD updated_by INT DEFAULT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE variety ADD CONSTRAINT FK_38D69117DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE variety ADD CONSTRAINT FK_38D6911716FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_38D69117DE12AB56 ON variety (created_by)');
        $this->addSql('CREATE INDEX IDX_38D6911716FE72E1 ON variety (updated_by)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE variety DROP FOREIGN KEY FK_38D69117DE12AB56');
        $this->addSql('ALTER TABLE variety DROP FOREIGN KEY FK_38D6911716FE72E1');
        $this->addSql('DROP INDEX IDX_38D69117DE12AB56 ON variety');
        $this->addSql('DROP INDEX IDX_38D6911716FE72E1 ON variety');
        $this->addSql('ALTER TABLE variety DROP created_by, DROP updated_by, DROP created_at, DROP updated_at');
    }
}

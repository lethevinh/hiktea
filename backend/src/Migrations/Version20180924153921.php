<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180924153921 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE unit ADD created_by INT DEFAULT NULL, ADD updated_by INT DEFAULT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE unit ADD CONSTRAINT FK_DCBB0C53DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('ALTER TABLE unit ADD CONSTRAINT FK_DCBB0C5316FE72E1 FOREIGN KEY (updated_by) REFERENCES user (id) ON DELETE SET NULL');
        $this->addSql('CREATE INDEX IDX_DCBB0C53DE12AB56 ON unit (created_by)');
        $this->addSql('CREATE INDEX IDX_DCBB0C5316FE72E1 ON unit (updated_by)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE unit DROP FOREIGN KEY FK_DCBB0C53DE12AB56');
        $this->addSql('ALTER TABLE unit DROP FOREIGN KEY FK_DCBB0C5316FE72E1');
        $this->addSql('DROP INDEX IDX_DCBB0C53DE12AB56 ON unit');
        $this->addSql('DROP INDEX IDX_DCBB0C5316FE72E1 ON unit');
        $this->addSql('ALTER TABLE unit DROP created_by, DROP updated_by, DROP created_at, DROP updated_at');
    }
}

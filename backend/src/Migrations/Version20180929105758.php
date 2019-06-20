<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929105758 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pollinate ADD assignment_id INT NOT NULL');
        $this->addSql('ALTER TABLE pollinate ADD CONSTRAINT FK_5C0491E2D19302F8 FOREIGN KEY (assignment_id) REFERENCES assignment (id)');
        $this->addSql('CREATE INDEX IDX_5C0491E2D19302F8 ON pollinate (assignment_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE pollinate DROP FOREIGN KEY FK_5C0491E2D19302F8');
        $this->addSql('DROP INDEX IDX_5C0491E2D19302F8 ON pollinate');
        $this->addSql('ALTER TABLE pollinate DROP assignment_id');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929145353 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transplant ADD assignment_id INT NOT NULL, ADD greenhouse_id INT NOT NULL');
        $this->addSql('ALTER TABLE transplant ADD CONSTRAINT FK_E522B45AD19302F8 FOREIGN KEY (assignment_id) REFERENCES assignment (id)');
        $this->addSql('ALTER TABLE transplant ADD CONSTRAINT FK_E522B45A38FCB0EB FOREIGN KEY (greenhouse_id) REFERENCES greenhouse (id)');
        $this->addSql('CREATE INDEX IDX_E522B45AD19302F8 ON transplant (assignment_id)');
        $this->addSql('CREATE INDEX IDX_E522B45A38FCB0EB ON transplant (greenhouse_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE transplant DROP FOREIGN KEY FK_E522B45AD19302F8');
        $this->addSql('ALTER TABLE transplant DROP FOREIGN KEY FK_E522B45A38FCB0EB');
        $this->addSql('DROP INDEX IDX_E522B45AD19302F8 ON transplant');
        $this->addSql('DROP INDEX IDX_E522B45A38FCB0EB ON transplant');
        $this->addSql('ALTER TABLE transplant DROP assignment_id, DROP greenhouse_id');
    }
}

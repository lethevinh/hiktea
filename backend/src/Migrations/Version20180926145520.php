<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180926145520 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE greenhouse DROP FOREIGN KEY FK_DC68F11BA76ED395');
        $this->addSql('DROP INDEX IDX_DC68F11BA76ED395 ON greenhouse');
        $this->addSql('ALTER TABLE greenhouse DROP user_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE greenhouse ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE greenhouse ADD CONSTRAINT FK_DC68F11BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_DC68F11BA76ED395 ON greenhouse (user_id)');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929104922 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE harvest ADD assignment_id INT NOT NULL');
        $this->addSql('ALTER TABLE harvest ADD CONSTRAINT FK_36BDDB37D19302F8 FOREIGN KEY (assignment_id) REFERENCES assignment (id)');
        $this->addSql('CREATE INDEX IDX_36BDDB37D19302F8 ON harvest (assignment_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE harvest DROP FOREIGN KEY FK_36BDDB37D19302F8');
        $this->addSql('DROP INDEX IDX_36BDDB37D19302F8 ON harvest');
        $this->addSql('ALTER TABLE harvest DROP assignment_id');
    }
}

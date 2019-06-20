<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20180929154050 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sowing DROP FOREIGN KEY FK_BE50E408D19302F8');
        $this->addSql('DROP INDEX IDX_BE50E408D19302F8 ON sowing');
        $this->addSql('ALTER TABLE sowing CHANGE assignment_id order_item_id INT NOT NULL');
        $this->addSql('ALTER TABLE sowing ADD CONSTRAINT FK_BE50E408E415FB15 FOREIGN KEY (order_item_id) REFERENCES order_item (id)');
        $this->addSql('CREATE INDEX IDX_BE50E408E415FB15 ON sowing (order_item_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sowing DROP FOREIGN KEY FK_BE50E408E415FB15');
        $this->addSql('DROP INDEX IDX_BE50E408E415FB15 ON sowing');
        $this->addSql('ALTER TABLE sowing CHANGE order_item_id assignment_id INT NOT NULL');
        $this->addSql('ALTER TABLE sowing ADD CONSTRAINT FK_BE50E408D19302F8 FOREIGN KEY (assignment_id) REFERENCES assignment (id)');
        $this->addSql('CREATE INDEX IDX_BE50E408D19302F8 ON sowing (assignment_id)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240903121909 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt ADD client_id INT NOT NULL, ADD exemplaires_id INT NOT NULL, ADD date_emprunt DATE DEFAULT NULL, ADD date_retour DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D719EB6921 FOREIGN KEY (client_id) REFERENCES client (id)');
        $this->addSql('ALTER TABLE emprunt ADD CONSTRAINT FK_364071D7AB40EED1 FOREIGN KEY (exemplaires_id) REFERENCES exemplaires (id)');
        $this->addSql('CREATE INDEX IDX_364071D719EB6921 ON emprunt (client_id)');
        $this->addSql('CREATE INDEX IDX_364071D7AB40EED1 ON emprunt (exemplaires_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE emprunt DROP FOREIGN KEY FK_364071D719EB6921');
        $this->addSql('ALTER TABLE emprunt DROP FOREIGN KEY FK_364071D7AB40EED1');
        $this->addSql('DROP INDEX IDX_364071D719EB6921 ON emprunt');
        $this->addSql('DROP INDEX IDX_364071D7AB40EED1 ON emprunt');
        $this->addSql('ALTER TABLE emprunt DROP client_id, DROP exemplaires_id, DROP date_emprunt, DROP date_retour');
    }
}

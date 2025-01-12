<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220825091046 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE article ADD updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL');
        $this->addSql('ALTER TABLE article ALTER photo TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE article ALTER photo DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN article.photo IS NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE article DROP updated_at');
        $this->addSql('ALTER TABLE article ALTER photo TYPE TEXT');
        $this->addSql('ALTER TABLE article ALTER photo DROP DEFAULT');
        $this->addSql('COMMENT ON COLUMN article.photo IS \'(DC2Type:object)\'');
    }
}

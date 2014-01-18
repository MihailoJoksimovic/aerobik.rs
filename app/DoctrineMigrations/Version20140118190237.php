<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20140118190237 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        $table = $schema->createTable('session');
        $table->addColumn('session_id', 'string', array(
            'NOT NULL'
        ));
        $table->addColumn('session_value', 'text', array(
            'NOT NULL'
        ));
        $table->addColumn('session_time', 'integer', array(
            'NOT NULL'
        ));
        $table->setPrimaryKey(array('session_id'));
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}

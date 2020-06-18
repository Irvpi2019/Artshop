<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200618084901 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE admins (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE artists (id INT AUTO_INCREMENT NOT NULL, info_artist VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE buyers (id INT AUTO_INCREMENT NOT NULL, adress VARCHAR(255) NOT NULL, postcode INT NOT NULL, city VARCHAR(255) NOT NULL, user_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE categories (id INT AUTO_INCREMENT NOT NULL, name_cat VARCHAR(255) NOT NULL, code_cat VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE delivery (id INT AUTO_INCREMENT NOT NULL, delivery_by VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE genres (id INT AUTO_INCREMENT NOT NULL, name_genre VARCHAR(255) NOT NULL, code_genre VARCHAR(255) NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE material_has_products (id INT AUTO_INCREMENT NOT NULL, material_id INT NOT NULL, product_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE materials (id INT AUTO_INCREMENT NOT NULL, name_material VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE oeder_has_produckts (id INT AUTO_INCREMENT NOT NULL, order_id INT NOT NULL, product_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, buyer_id INT NOT NULL, quantity INT NOT NULL, price INT NOT NULL, order_date DATETIME NOT NULL, post_date DATETIME NOT NULL, recieve_date DATETIME DEFAULT NULL, order_status INT NOT NULL, delivery_id INT DEFAULT NULL, payment_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orderstatus (id INT AUTO_INCREMENT NOT NULL, name_status VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE payment (id INT AUTO_INCREMENT NOT NULL, name_payment VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produckt_has_genres (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, genre_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE product_has_styles (id INT AUTO_INCREMENT NOT NULL, product_id INT NOT NULL, style_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE styles (id INT AUTO_INCREMENT NOT NULL, name_style VARCHAR(255) NOT NULL, code_style VARCHAR(255) NOT NULL, category_id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, user_name VARCHAR(255) NOT NULL, user_surname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, pass VARCHAR(255) NOT NULL, add_user_at DATETIME NOT NULL, phone VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE admins');
        $this->addSql('DROP TABLE artists');
        $this->addSql('DROP TABLE buyers');
        $this->addSql('DROP TABLE categories');
        $this->addSql('DROP TABLE delivery');
        $this->addSql('DROP TABLE genres');
        $this->addSql('DROP TABLE material_has_products');
        $this->addSql('DROP TABLE materials');
        $this->addSql('DROP TABLE oeder_has_produckts');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE orderstatus');
        $this->addSql('DROP TABLE payment');
        $this->addSql('DROP TABLE produckt_has_genres');
        $this->addSql('DROP TABLE product_has_styles');
        $this->addSql('DROP TABLE styles');
        $this->addSql('DROP TABLE users');
    }
}

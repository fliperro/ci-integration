<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Initial_commit extends CI_Migration {

    public function up()
    {
        /**
         * ----
         * auth
         * ----
         */

        /**
         * groups
        */
        $sql =  'CREATE TABLE groups ( '.
                'id mediumint(8) UNSIGNED NOT NULL, '.
                'name varchar(20) NOT NULL, '.
                'description varchar(100) NOT NULL '.
                ') ENGINE=InnoDB DEFAULT CHARSET=utf8';
        $this->db->query($sql); 

        $data = array(
			array(
                'id'          => 1,
				'name'        => 'admin',
				'description' => 'Administrator'
			),
			array(
                'id'          => 2,
				'name'        => 'members',
				'description' => 'General User'
            ),
            array(
                'id'          => 3,
				'name'        => 'office',
				'description' => 'Biuro'
			)
        );
        
        $this->db->insert_batch('groups', $data);

        /**
         * login_attempts
         */
        $sql =  'CREATE TABLE login_attempts ( '.
                'id int(11) UNSIGNED NOT NULL, '.
                'ip_address varchar(45) NOT NULL, '.
                'login varchar(100) NOT NULL, '.
                'time int(11) UNSIGNED DEFAULT NULL '.
                ') ENGINE=InnoDB DEFAULT CHARSET=utf8';
        $this->db->query($sql); 

        /**
         * users
         */
        $sql =  'CREATE TABLE users ( '.
                'id int(11) UNSIGNED NOT NULL, '.
                'ip_address varchar(45) NOT NULL, '.
                'username varchar(100) DEFAULT NULL, '.
                'password varchar(255) NOT NULL, '.
                'salt varchar(255) DEFAULT NULL, '.
                'email varchar(254) NOT NULL, '.
                'activation_code varchar(40) DEFAULT NULL, '.
                'forgotten_password_code varchar(40) DEFAULT NULL, '.
                'forgotten_password_time int(11) UNSIGNED DEFAULT NULL, '.
                'remember_code varchar(40) DEFAULT NULL, '.
                'created_on int(11) UNSIGNED NOT NULL, '.
                'last_login int(11) UNSIGNED DEFAULT NULL, '.
                'active tinyint(1) UNSIGNED DEFAULT NULL, '.
                'first_name varchar(50) DEFAULT NULL, '.
                'last_name varchar(50) DEFAULT NULL, '.
                'company varchar(100) DEFAULT NULL, '.
                'phone varchar(20) DEFAULT NULL '.
                ') ENGINE=InnoDB DEFAULT CHARSET=utf8';
        $this->db->query($sql); 

        $data = array(
            'id' => 1,
            'ip_address'              => '127.0.0.1',
            'username'                => 'administrator',
            'password'                => '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36',
            'salt'                    => '',
            'email'                   => 'admin@admin.com',
            'activation_code'         => '',
            'forgotten_password_code' => NULL,
            'created_on'              => '1268889823',
            'last_login'              => '1268889823',
            'active'                  => '1',
            'first_name'              => 'Admin',
            'last_name'               => 'istrator',
            'company'                 => 'ADMIN',
            'phone'                   => '0',
        );
        $this->db->insert('users', $data);

        /**
         * users_groups
         */
        $sql =  'CREATE TABLE users_groups ( '.
                'id int(11) UNSIGNED NOT NULL, '.
                'user_id int(11) UNSIGNED NOT NULL, '.
                'group_id mediumint(8) UNSIGNED NOT NULL '.
                ') ENGINE=InnoDB DEFAULT CHARSET=utf8';
        $this->db->query($sql); 

        $data = array(
			array(
                'id' => 1,
				'user_id'  => 1,
				'group_id' => 1,
			),
			array(
                'id' => 2,
				'user_id'  => 1,
				'group_id' => 2,
			)
		);
		$this->db->insert_batch('users_groups', $data);
        
        /**
         * ----
         * Keys
         * ----
         */

        $this->db->query('ALTER TABLE users ADD PRIMARY KEY (id)');
        $this->db->query('ALTER TABLE groups ADD PRIMARY KEY (id)');
        $this->db->query('ALTER TABLE login_attempts ADD PRIMARY KEY (id)');
        $this->db->query('ALTER TABLE users_groups ADD PRIMARY KEY (id)');
        $this->db->query('ALTER TABLE users_groups ADD UNIQUE KEY uc_users_groups (user_id,group_id)');
        $this->db->query('ALTER TABLE users_groups ADD KEY fk_users_groups_users1_idx (user_id)');
        $this->db->query('ALTER TABLE users_groups ADD KEY fk_users_groups_groups1_idx (group_id)');

     
        $this->db->query('ALTER TABLE groups MODIFY id mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->db->query('ALTER TABLE login_attempts MODIFY id int(11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->db->query('ALTER TABLE users MODIFY id int(11) UNSIGNED NOT NULL AUTO_INCREMENT');
        $this->db->query('ALTER TABLE users_groups MODIFY id int(11) UNSIGNED NOT NULL AUTO_INCREMENT');
      
        $this->db->query('ALTER TABLE users_groups ADD CONSTRAINT fk_users_groups_groups1 FOREIGN KEY (group_id) REFERENCES groups (id) ON DELETE CASCADE ON UPDATE NO ACTION ');
        $this->db->query('ALTER TABLE users_groups ADD CONSTRAINT fk_users_groups_users1 FOREIGN KEY (user_id) REFERENCES users (id) ON DELETE CASCADE ON UPDATE NO ACTION ');
    }

    public function down()
    {
        $this->db->query('ALTER TABLE users_groups DROP FOREIGN KEY fk_users_groups_groups1');
        $this->db->query('ALTER TABLE users_groups DROP FOREIGN KEY fk_users_groups_users1');
      
        $this->db->query('ALTER TABLE users_groups DROP INDEX uc_users_groups');
        $this->db->query('ALTER TABLE users_groups DROP INDEX fk_users_groups_users1_idx');
        $this->db->query('ALTER TABLE users_groups DROP INDEX fk_users_groups_groups1_idx');

        $this->db->query('DROP TABLE IF EXISTS login_attempts');
        $this->db->query('DROP TABLE IF EXISTS users_groups');
        $this->db->query('DROP TABLE IF EXISTS groups');         
        $this->db->query('DROP TABLE IF EXISTS users');
    }
}

DROP TABLE IF EXISTS `pos_payment_headers`;
CREATE TABLE `pos_payment_headers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `date` DATE NOT NULL,
  `payment_type_id` INT(11) NOT NULL DEFAULT '0',
  `ref_no` VARCHAR(20) NOT NULL,
  `or_no` VARCHAR(20) NOT NULL,
  `branch_id` INT(11) NOT NULL COMMENT 'refd to branches.id',
  `client_id` INT(11) NOT NULL COMMENT 'refd to clients.id',
  `employee_id` INT(11) NOT NULL COMMENT 'refd to employees.id',
  `customer_id` INT(11)  NOT NULL COMMENT 'refd to customers.id',
  `quantity` INT(11)  NOT NULL DEFAULT '0',
  `payable` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `amount` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `discount` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `tax` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `amount_net` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `is_email_sent` TINYINT(1) NOT NULL DEFAULT '0',
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `pos_payment_details`;
CREATE TABLE `pos_payment_details` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `header_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'refd pos_payment_headers.id',
  `transaction_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'refd pos_transactions.id',
  `inventory_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'refd inventories.id',
  `price` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `amount_paid` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `inventories`;
CREATE TABLE `inventories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'refd branches.id',
  `client_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'refd clients.id',
  `name` VARCHAR(100) DEFAULT NULL,
  `bar_code` VARCHAR(50) DEFAULT NULL,
  `category_id` INT(11) NOT NULL DEFAULT '0' COMMENT 'refd categories.id',
  `price` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `cost` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `tax` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `margin` DECIMAL(12,2) NOT NULL DEFAULT '0.00',
  `qty_stock` INT(11) NOT NULL DEFAULT '0',
  `qty_reorder` INT(11) NOT NULL DEFAULT '0',
  `file_path` VARCHAR(100) DEFAULT NULL,
  `file_pics` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `inventory_categories`;
CREATE TABLE `inventory_categories` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `expenses`;
CREATE TABLE `expenses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `date` DATE NOT NULL,
  `ref_no`  VARCHAR(20) NOT NULL,
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `expenses_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to expenses_types.id',
  `title` VARCHAR(20) NOT NULL,
  `amount` DECIMAL(12 ,2) DEFAULT '0.00',
  `remarks` VARCHAR(500) NOT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `expenses_types`;
CREATE TABLE `expenses_types` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `salaries`;
CREATE TABLE `salaries` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `date_released` DATE NOT NULL,
  `date_from` DATE NOT NULL,
  `date_to` DATE NOT NULL,
  `emp_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to employees.id',
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `expenses_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to expenses_types.id',
  `title` VARCHAR(20) NOT NULL,
  `amount` DECIMAL(12 ,2) DEFAULT '0.00',
  `remarks` VARCHAR(500) NOT NULL,
  `account_no` VARCHAR(20) DEFAULT NULL,
  `bank_id` INT(11) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `payment_types`;
CREATE TABLE `payment_types` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `firstname` VARCHAR(50) DEFAULT NULL,
  `middlename` VARCHAR(50) DEFAULT NULL,
  `lastname` VARCHAR(50) DEFAULT NULL,
  `company_name` VARCHAR(100) DEFAULT NULL,
  `address` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `mobile` VARCHAR(15) DEFAULT NULL,
  `phone` VARCHAR(15) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `deale_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to dealers.id',
  `firstname` VARCHAR(50) DEFAULT NULL,
  `middlename` VARCHAR(50) DEFAULT NULL,
  `lastname` VARCHAR(50) DEFAULT NULL,
  `company_name` VARCHAR(100) DEFAULT NULL,
  `address` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `mobile` VARCHAR(15) DEFAULT NULL,
  `phone` VARCHAR(15) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `firstname` VARCHAR(50) DEFAULT NULL,
  `middlename` VARCHAR(50) DEFAULT NULL,
  `lastname` VARCHAR(50) DEFAULT NULL,
  `company_name` VARCHAR(100) DEFAULT NULL,
  `address` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `mobile` VARCHAR(15) DEFAULT NULL,
  `phone` VARCHAR(15) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `address` VARCHAR(100) DEFAULT NULL, 
  `latitude` DOUBLE(15,6) NOT NULL,
  `longitude` DOUBLE(15,6) NOT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `username` VARCHAR(20) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `pword_hash` VARCHAR(255) NOT NULL,
  `role` INT(1) NOT NULL DEFAULT '2' COMMENT '1=super, 2=owner, 3=employee',
  `last_login` TIMESTAMP NULL DEFAULT NULL,
  `emp_id` INT(11) NOT NULL DEFAULT '0',
  `is_override_useraccess` TINYINT(1) NOT NULL DEFAULT '0',
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_active` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `name` VARCHAR(50) DEFAULT NULL, 
  `service_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to service_types.id',
  `amount` DECIMAL(12, 2) DEFAULT '0.00', 
  `file_path` VARCHAR(100) DEFAULT NULL,
  `file_pics` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `services_types`;
CREATE TABLE `services_types` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `details` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `subscription_types`;
CREATE TABLE `subscription_types` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `payment_types`;
CREATE TABLE `payment_types` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `name` VARCHAR(50) DEFAULT NULL, 
  `discount_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT '= amount, 2 = percentage',
  `value` DECIMAL(12, 2) DEFAULT '0.00', 
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `loyalty_settings`;
CREATE TABLE `loyalty_settings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `layalty_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to loyalty_types.id',
  `value` DECIMAL(12, 2) DEFAULT '0.00', 
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `loyalty_types`;
CREATE TABLE `loyalty_types` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `tax_settings`;
CREATE TABLE `tax_settings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `layalty_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to loyalty_types.id',
  `name` VARCHAR(100) DEFAULT NULL,
  `precentage` DECIMAL(12, 2) DEFAULT '0.00', 
  `tax_type_id` INT(11) NOT NULL DEFAULT 0 COMMENT '1= included in item 2 =added to items',
  `tax_option_id` INT(11) NOT NULL DEFAULT 0 COMMENT '1= apply to new 2= apply  to existing 3= apply to all',
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `receipt_settings`;
CREATE TABLE `receipt_settings` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `file_path` VARCHAR(100) DEFAULT NULL,
  `file_pics` VARCHAR(100) DEFAULT NULL,
  `header` VARCHAR(50) DEFAULT NULL,
  `message` VARCHAR(100) DEFAULT NULL,
  `footer` VARCHAR(50) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pos_transactions`;

CREATE TABLE `pos_transactions` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  `trans_date` DATE NOT NULL,
  `ref_no` VARCHAR(100) NOT NULL,
  `cust_id` INT(11) NOT NULL COMMENT 'refd to customers.id',
  `branch_id` INT(11) NOT NULL COMMENT 'refd to branches.id',
  `service_id` INT(11) NOT NULL COMMENT 'ref to services.id',
  `inv_id` INT(11) NOT NULL COMMENT 'ref to inventories.id',
  `transaction_id` INT(11) NOT NULL COMMENT 'ref to transactions.id',
  `transaction_name` VARCHAR(255) NOT NULL,
  `qty` INT(11) NOT NULL,
  `price` DECIMAL(12,2) NOT NULL,
  `amount_net` DECIMAL(12,2) NOT NULL,
  `balance` DECIMAL(12,2) DEFAULT NULL,
  `user_id` INT(11) NOT NULL COMMENT 'ref to users.id',
  `is_fully_paid` INT(11) DEFAULT '2' COMMENT '1=paid; 2=unpaid',
  `is_inventory` TINYINT(1)  DEFAULT NULL COMMENT '1=inventory; 2=services',
  `remarks` VARCHAR(100) NOT NULL,
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  `deleted_by` INT(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=INNODB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS `Dealers`;
CREATE TABLE `Dealers` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` INT(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `firstname` VARCHAR(50) DEFAULT NULL,
  `middlename` VARCHAR(50) DEFAULT NULL,
  `lastname` VARCHAR(50) DEFAULT NULL,
  `company_name` VARCHAR(100) DEFAULT NULL,
  `address` VARCHAR(100) DEFAULT NULL,
  `email` VARCHAR(100) DEFAULT NULL,
  `mobile` VARCHAR(15) DEFAULT NULL,
  `phone` VARCHAR(15) DEFAULT NULL,
  `is_sync` TINYINT(1) NOT NULL DEFAULT '0',
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;


/*[11:58:12 AM][999 ms]*/ ALTER TABLE `clients` DROP COLUMN `client_id`, ADD COLUMN `dealer_id` INT(11) NULL COMMENT 'refd to dealers.id' AFTER `branch_id`; 


/*[12:16:04 PM][158 ms]*/ ALTER TABLE `loyalty_settings` CHANGE `layalty_type_id` `loyalty_type_id` INT(11) DEFAULT 0 NOT NULL COMMENT 'refd to loyalty_types.id'; 
/*[1:53:09 PM][516 ms]*/ ALTER TABLE `tax_settings` CHANGE `layalty_type_id` `loyalty_type_id` INT(11) DEFAULT 0 NOT NULL COMMENT 'refd to loyalty_types.id'; 


/* Christian 20180719 1131 */
DROP TABLE IF EXISTS `civil_statuses`;
CREATE TABLE `civil_statuses` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `occupations`;
CREATE TABLE `occupations` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `banks`;
CREATE TABLE `banks` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `created_at` DATETIME NOT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `name` VARCHAR(100) DEFAULT NULL,
  `is_deleted` TINYINT(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=INNODB  DEFAULT CHARSET=utf8;

/*[11:27:03 AM][1000 ms]*/ ALTER TABLE `clients` DROP COLUMN `branch_id`; 
/*[11:28:00 AM][768 ms]*/ ALTER TABLE `dealers` DROP COLUMN `branch_id`, DROP COLUMN `client_id`; 

-- chris 20180719 1147

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) NOT NULL DEFAULT '',
  `module_id` int(11) NOT NULL DEFAULT '0',
  `is_main_menu` tinyint(1) NOT NULL DEFAULT '0',
  `is_parent` tinyint(1) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `is_url` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'with url',
  `controller_id` int(11) NOT NULL DEFAULT '0',
  `controller_name` varchar(100) DEFAULT NULL,
  `action_id` int(11) NOT NULL DEFAULT '0',
  `action_name` varchar(100) DEFAULT NULL,
  `params` varchar(255) DEFAULT NULL,
  `orders` int(2) NOT NULL DEFAULT '0',
  `li_class` varchar(100) DEFAULT NULL,
  `i_class` varchar(100) DEFAULT NULL,
  `span_class` varchar(100) DEFAULT NULL,
  `link_class` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

/*Data for the table `menus` */

insert  into `menus`(`id`,`created_at`,`updated_at`,`name`,`module_id`,`is_main_menu`,`is_parent`,`parent_id`,`is_url`,`controller_id`,`controller_name`,`action_id`,`action_name`,`params`,`orders`,`li_class`,`i_class`,`span_class`,`link_class`,`is_deleted`) values (1,'2017-11-05 02:46:13','2017-11-04 18:46:13','User Access',1,1,1,0,0,0,NULL,0,NULL,NULL,1,'treeview','fa fa-lg fa-fw fa-gear','menu-item-parent',NULL,0),(2,'2017-11-05 02:47:41','2017-11-04 18:47:41','User',1,0,1,1,0,0,NULL,0,NULL,NULL,1,'treeview-menu\"',NULL,NULL,NULL,0),(3,'2017-11-05 02:48:20','2017-11-04 18:48:20','Manage',1,0,0,2,1,0,'users',0,'admin',NULL,2,'treeview-menu\"',NULL,NULL,NULL,0),(4,'2017-11-05 02:50:36','2017-11-04 18:50:36','Change Password',1,0,0,2,1,0,'users',0,'changePassword',NULL,3,'treeview-menu\"',NULL,NULL,NULL,0);


/*[1:41:34 PM][1659 ms]*/ ALTER TABLE `users` ADD COLUMN `client_id` INT(11) DEFAULT 0 NOT NULL COMMENT 'refd to clients.id' AFTER `emp_id`; 
/*[1:51:34 PM][188 ms]*/ ALTER TABLE `loyalty_settings` CHANGE `layalty_type_id` `loyalty_type_id` INT(11) DEFAULT 0 NOT NULL COMMENT 'refd to loyalty_types.id'; 
/*[1:53:26 PM][175 ms]*/ ALTER TABLE `tax_settings` CHANGE `layalty_type_id` `loyalty_type_id` INT(11) DEFAULT 0 NOT NULL COMMENT 'refd to loyalty_types.id'; 
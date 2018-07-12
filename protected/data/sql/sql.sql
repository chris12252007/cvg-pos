
DROP TABLE IF EXISTS `pos_payment_headers`;
CREATE TABLE `pos_payment_headers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `payment_type_id` int(11) NOT NULL DEFAULT '0',
  `ref_no` varchar(20) NOT NULL,
  `or_no` varchar(20) NOT NULL,
  `branch_id` int(11) NOT NULL COMMENT 'refd to branches.id,
  `client_id` int(11) NOT NULL COMMENT 'refd to clients.id,
  `employee_id` int(11) NOT NULL COMMENT 'refd to employees.id,
  `customer_id` int(11)  NOT NULL COMMENT 'refd to customers.id,
  `quantity` int(11)  NOT NULL DEFAULT '0',
  `payable` decimal(12,2) NOT NULL DEFAULT '0.00',
  `amount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `discount` decimal(12,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(12,2) NOT NULL DEFAULT '0.00',
  `amount_net` decimal(12,2) NOT NULL DEFAULT '0.00',
  `is_email_sent` tinyint(1) NOT NULL DEFAULT '0',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `pos_payment_details`;
CREATE TABLE `pos_payment_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `header_id` int(11) NOT NULL DEFAULT '0' COMMENT 'refd pos_payment_headers.id',
  `transaction_id` int(11) NOT NULL DEFAULT '0' COMMENT 'refd pos_transactions.id',
  `inventory_id` int(11) NOT NULL DEFAULT '0' COMMENT 'refd inventories.id',
  `price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `amount_paid` decimal(12,2) NOT NULL DEFAULT '0.00',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `inventories`;
CREATE TABLE `inventories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(11) NOT NULL DEFAULT '0' COMMENT 'refd branches.id',
  `client_id` int(11) NOT NULL DEFAULT '0' COMMENT 'refd clients.id',
  `name` varchar(100) DEFAULT NULL',
  `bar_code` varchar(50) DEFAULT NULL',
  `category_id` int(11) NOT NULL DEFAULT '0' COMMENT 'refd categories.id',
  `price` decimal(12,2) NOT NULL DEFAULT '0.00',
  `cost` decimal(12,2) NOT NULL DEFAULT '0.00',
  `tax` decimal(12,2) NOT NULL DEFAULT '0.00',
  `margin` decimal(12,2) NOT NULL DEFAULT '0.00',
  `qty_stock` int(11) NOT NULL DEFAULT '0',
  `qty_reorder` int(11) NOT NULL DEFAULT '0',
  `file_path` varchar(100) DEFAULT NULL',
  `file_pics` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `inventory_categories`;
CREATE TABLE `inventory_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `expenses`;
CREATE TABLE `expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date` date NOT NULL,
  `ref_no`  varchar(20) NOT NULL,
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id',
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `expenses_type_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to expenses_types.id',
  `title` varchar(20) NOT NULL,
  `amount` decimal(12 ,2) DEFAULT '0.00',
  `remarks` varchar(500) NOT NULL,
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `expenses_types`;
CREATE TABLE `expenses_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `salaries`;
CREATE TABLE `salaries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `date_released` date NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `emp_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to employees.id',
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id',
  `expenses_type_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to expenses_types.id',
  `title` varchar(20) NOT NULL,
  `amount` decimal(12 ,2) DEFAULT '0.00',
  `remarks` varchar(500) NOT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `bank_id` int(11) DEFAULT NULL,
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `payment_types`;
CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `firstname` varchar(50) DEFAULT NULL',
  `middlename` varchar(50) DEFAULT NULL',
  `lastname` varchar(50) DEFAULT NULL',
  `company_name` varchar(100) DEFAULT NULL',
  `address` varchar(100) DEFAULT NULL',
  `email` varchar(100) DEFAULT NULL',
  `mobile` varchar(15) DEFAULT NULL',
  `phone` varchar(15) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `firstname` varchar(50) DEFAULT NULL',
  `middlename` varchar(50) DEFAULT NULL',
  `lastname` varchar(50) DEFAULT NULL',
  `company_name` varchar(100) DEFAULT NULL',
  `address` varchar(100) DEFAULT NULL',
  `email` varchar(100) DEFAULT NULL',
  `mobile` varchar(15) DEFAULT NULL',
  `phone` varchar(15) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `firstname` varchar(50) DEFAULT NULL',
  `middlename` varchar(50) DEFAULT NULL',
  `lastname` varchar(50) DEFAULT NULL',
  `company_name` varchar(100) DEFAULT NULL',
  `address` varchar(100) DEFAULT NULL',
  `email` varchar(100) DEFAULT NULL',
  `mobile` varchar(15) DEFAULT NULL',
  `phone` varchar(15) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `suppliers`;
CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to brnaches.id',
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `firstname` varchar(50) DEFAULT NULL',
  `middlename` varchar(50) DEFAULT NULL',
  `lastname` varchar(50) DEFAULT NULL',
  `company_name` varchar(100) DEFAULT NULL',
  `address` varchar(100) DEFAULT NULL',
  `email` varchar(100) DEFAULT NULL',
  `mobile` varchar(15) DEFAULT NULL',
  `phone` varchar(15) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `branches`;
CREATE TABLE `branches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `address` varchar(100) DEFAULT NULL', 
  `latitude` double(15,6) NOT NULL,
  `longitude` double(15,6) NOT NULL,
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pword_hash` varchar(255) NOT NULL,
  `role` int(1) NOT NULL DEFAULT '2' COMMENT '1=super, 2=owner, 3=employee',
  `last_login` timestamp NULL DEFAULT NULL,
  `emp_id` int(11) NOT NULL DEFAULT '0',
  `is_override_useraccess` tinyint(1) NOT NULL DEFAULT '0',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id'
  `name` varchar(50) DEFAULT NULL', 
  `service_type_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to service_types.id'
  `amount` decimal(12, 2) DEFAULT '0.00', 
  `file_path` varchar(100) DEFAULT NULL',
  `file_pics` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `services_types`;
CREATE TABLE `services_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE `subscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `details` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `subscription_types`;
CREATE TABLE `subscription_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `payment_types`;
CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;





DROP TABLE IF EXISTS `discounts`;
CREATE TABLE `discounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id'
  `name` varchar(50) DEFAULT NULL', 
  `discount_type_id` int(11) NOT NULL DEFAULT 0 COMMENT '= amount, 2 = percentage',
  `value` decimal(12, 2) DEFAULT '0.00', 
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `loyalty_settings`;
CREATE TABLE `loyalty_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id'
  `layalty_type_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to loyalty_types.id'
  `value` decimal(12, 2) DEFAULT '0.00', 
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `loyalty_types`;
CREATE TABLE `loyalty_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(100) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;



DROP TABLE IF EXISTS `tax_settings`;
CREATE TABLE `tax_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id'
  `layalty_type_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to loyalty_types.id'
  `name` varchar(100) DEFAULT NULL',
  `precentage` decimal(12, 2) DEFAULT '0.00', 
  `tax_type_id` int(11) NOT NULL DEFAULT 0 COMMENT '1= included in item 2 =added to items'
  `tax_option_id` int(11) NOT NULL DEFAULT 0 COMMENT '1= apply to new 2= apply  to existing 3= apply to all'
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `receipt_settings`;
CREATE TABLE `receipt_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `client_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to clients.id'
  `branch_id` int(11) NOT NULL DEFAULT 0 COMMENT 'refd to branches.id'
  `file_path` varchar(100) DEFAULT NULL',
  `file_pics` varchar(100) DEFAULT NULL',
  `header` varchar(50) DEFAULT NULL',
  `message` varchar(100) DEFAULT NULL',
  `footer` varchar(50) DEFAULT NULL',
  `is_sync` tinyint(1) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `pos_transactions`;

CREATE TABLE `pos_transactions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `trans_date` date NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `cust_id` int(11) NOT NULL COMMENT 'refd to customers.id',
  `branch_id` int(11) NOT NULL COMMENT 'refd to branches.id',
  `service_id` int(11) NOT NULL COMMENT 'ref to services.id',
  `inv_id` int(11) NOT NULL COMMENT 'ref to inventories.id',
  `transaction_id` int(11) NOT NULL COMMENT 'ref to transactions.id',
  `transaction_name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `amount_net` decimal(12,2) NOT NULL,
  `balance` decimal(12,2) DEFAULT NULL,
  `user_id` int(11) NOT NULL COMMENT 'ref to users.id',
  `is_fully_paid` int(11) DEFAULT '2' COMMENT '1=paid; 2=unpaid',
  `is_inventory` tinyint(1)  DEFAULT NULL COMMENT '1=inventory; 2=services',
  `remarks` varchar(100) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

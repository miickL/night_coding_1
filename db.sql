CREATE DATABASE login_sys;

USE login_sys;


CREATE TABLE login_sys.user_register (
	id_user integer auto_increment NOT NULL,
	username varchar(20) NOT NULL,
	email varchar(50) NOT NULL,
	passwd varchar(255) NOT NULL,
	date_c TIMESTAMP DEFAULT current_timestamp() NOT NULL,
	CONSTRAINT user_register_pk PRIMARY KEY (id_user)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8
COLLATE=utf8_general_ci;

INSERT INTO login_sys.user_register (username, email, passwd, date_c) VALUES('', '', '', CURRENT_TIMESTAMP);

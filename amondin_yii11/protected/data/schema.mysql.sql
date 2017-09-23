DROP TABLE tbl_user;
CREATE TABLE tbl_user (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(128) NOT NULL,
    password VARCHAR(128) NOT NULL,
    email VARCHAR(128) NOT NULL
);
INSERT INTO tbl_user (username, password, email) VALUES ('test1', 'pass1', 'test1@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test2', 'pass2', 'test2@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test3', 'pass3', 'test3@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test4', 'pass4', 'test4@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test5', 'pass5', 'test5@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test6', 'pass6', 'test6@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test7', 'pass7', 'test7@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test8', 'pass8', 'test8@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test9', 'pass9', 'test9@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test10', 'pass10', 'test10@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test11', 'pass11', 'test11@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test12', 'pass12', 'test12@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test13', 'pass13', 'test13@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test14', 'pass14', 'test14@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test15', 'pass15', 'test15@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test16', 'pass16', 'test16@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test17', 'pass17', 'test17@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test18', 'pass18', 'test18@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test19', 'pass19', 'test19@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test20', 'pass20', 'test20@example.com');
INSERT INTO tbl_user (username, password, email) VALUES ('test21', 'pass21', 'test21@example.com');

DROP TABLE tbl_post;
CREATE TABLE tbl_post (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(128) NOT NULL,
    content TEXT NOT NULL,
    create_time INTEGER NOT NULL
);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE1', 'Content 1', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE2', 'Content 2', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE3', 'Content 3', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE4', 'Content 4', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE5', 'Content 5', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE6', 'Content 6', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE7', 'Content 7', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE8', 'Content 8', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE9', 'Content 9', 0);
INSERT INTO tbl_post (title, content, create_time) VALUES ('TITLE10', 'Content 10', 0);

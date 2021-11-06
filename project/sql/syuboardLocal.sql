/* 削除用のSQLが入っています 注意してください */
DROP TABLE IF EXISTS board;

DROP TABLE IF EXISTS telphone;

DROP TABLE IF EXISTS mtag;

DROP TABLE IF EXISTS owner;

DROP TABLE IF EXISTS user;

DROP TABLE IF EXISTS stag;

/* 削除用SQL ここまで */

--データベース作成
CREATE DATABASE syuboard DEFAULT CHARACTER SET utf8 collate utf8_general_ci;

GRANT ALL ON syuboard.* TO 'staff' @'localhost' identified by 'password';

USE syuboard;

CREATE TABLE user (
    userid INT AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password CHAR(12) NOT NULL,
    icon_path VARCHAR(50) NOT NULL,
    PRIMARY KEY(userid)
);

CREATE TABLE owner(
    ownerid INT AUTO_INCREMENT,
    password CHAR(12) NOT NULL,
    name VARCHAR(40) NOT NULL,
    PRIMARY KEY(ownerid)
);

CREATE TABLE stag(
    stagid INT AUTO_INCREMENT,
    stagname VARCHAR(32) NOT NULL,
    PRIMARY KEY(stagid)
);

CREATE TABLE mtag(
    mtagid INT AUTO_INCREMENT,
    mtagname VARCHAR(32) NOT NULL,
    stagid INT NOT NULL,
    PRIMARY KEY(mtagid),
    FOREIGN KEY(stagid) REFERENCES stag(stagid)
);

CREATE TABLE telphone(
    groupid INT AUTO_INCREMENT,
    telId CHAR(16) NOT NULL,
    title VARCHAR(32),
    userid INT NOT NULL,
    mtagid INT NOT NULL,
    PRIMARY KEY(groupid),
    FOREIGN KEY(userid) REFERENCES user(userid),
    FOREIGN KEY(mtagid) REFERENCES mtag(mtagid)
);

CREATE TABLE board(
    boardid INT AUTO_INCREMENT,
    title VARCHAR(32),
    userid INT NOT NULL,
    content VARCHAR(100),
    mtagid INT NOT NULL,
    PRIMARY KEY(boardid),
    FOREIGN KEY(userid) REFERENCES user(userid),
    FOREIGN KEY(mtagid) REFERENCES mtag(mtagid)
);
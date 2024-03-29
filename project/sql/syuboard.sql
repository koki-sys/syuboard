/* 削除用のSQLが入っています 注意してください */
DROP TABLE IF EXISTS board;

DROP TABLE IF EXISTS telphone;

DROP TABLE IF EXISTS mtag;

DROP TABLE IF EXISTS owner;

DROP TABLE IF EXISTS customer;

DROP TABLE IF EXISTS stag;

/* 削除用SQL ここまで */
CREATE TABLE customer (
    customerid INT AUTO_INCREMENT,
    name VARCHAR(40) NOT NULL,
    email VARCHAR(50) NOT NULL,
    password VARCHAR(50) NOT NULL,
    icon_path VARCHAR(50) NOT NULL,
    PRIMARY KEY(customerid)
);

CREATE TABLE owner(
    ownerid INT AUTO_INCREMENT,
    password VARCHAR(50) NOT NULL,
    name VARCHAR(40) NOT NULL,
    PRIMARY KEY(ownerid)
);

CREATE TABLE stag(
    stagid INT AUTO_INCREMENT,
    name1 VARCHAR(32),
    name2 VARCHAR(32),
    name3 VARCHAR(32),
    name4 VARCHAR(32),
    name5 VARCHAR(32),
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
    url VARCHAR(100) NOT NULL,
    title VARCHAR(32),
    customerid INT NOT NULL,
    mtagid INT NOT NULL,
    PRIMARY KEY(groupid),
    FOREIGN KEY(customerid) REFERENCES customer(customerid),
    FOREIGN KEY(mtagid) REFERENCES mtag(mtagid)
);

CREATE TABLE board(
    boardid INT AUTO_INCREMENT,
    title VARCHAR(32),
    customerid INT NOT NULL,
    mtagid INT NOT NULL,
    PRIMARY KEY(boardid),
    FOREIGN KEY(customerid) REFERENCES customer(customerid),
    FOREIGN KEY(mtagid) REFERENCES mtag(mtagid)
);

CREATE TABLE post(
    postid INT AUTO_INCREMENT,
    content VARCHAR(100) NOT NULL,
    boardid INT NOT NULL,
    PRIMARY KEY(postid),
    FOREIGN KEY(boardid) REFERENCES board(boardid)
);

CREATE TABLE friend(
    id INT AUTO_INCREMENT,
    friend_id INT NOT NULL,
    customer_id INT NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(customer_id) REFERENCES customer(customerid)
);
DELETE FROM
    telphone;

DELETE FROM
    post;

DELETE FROM
    board;

DELETE FROM
    mtag;

DELETE FROM
    stag;

DELETE FROM
    customer;

/* テーブルへのデータ*/
insert into
    customer(
        customerid,
        name,
        email,
        password,
        icon_path
    )
values
    (
        1,
        "testA",
        "testA@example.com",
        "dhowrghghrf",
        "#"
    ),
    (
        2,
        "testB",
        "testB@example.com",
        "sjiorgoijoo",
        "#"
    ),
    (
        3,
        "testC",
        "testC@exmaple.com",
        "sddkfjohre",
        "#"
    );

/* サブタグのテーブル */
insert into
    stag(stagid, name1)
values
    (1, "OOキャンプ場");

/* メインタグのテーブル */
insert into
    mtag(mtagid, mtagname, stagid)
values
    (1, "キャンプ", 1);

/* 掲示板テーブルへのデータ */
insert into
    board(boardid, title, customerid, mtagid)
values
    (1, "山鳥の森キャンプ場について", 1, 1),
    (2, "好きなアニメある？", 2, 1),
    (3, "大分名物について", 3, 1);

/* 投稿テーブルへのデータ */
insert into
    post(postid, content, boardid)
values
    (1, "まずさ、好きなキャンプ場とかってある？", 1),
    (2, "俺ないな～", 1),
    (3, "ここってどう？", 1),
    (4, "いいね", 1),
    (5, "いいなあ～", 1),
    (6, "これとかも", 1);

/* 通話テーブルへのデータ */
insert into
    telphone(
        groupid,
        telId,
        title,
        customerid,
        mtagid
    )
values
    (1, "sjdofjwoi;orh", "好きなものについて語りませんか？", 1, 1),
    (2, "kdsjogjhdfe", "わーい", 2, 1);
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="./css/create.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<?php require './header.php'; ?>
<body>
<div class="container">
<div class="title mt-5">
 <h1>スレッドの作成</h1>
</div>
 <form action="createthreadcheck.php" method="post">
    <div class="element"></div>
    <label class="mb-1 left leftp">タイトル</label><br>
    <input class="form-control mx-auto" type="title" size="32" name="title" style="width:60%" required><br>
    <label class="mt-3 mb-1 left leftp">メインタグ</label><br>
    <select class="form-control mx-auto" type="mtag" size="1" name="mtag" style="width:60%" required>
    <option value="スポーツ">スポーツ</option>
        <option value="ホビー">ホビー</option>
        <option value="ゲーム">ゲーム</option>
        <option value="歌・BGM">歌・BGM</option>
        <option value="ギャンブル">ギャンブル</option>
        <option value="ファッション">ファッション</option>
        <option value="アイドル">アイドル</option>
        <option value="アニマル">アニマル</option>
        <option value="本">本</option>
        <option value="映画">映画</option>
        <option value="雑談">雑談</option>
        <option value="アウトドア">アウトドア</option>
    </select>
    <br>
    <label class="mt-3 mb-1 left leftp">タグ　※複数入力する場合はカンマ（,）区切りで入力してください</label><br>
    <input class="form-control mx-auto" type="stag" size="32" name="stag" style="width:60%" required><br>
    <input type="submit" value="　作成　" class="btn1 btn mb-3 float-right br">
</form>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>
</html>

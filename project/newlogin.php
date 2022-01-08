<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
</head>

<body>
    <div class="container">
        <div class="center">
            <div class="box mart">
                <div class="box2">
                    <form action="newlogincheck.php" method="post">
                        <div class="left">
                            <label class="ms-5 mb-1 mt-3 left">ニックネーム</label><br>
                        </div>
                        <input class="form-control mx-auto" type="text" name="nickname" style="width:75%" required><br>
                        <div class="left">
                            <label class="ms-5 mb-1 left">Email</label><br>
                        </div>
                        <input class="form-control mx-auto" type="mail" size="40" name="email" style="width:75%"
                            required><br>
                        <div class="left">
                            <label class="ms-5 mb-1 left">パスワード</label><br>
                        </div>
                        <input class="form-control mx-auto" type="password" size="40" name="password" style="width:75%"
                            required maxlength="10"><br>
                </div>
                <div class="btns">
                    <input type="button" value="　戻る　" onclick="location.href='index.php'"
                        class="btn btn-outline-secondary mb-3">
                    <input type="submit" value="登録する" class="btn1 btn mb-3">
                </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</body>

</html>
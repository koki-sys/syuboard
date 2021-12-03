<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
<link rel="stylesheet" href="./css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
var i=1;
function add(){
    if(i <= 6){
        var input_data = document.createElement('input');
        input_data.type = 'text';
        input_data.id = 'subtag_' + i;
        input_data.placeholder = 'サブタグ';
        var parent = document.getElementById('form_area');
        parent.appendChild(input_data);
        i++;
    }
   
}
</script>
</head>
<?php require './header.php'; ?>
<body>
<div class="container">
 <form action="createtellcheck.php" method="post"> 

    <div class="element"></div>
    <div class="ct_iptxt p20">
	<label class="et">
    <input class="form-control mx-auto" type="text" size="32" name="title" style="width:200%" required placeholder="タイトルを入力してください"><br>
    </label>
    </div>

    <!--メインタグ　修正必須 
    <div class="p20">
    <div class="cp_iptxt">
    <input class="ef" type="text" placeholder="" style="width:90%" required>
    <label>タグ</label>
    <span class="focus_line"><i></i></span>
    </div>
    </div>
    -->
    
    <div id="form_area" class="sub p20 ms-4">
    <input type="button" value="＋サブタグ"  onclick="add()" class="purasu">
    </div>
    
    <div class="pa30 mt-5">
    <input type="button" value="キャンセル" onClick="history.back()" class="btn bc mb-3">
    <input type="submit" value="　作成　" class="btn1 btn mb-3 right ma30">
    </div>
</form>
</div>
</div>
   
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>プリンセス転校生</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="ここにサイト説明を入れます">
<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">
<link rel="stylesheet" href="css/form.css">
<link rel="stylesheet" href="css/fixmenu_pagetop.css">
<script type="text/javascript" src="js/openclose.js"></script>
<script type="text/javascript" src="js/fixmenu_pagetop.js"></script>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
$(function(){
$('a[href^="#"]').click(function() {
var speed = 800;
var href= $(this).attr("href");
var target = $(href == "#" || href == "" ? 'html' : href);
var position = target.offset().top;
$('body,html').animate({scrollTop:position}, speed, 'swing');
return false;
});
});
</script>
</head>
<body>
<div id="container">
    <div class="contents bg1">
        <h2>粗品に相談<span></span></h2>
        <h3>やり方</h3>
        <p>以下の欄に相談や悩みを記入してください</p>
        <p>「フラれた、好きな人がいる、給料が低い」</p>
        <p>なんでも大丈夫です。</p>
        <p>私はこんなことに悩んでいるんです！と訴えてください</p>
        <p>あなたが悩んでいる間に２０代男性は何をしていたかが表示されます。</p>
        <p></p>
        <form method="POST" action="/soshina">
            {{ csrf_field() }}
            <textarea name="textarea" class="textarea"></textarea><br>
            <input class="c-button" name="submit" type="submit" value="相談する">
        </form>
        <h3>　</h3>
    </div>
</div>
</body>
</html>

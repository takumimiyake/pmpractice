<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <title>新規登録</title>
       
    </head>
     <CENTER>
    <body>
        <img src ="syokaitouroku.PNG"width="700"height="300">
        <CENTER>

        <div>
       
            <form method="post" action="adduser.php">
                <CENTER>
                    <p>名前<input type="text"size="30" name="example1" value="" ><br>
                    
                    <br>
                    <CENTER>
                    パスワード<input type="password" name="example3"size="30" value="" pattern="[A-Za-z0-9]{1,36}" required ><br>
                    <br>
                    <CENTER>
                     所属研究室

<select style="width: 200px" name="example2" ><br />>

 <option value=""selected></option>

<option value="1">堀内研究室</option><br>

<option value="2">竹本研究室</option><br>

<option value="3">矢吹研究室</option><br>

<option value="4">下田研究室</option><br>

<option value="5">田隈研究室</option><br>

<option value="6">五百井研究室</option><br>

<option value="7">久保研究室</option><br>

<option value="8">新井研究室</option><br>

<option value="9">武田研究室</option><br>

<option value="10">下村研究室</option><br>

<option value="11">鴻巣研究室</option><br>

<option value="12">遠山研究室</option><br>

<option value="13">加藤研究室</option><br>

<option value="14">谷本研究室</option><br>
   
<br />

</select>

               <p><input type="submit" value="登録"></p>
            </form>
        </div>
    </body>
</html>

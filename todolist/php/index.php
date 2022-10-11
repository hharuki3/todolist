<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todoリスト</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <form action="register.php" method="POST">
        <h1>ToDoリスト 入力ページ</h1>
        <div class="input">
            <div>
                <p>予定タイトル</p>
                <input type="text" size="30" name="list_name" required>
            </div>
    
            <div>
                <p>優先度</p>
                <label>
                    <input type="radio" name="primary" id="1">高
                </label>
                <label>
                    <input type="radio" name="primary" id="2">中
                </label>
                <label>
                    <input type="radio" name="primary" id="3">低 
                </label>
            </div>
            <div>
                <p>予定種別</p>
                <select name="plan" id="plan">
                    <option value="select">選択してください</option>
                    <option value="outside">外出</option>
                    <option value="inside">家</option>
                    <option value="work">仕事</option>
                </select>
            </div>
            <div>
                <p>予定詳細</p>
                <textarea name="detail" id="detail" cols="30" rows="10"></textarea>
            </div>
            <div>
                <input type="submit" value="送信" class="btn-border">
            </div>

        </div>
    </form>
</body>
</html>
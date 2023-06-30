<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規記事作成</title>
</head>

<body>
    <!-- ヘッダー読み込み -->
    <?php include "header.html" ?>

    <fieldset>
        <!-- AIモード -->
        <legend>AI記者モード</legend>
        <p>5W1Hの入力で記事案を作成できます</p>
        <label>When（いつ）<br><textArea id="when" name="when" rows="4" cols="40"></textArea></label><br>
        <label>Where（どこで）<br><textArea id="where" name="where" rows="4" cols="40"></textArea></label><br>
        <label>Who（だれが）<br><textArea id="who" name="who" rows="4" cols="40"></textArea></label><br>
        <label>What（なにをした）<br><textArea id="what" name="what" rows="4" cols="40"></textArea></label><br>
        <label>Why（なぜ）<br><textArea id="why" name="why" rows="4" cols="40"></textArea></label><br>
        <label>How（どのように）<br><textArea id="how" name="how" rows="4" cols="40"></textArea></label><br>
        <button id='sendButton'>記事案作成</button>
    </fieldset>

    <!-- 記事の入力ができる部分 -->
    <form method="post" action="./insert.php">
        <label>タイトル<br><textArea name="title" rows="1" cols="40"></textArea></label><br>
        <label>本文<br><textArea name="content" rows="4" cols="40"></textArea></label><br>
        <input type="submit" value="送信">
    </form>

    <script>
        sendButton.addEventListener('click', () => {
            console.log('成功')
            
            // 変数に入力値を格納
            const when = document.getElementById("when").value;
            const where = document.getElementById("where").value;
            const who = document.getElementById("who").value;
            const what = document.getElementById("what").value;
            const why = document.getElementById("why").value;
            const how = document.getElementById("how").value;

            const userInput = when + where + who + what + why + how

            console.log(userInput, 'userInput')
            // const userInputValue = userInput.value.trim(); // テキストボックスに入力された文字列
            const userInputValue = userInput.value; // テキストボックスに入力された文字列

            if (userInputValue === '') return;
            // addChatBubble(userInputValue, 'user');

            fetch('./chatgpt_api.php', { // リクエスト先のPHPファイルを指定
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify({
                        prompt: userInputValue // テキストボックスに入力された文字列を格納
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const chatGPTResponse = data; // ChatGPTでAIが回答した内容を格納
                    console.log(chatGPTResponse);
                });
        })
    </script>

</body>

</html>
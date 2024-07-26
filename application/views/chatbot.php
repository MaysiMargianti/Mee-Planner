<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mee Plan Bot</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            height: 600px;
            width: 600px;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-header {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .chat-messages {
            flex: 1;
            padding: 10px;
            overflow-y: auto;
            height: 400px;
        }

        .chat-messages .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 4px;
            display: flex;
            flex-direction: column;
        }

        .chat-messages .message.user {
            background-color: #4caf50;
            color: white;
            align-self: flex-end;
        }

        .chat-messages .message.bot {
            background-color: #e4e4e4;
            color: black;
            align-self: flex-start;
        }

        .chat-messages .message .sender {
            display: flex;
            align-items: center;
            font-size: 12px;
            font-weight: bold;
        }

        .chat-messages .message .text {
            word-wrap: break-word;
            white-space: pre-wrap;
        }

        .chat-input {
            display: flex;
            border-top: 1px solid #ddd;
        }

        .chat-input input {
            flex: 1;
            padding: 10px;
            border: none;
            border-top: 1px solid #ddd;
            border-radius: 0;
            outline: none;
        }

        .chat-input button {
            background-color: #4caf50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .chat-input button:hover {
            background-color: #45a049;
        }

        .bot-logo {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="chat-container">
        <div class="chat-header">
            MeePlan Bot
            <img src="assets/img/chef.png" alt="chef" class="bot-logo">
        </div>
        <div class="chat-messages" id="chat-messages">
            Selamat datang di MeePlan Bot, Tanyakan seputar makanan dan pola hidup sehat!!! 
        </div>
        <div class="chat-input">
            <input type="text" id="message-input" placeholder="Type your message...">
            <button id="send-button">Kirim</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const keywords = ["resep", "Resep", "help", "diet", "makanan", "sehat"];

        document.getElementById('send-button').addEventListener('click', function() {
            const messageInput = document.getElementById('message-input');
            const messageText = messageInput.value.trim();

            if (messageText) {
                messageInput.value = '';
                appendMessage('user', 'You', messageText);

                if (keywords.some(keyword => messageText.includes(keyword))) {
                    $.ajax({
                        url: 'chatbot/send_message',
                        method: 'POST',
                        data: { userInput: messageText },
                        success: function(response) {
                            appendMessage('bot', '<img src="assets/img/chef.png" alt="chef" class="bot-logo">Bot', response);
                        }
                    });
                } else {
                    appendMessage('bot', '<img src="assets/img/chef.png" alt="chef" class="bot-logo">Bot', 'Chat tidak dikenali');
                }
            }
        });

        function appendMessage(sender, senderName, text) {
            const chatMessages = document.getElementById('chat-messages');
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', sender);

            const senderElement = document.createElement('div');
            senderElement.classList.add('sender');
            senderElement.innerHTML = senderName;

            const textElement = document.createElement('div');
            textElement.classList.add('text');
            textElement.textContent = text;

            messageElement.appendChild(senderElement);
            messageElement.appendChild(textElement);
            chatMessages.appendChild(messageElement);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }
    </script>
</body>
</html>

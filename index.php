<!DOCTYPE html>
<html>
    <head>
        <title>WETHESTREET</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/index.css">
        <style>
            body {
                font-family: 'Roboto', sans-serif;
                background-color: #f8f9fa;
                margin: 0;
                padding: 0;
            }
            .navbar {
                background-color: #fff;
                border-bottom: 1px solid #ddd;
                margin-bottom: 20px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }
            .navbar-brand {
                color: #000;
                font-size: 24px;
                font-weight: bold;
                transition: color 0.3s;
            }
            .navbar-brand:hover {
                color: #333;
            }
            .navbar-nav > li > a {
                color: #000;
                font-size: 16px;
                padding: 15px 20px;
                transition: background-color 0.3s, color 0.3s;
            }
            .navbar-nav > li > a:hover, .navbar-nav > li.active > a {
                background-color: #000;
                color: #fff;
                border-radius: 20px;
            }
            .navbar-form {
                margin-right: 20px;
                transition: transform 0.3s;
            }
            .form-control {
                border-radius: 20px;
                transition: box-shadow 0.3s;
            }
            .form-control:focus {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }
            .btn-search {
                background-color: #000;
                color: #fff;
                border-radius: 20px;
                transition: background-color 0.3s;
            }
            .btn-search:hover {
                background-color: #333;
            }
            .text-logo {
                color: #000;
                text-align: center;
                margin-top: 20px;
                font-size: 36px;
                font-weight: bold;
                transition: color 0.3s;
            }
            .text-logo:hover {
                color: #333;
            }
            .nav-pills > li > a {
                background-color: #fff;
                color: #000;
                border: 1px solid #ddd;
                margin-right: 5px;
                border-radius: 20px;
                transition: background-color 0.3s, color 0.3s;
            }
            .nav-pills > li > a:hover, .nav-pills > li.active > a {
                background-color: #000;
                color: #fff;
            }
            .tab-content > .tab-pane {
                margin-top: 20px;
                transition: opacity 0.3s;
            }
            .thumbnail {
                border: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                overflow: hidden;
                transition: transform 0.3s;
            }
            .thumbnail:hover {
                transform: translateY(-10px);
            }
            .thumbnail img {
                border-radius: 10px 10px 0 0;
                transition: transform 0.3s;
            }
            .thumbnail img:hover {
                transform: scale(1.05);
            }
            .caption {
                padding: 15px;
                text-align: center;
            }
            .price {
                color: #000;
                font-size: 18px;
                font-weight: bold;
                margin-bottom: 10px;
            }
            .btn-order {
                background-color: #000;
                color: #fff;
                border-radius: 20px;
                transition: background-color 0.3s;
            }
            .btn-order:hover {
                background-color: #333;
            }
            .panel {
                border: none;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
                transition: transform 0.3s;
            }
            .panel:hover {
                transform: translateY(-10px);
            }
            .panel-heading {
                background-color: #000;
                color: #fff;
                border-radius: 10px 10px 0 0;
            }
            .panel-body {
                background-color: #fff;
                border-radius: 0 0 10px 10px;
            }
            .btn-info {
                background-color: #000;
                color: #fff;
                border-radius: 20px;
                transition: background-color 0.3s;
            }
            .btn-info:hover {
                background-color: #333;
            }
            .video-container {
                position: relative;
                padding-bottom: 56.25%; /* 16:9 */
                height: 0;
                overflow: hidden;
                max-width: 100%;
                background: #000;
            }
            .video-container iframe {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
            }
            .chat-container {
                background-color: #f1f1f1;
                border-radius: 10px;
                padding: 10px;
                max-height: 500px;
                overflow-y: auto;
            }
            .chat-container h4 {
                margin-top: 0;
            }
            .chat-message {
                margin-bottom: 10px;
            }
            .forum-section {
                margin-top: 20px;
            }
            .forum-topic {
                background-color: #e9ecef;
                border-radius: 10px;
                margin-bottom: 20px;
                padding: 15px;
                transition: background-color 0.3s;
            }
            .forum-topic:hover {
                background-color: #d6d8db;
            }
            .forum-reply {
                background-color: #f8f9fa;
                border-radius: 10px;
                margin-top: 10px;
                padding: 10px;
            }
            .forum-new-topic, .forum-new-reply {
                margin-top: 20px;
            }
            .forum-new-topic textarea, .forum-new-reply textarea {
                width: 100%;
                height: 100px;
                border-radius: 10px;
                border: 1px solid #ddd;
                padding: 10px;
                transition: box-shadow 0.3s;
            }
            .forum-new-topic textarea:focus, .forum-new-reply textarea:focus {
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            }
            .forum-new-topic button, .forum-new-reply button {
                background-color: #000;
                color: #fff;
                border-radius: 20px;
                margin-top: 10px;
                transition: background-color 0.3s;
            }
            .forum-new-topic button:hover, .forum-new-reply button:hover {
                background-color: #333;
            }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">WETHESTREET</a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav">
                        <?php
                            require 'admin/database.php';
                            $db = Database::connect();
                            $statement = $db->query('SELECT * FROM categories');
                            $categories = $statement->fetchAll();
                            foreach ($categories as $category) {
                                if ($category['id'] == '1')
                                    echo '<li role="presentation" class="active"><a href="#' . $category['id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                                else
                                    echo '<li role="presentation"><a href="#' . $category['id'] . '" data-toggle="tab">' . $category['name'] . '</a></li>';
                            }
                            echo '<li role="presentation"><a href="#forum" data-toggle="tab">Forum</a></li>';
                            echo '<li role="presentation"><a href="#switch" data-toggle="tab">Switch Platform</a></li>';
                            Database::disconnect();
                        ?>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-search"><span class="glyphicon glyphicon-search"></span></button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="container site">
            <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span>WETHESTREET<span class="glyphicon glyphicon-cutlery"></span></h1>
            <div class="tab-content">
                <?php
                    foreach ($categories as $category) {
                        if ($category['id'] == '1')
                            echo '<div class="tab-pane active" id="' . $category['id'] .'">';
                        else
                            echo '<div class="tab-pane" id="' . $category['id'] .'">';
                        
                        echo '<div class="row">';
                        
                        $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                        $statement->execute(array($category['id']));
                        while ($item = $statement->fetch()) {
                            echo '<div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="images/' . $item['image'] . '" alt="...">
                                        <div class="price">' . number_format($item['price'], 2, '.', ''). ' €</div>
                                        <div class="caption">
                                            <h4>' . $item['name'] . '</h4>
                                            <h4>' . $item['description'] . '</h4>
                                            
                                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                        </div>
                                    </div>
                                </div>';
                        }
                       
                       echo    '</div>
                            </div>';
                    }

                    // Forum Section
                    echo '<div class="tab-pane" id="forum">
                            <h2>Forum</h2>
                            <p>Welcome to the forum. Discuss and share your thoughts here.</p>
                            <div class="forum-section">
                                <div class="forum-topic">
                                    <h4>Topic 1</h4>
                                    <p>This is the first topic of discussion.</p>
                                    <div class="forum-replies">
                                        <div class="forum-reply">
                                            <strong>User1:</strong> This is a reply to Topic 1.
                                        </div>
                                        <div class="forum-reply">
                                            <strong>User2:</strong> Another reply to Topic 1.
                                        </div>
                                    </div>
                                    <div class="forum-new-reply">
                                        <textarea placeholder="Write a reply..."></textarea>
                                        <button class="btn btn-info">Reply</button>
                                    </div>
                                </div>
                                <div class="forum-topic">
                                    <h4>Topic 2</h4>
                                    <p>This is the second topic of discussion.</p>
                                    <div class="forum-replies">
                                        <div class="forum-reply">
                                            <strong>User3:</strong> This is a reply to Topic 2.
                                        </div>
                                    </div>
                                    <div class="forum-new-reply">
                                        <textarea placeholder="Write a reply..."></textarea>
                                        <button class="btn btn-info">Reply</button>
                                    </div>
                                </div>
                                <div class="forum-topic">
                                    <h4>Topic 3</h4>
                                    <p>This is the third topic of discussion.</p>
                                    <div class="forum-replies">
                                        <div class="forum-reply">
                                            <strong>User4:</strong> This is a reply to Topic 3.
                                        </div>
                                    </div>
                                    <div class="forum-new-reply">
                                        <textarea placeholder="Write a reply..."></textarea>
                                        <button class="btn btn-info">Reply</button>
                                    </div>
                                </div>
                                <div class="forum-new-topic">
                                    <textarea placeholder="Create a new topic..."></textarea>
                                    <button class="btn btn-info">Post Topic</button>
                                </div>
                            </div>
                          </div>';

                    // Clothing Store Section
                    echo '<div class="tab-pane" id="clothing">
                            <h2>Clothing Store</h2>
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="images/clothing1.jpg" alt="...">
                                        <div class="price">29.99 €</div>
                                        <div class="caption">
                                            <h4>Nice Shirt</h4>
                                            <p>A nice shirt for casual wear.</p>
                                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="images/clothing2.jpg" alt="...">
                                        <div class="price">49.99 €</div>
                                        <div class="caption">
                                            <h4>Elegant Dress</h4>
                                            <p>An elegant dress for special occasions.</p>
                                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="images/clothing3.jpg" alt="...">
                                        <div class="price">39.99 €</div>
                                        <div class="caption">
                                            <h4>Stylish Jacket</h4>
                                            <p>A stylish jacket for cooler days.</p>
                                            <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Commander</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          </div>';

                    // Switch Platform Section
                    echo '<div class="tab-pane" id="switch">
                            <h2>Switch Platform</h2>
                            <div class="video-container">
                                <iframe src="https://player.twitch.tv/?channel=example_channel&parent=yourwebsite.com" frameborder="0" allowfullscreen="true" scrolling="no"></iframe>
                            </div>
                            <div class="chat-container">
                                <h4>Live Chat</h4>
                                <div class="chat-message">
                                    <strong>User1:</strong> This is an example message.
                                </div>
                                <div class="chat-message">
                                    <strong>User2:</strong> Another message in the chat.
                                </div>
                                <div class="chat-new-message">
                                    <textarea id="chatInput" placeholder="Write a message..."></textarea>
                                    <button id="chatButton" class="btn btn-info">Send</button>
                                </div>
                            </div>
                          </div>';

                    Database::disconnect();
                ?>
            </div>
        </div>


        
        <script>
            // Forum section - Add new topic
            document.querySelector('.forum-new-topic button').addEventListener('click', function() {
                var topicContent = document.querySelector('.forum-new-topic textarea').value;
                if (topicContent.trim()) {
                    var newTopic = document.createElement('div');
                    newTopic.className = 'forum-topic';
                    newTopic.innerHTML = `
                        <h4>New Topic</h4>
                        <p>${topicContent}</p>
                        <div class="forum-replies"></div>
                        <div class="forum-new-reply">
                            <textarea placeholder="Write a reply..."></textarea>
                            <button class="btn btn-info">Reply</button>
                        </div>
                    `;
                    document.querySelector('.forum-section').insertBefore(newTopic, document.querySelector('.forum-new-topic'));
                    document.querySelector('.forum-new-topic textarea').value = '';
                }
            });

            // Forum section - Add reply to topic
            document.querySelectorAll('.forum-new-reply button').forEach(function(button) {
                button.addEventListener('click', function() {
                    var replyContent = this.previousElementSibling.value;
                    if (replyContent.trim()) {
                        var newReply = document.createElement('div');
                        newReply.className = 'forum-reply';
                        newReply.innerHTML = `<strong>You:</strong> ${replyContent}`;
                        this.parentElement.previousElementSibling.appendChild(newReply);
                        this.previousElementSibling.value = '';
                    }
                });
            });

            // Switch Platform section - Add new chat message
            document.getElementById('chatButton').addEventListener('click', function() {
                var chatContent = document.getElementById('chatInput').value;
                if (chatContent.trim()) {
                    var newMessage = document.createElement('div');
                    newMessage.className = 'chat-message';
                    newMessage.innerHTML = `<strong>You:</strong> ${chatContent}`;
                    document.querySelector('.chat-container').insertBefore(newMessage, document.querySelector('.chat-new-message'));
                    document.getElementById('chatInput').value = '';
                }
            });
        </script>
        <button class="basket" style="width: 10px; height:10px">
        <input type="image" class="icon-basket" src="images/panier.png">
        </button>
    </body>
</html>

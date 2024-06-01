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
    <style>
        /* Styles CSS comme avant */
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
            margin-bottom: 20px;
        }
        .forum-topic {
            background-color: #fff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .forum-replies {
            margin-left: 20px;
            margin-top: 10px;
        }
        .forum-reply {
            background-color: #e9ecef;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 5px;
        }
        .forum-new-reply textarea {
            width: 100%;
            margin-bottom: 10px;
            border-radius: 10px;
            padding: 10px;
        }
        .forum-new-reply button {
            display: block;
            margin: auto;
        }
        .forum-new-topic textarea {
            width: 100%;
            margin-bottom: 10px;
            border-radius: 10px;
            padding: 10px;
        }
        .forum-new-topic button {
            display: block;
            margin: auto;
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
                    <li role="presentation"><a href="#category1" data-toggle="tab">Category 1</a></li>
                    <li role="presentation"><a href="#category2" data-toggle="tab">Category 2</a></li>
                    <li role="presentation"><a href="#category3" data-toggle="tab">Category 3</a></li>
                    <li role="presentation"><a href="#forum" data-toggle="tab">Forum</a></li>
                    <li role="presentation"><a href="#switch" data-toggle="tab">Switch Platform</a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default btn-search">Submit</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="text-logo">WETHESTREET</div>

    <div class="container">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#tab1">Category 1</a></li>
            <li><a data-toggle="pill" href="#tab2">Category 2</a></li>
            <li><a data-toggle="pill" href="#tab3">Category 3</a></li>
            <li><a data-toggle="pill" href="#tabForum">Forum</a></li>
            <li><a data-toggle="pill" href="#tabSwitch">Switch Platform</a></li>
        </ul>

        <div class="tab-content">
            <div id="tab1" class="tab-pane fade in active">
                <div class="row">
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="image1.jpg" alt="Image 1">
                            <div class="caption">
                                <h4>Product 1</h4>
                                <p class="price">$19.99</p>
                                <button class="btn btn-primary btn-order" role="button">Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="image2.jpg" alt="Image 2">
                            <div class="caption">
                                <h4>Product 2</h4>
                                <p class="price">$29.99</p>
                                <button class="btn btn-primary btn-order" role="button">Order</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="thumbnail">
                            <img src="image3.jpg" alt="Image 3">
                            <div class="caption">
                                <h4>Product 3</h4>
                                <p class="price">$39.99</p>
                                <button class="btn btn-primary btn-order" role="button">Order</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tab2" class="tab-pane fade">
                <!-- Contenu pour la catégorie 2 -->
            </div>
            <div id="tab3" class="tab-pane fade">
                <!-- Contenu pour la catégorie 3 -->
            </div>
            <div id="tabForum" class="tab-pane fade">
                <div class="forum-section">
                    <div class="forum-topic">
                        <h4>Topic 1</h4>
                        <div class="forum-replies">
                            <div class="forum-reply">
                                <p>Reply 1</p>
                            </div>
                            <div class="forum-reply">
                                <p>Reply 2</p>
                            </div>
                        </div>
                    </div>
                    <div class="forum-topic">
                        <h4>Topic 2</h4>
                        <div class="forum-replies">
                            <div class="forum-reply">
                                <p>Reply 1</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="forum-new-topic">
                    <textarea placeholder="New topic"></textarea>
                    <button class="btn btn-info">Submit</button>
                </div>
            </div>
            <div id="tabSwitch" class="tab-pane fade">
                <div class="switch-container">
                    <!-- Contenu pour le changement de plateforme -->
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <h2>Chat Section</h2>
        <div id="chat-container" class="chat-container">
            <h4>Live Chat</h4>
            <div id="chat-messages" class="chat-messages">
                <!-- Les messages du chat seront ajoutés ici -->
            </div>
            <input type="text" id="chat-input" placeholder="Type a message...">
            <button id="send-chat" class="btn btn-info">Send</button>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Log pour vérifier que le document est prêt
            console.log("Document is ready");

            // Chat functionality
            $('#send-chat').on('click', function() {
                var message = $('#chat-input').val();
                if (message) {
                    $('#chat-messages').append('<div class="chat-message">' + message + '</div>');
                    $('#chat-input').val('');
                }
            });

            // Tab switch functionality
            $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
                var target = $(e.target).attr("href"); // activated tab
                console.log("Switched to tab: " + target);
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <!-- Including HTMLs with JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        // $(function(){
        //     $("#links").load("src/templates/src.php");
        // });
        // $(function(){
        //     $("#footer").load("/views/inc/footer.php");
        // });
        // $(function(){
        //     $("#header").load("/views/inc/header.php");
        // });
    </script>
    <!-- CSS -->
    <link rel="stylesheet" href="/css/app.css">
    {{-- <div id="links"></div> --}}    <!-- Font Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- FontAwesome icons -->
    <script src="https://kit.fontawesome.com/7a19382369.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ url('/js/all.js') }}"></script>

    <script type="text/javascript">
        (function () {
            var options = {
                whatsapp: "8 708 123 55 67", // WhatsApp number
                vkontakte: "id445662621", // VKontakte page name
                call_to_action: "Message us", // Call to action
                button_color: "#FF6550", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,vkontakte" // Order of buttons
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
    </script>
</head>
<body>
    <header id="header">
        @include('inc.header')
    </header>

    @yield('content')

    <footer id="footer">
        @include('inc.footer')
    </footer>

    <script type="text/javascript" src="{{ asset('js/all.js') }}"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>

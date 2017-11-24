<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords" content="{{ config('fgc.meta.keywords')}}">
        <meta name="description" content="{{ config('fgc.meta.description')}}">
        <meta name="author" content="{{ config('fgc.meta.author')}}">
        <title>Felipe Guzman</title>
        <link href="{{asset('css/app.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-110166026-1', 'auto');
            ga('send', 'pageview');
        </script>
  

    </head>
    <body>
        <div id="wrapper">
            <section id="main">
                <header>
                <span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
                <h1>Felipe Guzmán</h1>
                <p>Web Developer</p>
                </header>
                <footer>
                    <ul class="icons">
                    <li><a href="https://www.linkedin.com/in/felipe-guzman-cortez-4baa43138/" class="fa fa-linkedin-square" target="_blank">user</a></li>
                    <li><a href="https://twitter.com/GelipeC" class="fa fa-twitter" target="_blank">Twitter</a></li>
                    <li><a href="https://github.com/GelipeGC" class="fa fa fa-github" target="_blank">fa fa-github</a></li>
                    <li><a href="https://bitbucket.org/GelipeGC/" class="fa fa fa-bitbucket" target="_blank">bitbucket</a></li>
                    </ul>
                </footer>
            </section>
            <!-- Footer -->
            <footer id="footer">
                <ul class="copyright">
                <li>&copy; Felipe Guzmán</li></li>
                </ul>
            </footer>
        </div>
    </body>
</html>

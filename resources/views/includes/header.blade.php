<header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li><a href="{{ Route('signout') }}">logout</a></li>
                    @else
                        <li><a href=" ">login</a></li>
                    @endif
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">form<span class="caret"></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="{{Route('groupkala')}}">تعریف گروه کالا</a></li>
                                <li><a href="{{Route('fard')}}">تعریف فرد</a></li>
                                <li><a href="{{Route('room')}}">تعریف اتاق</a></li>
                                <li><a href="{{ Route('kala') }}">تعریف کالا</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">report</a>
                        </li>
                        <li><a href="{{ Route('signout') }}">setting</a></li>

                </ul>


            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>
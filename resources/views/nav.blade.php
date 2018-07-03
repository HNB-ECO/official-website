<div class="main_section_agile inner">
    <!-- banner -->
    <div class="agileits_w3layouts_banner_nav">
        <div class="">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="/">
                        <img src="/images/index/logo-home.png" alt="">
                    </a></h1>

                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-2" id="link-effect-2">
                        <ul class="nav navbar-nav">
                            <li @if (Request::path() != 'features' && Request::path() != 'ecosystem'  && Request::path() != 'about_us'  && Request::path() != 'about_us' && Request::path() != '/' && Request::path() != 'pdf_list') class="active" @endif><a href="/news/list/1" class="effect-3">Newsroom</a></li>
                            <li @if (Request::path() == 'features'  || Request::path() == 'pdf_list') class="active" @endif ><a href="/features" class="effect-3">Features</a></li>
                            <li @if (Request::path() == 'ecosystem') class="active" @endif><a href="/ecosystem" class="effect-3">Ecosystem</a></li>
                            <li @if (Request::path() == 'about_us') class="active" @endif><a href="/about_us" class="effect-3">About</a></li>
                            <li @if (Request::path() == '/') class="active home" @else class="home" @endif>
                                <a href="/" class="effect-3">HOME</a>
                            </li>
                        </ul>
                        <img class="logo-header" src="/images/index/logo1-home.png" alt="">
                    </nav>
                </div>
            </nav>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
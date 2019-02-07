<div class="header-menu">
    <div class="header-menu-container">
        <nav class="navbar">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="navbar-header">
                            <a href="{{ route('home') }}" class="navbar-brand" title="Paris Garden">
                                <img src="{{asset('images/logo.png')}}" alt="Paris Garden Logo" />
                            </a>
                        </div>

                        @if(sizeof(LaravelLocalization::getSupportedLocales()) > 1)
                        <ul class="header-btns">
                            <li class="header-lang-btn">
                                <a href="#" title="{{ LaravelLocalization::getCurrentLocaleName() }}">{{ LaravelLocalization::getCurrentLocale() }}</a>
                                <nav class="header-language-menu">
                                    <ul>
                                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                            <li>
                                                <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                                    <img src="{{asset('images/lang-flags/' . $localeCode . '.jpg')}}">{{ $localeCode }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </nav>
                            </li>
                        </ul>
                        @endif

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="menu-wd">Menu</span>
                            <span class="lines-wrapper"><i class="lines"></i></span>
                        </button>

                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                @foreach(json_decode(menu_json('main-menu')) as $menuitem)
                                    <li>
                                        <a href="{{ $menuitem->link }}" class="{{ $menuitem->classes }}">{{ $menuitem->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
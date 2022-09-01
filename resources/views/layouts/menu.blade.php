<!--  navigation bar -->
<div class="nav-overlay">
    <div class="tooltip color-bg">Close Menu</div>
</div>
<div class="nav-holder">
    <a class="header-logo" href="{{route('index')}}"><img src="{{asset('assets/images/logo2.png')}}" alt=""></a>
    <div class="nav-title"><span>Menu</span></div>
    <div class="nav-inner-wrap">
        <nav class="nav-inner sound-nav" id="menu">
            <ul>
                <li><a href="{{route('index')}}">Anasayfa</a></li>
{{--                <li><a href="{{route('pages.collaboration')}}">İşbirliklerimiz</a></li>--}}
{{--                <li><a href="{{route('pages.news')}}">Haberler</a></li>--}}
{{--                <li><a href="{{route('pages.activity')}}">Faaliyetler</a></li>--}}

                @php($menu = \App\Models\DynamicPageMenu::with('dynamicPage')->with('children')->where('parent_id', null)->get())

                @foreach($menu as $item)
                    <li><a href="{{$item->dynamicPage != null ? route('pages.dynamic', ['slug' => $item->dynamicPage->slug]) : "#"}}">{{$item->name}}</a>
                        @if($item->children->count() > 0)
                            <ul>
                                @foreach($item->children as $child)
                                    <li><a href="{{$child->dynamicPage != null ?  route('pages.dynamic', ['slug' => $child->dynamicPage->slug]) : "#"}}">{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach



            </ul>
        </nav>
    </div>
</div>
<!--  navigation bar end -->

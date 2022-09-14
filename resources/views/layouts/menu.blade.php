<!--  navigation bar -->
<div class="nav-overlay">
    <div class="tooltip color-bg">{{$en ? 'Close Menu' : 'Menüyü Kapat'}}</div>
</div>
<div class="nav-holder">
    <a class="header-logo" href="{{route($en ? 'en.index' :'index')}}"><img src="{{asset('assets/images/logo2.png')}}" alt=""></a>
    <div class="nav-title"><span>Menu</span></div>
    <div class="nav-inner-wrap">
        <nav class="nav-inner sound-nav" id="menu">
            <ul>
                <li><a href="{{route($en ? 'en.index' : 'index')}}">{{$en ? 'Home page' : 'Anasayfa'}}</a></li>
{{--                <li><a href="{{route('pages.collaboration')}}">İşbirliklerimiz</a></li>--}}
{{--                <li><a href="{{route('pages.news')}}">Haberler</a></li>--}}
{{--                <li><a href="{{route('pages.activity')}}">Faaliyetler</a></li>--}}

                @php($menu = \App\Models\DynamicPageMenu::with('dynamicPage')->with('children')->where('parent_id', null)->get())

                @foreach($menu as $item)
                    <li><a href="{{$item->dynamicPage != null ? route($en ? 'en.pages.dynamic' : 'pages.dynamic', ['slug' => $en ? $item->dynamicPage->getEn->slug : $item->dynamicPage->slug]) : "#"}}">{{$en ? $item->en_name : $item->name}}</a>
                        @if($item->children->count() > 0)
                            <ul>
                                @foreach($item->children as $child)
                                    <li><a href="{{$child->dynamicPage != null ?  route($en ? 'en.pages.dynamic' : 'pages.dynamic', ['slug' =>$en ? $child->dynamicPage->getEn->slug : $child->dynamicPage->slug]) : "#"}}">{{$en ? $child->en_name : $child->name}}</a></li>
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

@php
    function get_other_language_route()
    {
       if(request()->routeIs('en.index'))
           {
                  return route('index');
           }
       elseif (request()->routeIs('index'))
           {
                  return route('en.index');
           }
        elseif(request()->routeIs('*pages.dynamic'))
              {
                    $slug = request()->route('slug');
                    $page = \App\Models\Pages\DynamicPage::where('slug', $slug)->first();
                    if($page->getEn != null)
                        {
                            return route('en.pages.dynamic', ['slug' => $page->getEn->slug]);
                        }
                    else
                        {
                           return route('pages.dynamic', ['slug' => $page->getTr->slug]);
                        }
              }
       elseif(request()->routeIs('pages.*'))
           {
                  return route('en.'.request()->route()->getName());
           }
        elseif(request()->routeIs('en.pages.*'))
             {
                //get parameter from route


                      return route(str_replace( 'en.', '',request()->route()->getName()));
             }

    }
@endphp


<div class="vertical-language-selector language-selector">
    @if($en)
        <a href="{{get_other_language_route()}}"><span><img
                    src="https://www.tosilab.it/wp-content/plugins/sitepress-multilingual-cms/res/flags/tr.png"
                    height="12" alt="es" width="18"></span></a>
        <span class="active"><img
                src="https://www.tosilab.it/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                height="12" alt="it" width="18"></span>

    @else

        <span class="active"><img
                src="https://www.tosilab.it/wp-content/plugins/sitepress-multilingual-cms/res/flags/tr.png"
                height="12" alt="es" width="18"></span>
        <a href="{{get_other_language_route()}}"><span><img
                    src="https://www.tosilab.it/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png"
                    height="12" alt="it" width="18"></span></a>
    @endif
</div>

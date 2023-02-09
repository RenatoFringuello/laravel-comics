@php
    //all nav
    $linksGroup = [
        [
            ["title" => "dc comics", "isTitle" =>  true,],
            ["title" => "Characters", "isTitle" =>  false,],
            ["title" => "Comics", "isTitle" =>  false,],
            ["title" => "Movies", "isTitle" =>  false,],
            ["title" => "TV", "isTitle" =>  false,],
            ["title" => "Games", "isTitle" =>  false,],
            ["title" => "Videos", "isTitle" =>  false,],
            ["title" => "News", "isTitle" =>  false,],
            ["title" => "SHOP", "isTitle" =>  true,],
            ["title" => "Characters", "isTitle" =>  false,],
            ["title" => "Comics", "isTitle" =>  false,],
        ],
        [
            ["title" => "dc", "isTitle" =>  true,],
            ["title" => "Term Of Use", "isTitle" =>  false,],
            ["title" => "Privacy policy (New)", "isTitle" =>  false,],
            ["title" => "Ad Choices", "isTitle" =>  false,],
            ["title" => "Advertising", "isTitle" =>  false,],
            ["title" => "Jobs", "isTitle" =>  false,],
            ["title" => "Subscriptions", "isTitle" =>  false,],
            ["title" => "Talent Workshops", "isTitle" =>  false,],
            ["title" => "CPSC Certificates", "isTitle" =>  false,],
            ["title" => "Ratings", "isTitle" =>  false,],
            ["title" => "Shop Help", "isTitle" =>  false,],
            ["title" => "Contact Us", "isTitle" =>  false,],
        ],
        [
            ["title" => "sites", "isTitle" =>  true,],
            ["title" => "DC", "isTitle" =>  false,],
            ["title" => "MAD Magazine", "isTitle" =>  false,],
            ["title" => "DC Kids", "isTitle" =>  false,],
            ["title" => "DC Universe", "isTitle" =>  false,],
            ["title" => "DC Power Visa", "isTitle" =>  false,],
        ],
    ];
    //sign up
    $socialImgs = [
        ["title" => "Facebook logo","imgName" => "footer-facebook.png"],
        ["title" => "Twitter logo","imgName" => "footer-twitter.png"],
        ["title" => "YouTube logo","imgName" => "footer-youtube.png"],
        ["title" => "Pinerest logo","imgName" => "footer-pinterest.png"],
        ["title" => "Periscope logo","imgName" => "footer-periscope.png"]
    ];
@endphp
<footer>
    <section class="all-nav">
        <div class="container">
            <nav>
                @foreach ($linksGroup as $list) 
                    <ul>
                        @foreach ($list as $item) 
                            <li><a href="#" class="{{($item['isTitle']) ? 'sans-narrow' : ''}}">{{ $item["title"] }}</a></li>
                        @endforeach
                    </ul>
                @endforeach
            </nav>
            <div class="img-container"></div>
        </div>
    </section>
    {{-- sign up --}}
    <section class="sign-up">
        <div class="container">
            <div class="sign-up">
                {{-- click sign up --}}
                <button class="outlined" >sign-up now!</button>
            </div>
            <nav class="social">
                <h1 class="sans-narrow">follow us</h1>
                <ul>
                    @foreach ($socialImgs as $socialImg)
                        <li><a href="#"><img src="{{ Vite::asset('./resources/assets/images/'.$socialImg['imgName']) }}" alt="{{ $socialImg['title'] }}"></a></li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>
</footer>
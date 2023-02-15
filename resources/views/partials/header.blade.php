<header>
    <div class="header-info-wrapper">
        <div class="container">
            <span>DC POWER™VISA&reg;</span>
            <select name="dc-sites" id="dc-sites">
                <option value="-">Additional DC Sites</option>
                <option value="1">DC</option>
                <option value="2">Mad Magazine</option>
                <option value="3">DC Kids</option>
                <option value="4">DC Universe</option>
                <option value="5">DC Power Visa</option>
            </select>
        </div>
    </div>
    <div class="header-wrapper sans-narrow">
        <div class="container">
            <a href="{{route('comics.index')}}" class="img-container">
                <img src="{{ Vite::asset('./resources/assets/images/dc-logo.png')}}" alt="DC Logo">
            </a>
            <nav class="nav-links">
                <ul>
                    <li >
                        <a href="#">CHARACTERS</a>
                        <div class="active-bar"></div>
                    </li>
                    <li class="active">
                        <a href="#">COMICS</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">MOVIES</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">TV</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">GAMES</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">COLLECTIBLES</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">VIDEOS</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">FANS</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">NEWS</a>
                        <div class="active-bar"></div>
                    </li>
                    <li >
                        <a href="#">SHOP</a>
                        <div class="active-bar"></div>
                    </li>
                </ul>
            </nav>
            <div class="search-container">
                <input type="text" name="searchBar" id="search-bar" placeholder="Search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </div>
    </div>

</header>
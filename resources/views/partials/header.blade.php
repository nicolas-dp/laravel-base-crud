<header>
    <div class="bg-primary text-white">
        <div class="powered-visa container">
            <small>POWERED VISA</small>
            <small>ADDICTIONAL DC SITES</small>
        </div>
    </div>
    <nav>
        <div class="container">




            <ul class="nav">
                <li>
                    <a href="/">
                        <img height="50" src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3d/DC_Comics_logo.svg/2048px-DC_Comics_logo.svg.png" alt="...">
                    </a>
                </li>
                <ul class="nav text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'characters' ? 'active' : '' }}" aria-current="page" href="create">Add New comics book</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" aria-current="page" href="\comics">comics</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" aria-current="page" href="#">shop</a>
                    </li>
                </ul>

            </ul>
        </div>

    </nav>
</header>
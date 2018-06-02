 @section('sidebar')
        <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
        <a class="navbar-brand {{ Request::is('/')?"active":""}}" href="/">{{config('app.name','Demo')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        
            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">

                <li class="nav-item">
                    <a class="nav-link {{ Request::is('about')?"active":""}}" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('contact')?"active":""}}" href="/contact">Contact</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('blog')?"active":""}}" href="/posts">Blog</a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link {{Request::is('services')?"active":""}} dropdown-toggle" href="/services" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Services</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04">
                    <a class="dropdown-item" href="/services">services page</a>
                    <a class="dropdown-item" href="#">web design</a>
                    <a class="dropdown-item" href="#">programming</a>
                     <a class="dropdown-item" href="#">SEO</a>
                    </div>
                </li>
                </ul>
                </form>
            </div>
            </nav>

<header id="header" class="d-flex align-items-center" style="height: 56px; background-color: #d62227; font-weight: 600">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="{{ url('/') }}" style="color: white">JBNet Group</a></h1>
        <nav id="navbar" class="navbar">
            <ul class="text-uppercase">
                <li><a class="nav-link scrollto active" href="{{ url('/') }}">Home</a></li>
                <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="{{ route('aboutUs.ceoMessage') }}">CEO MESSAGE</a></li>
                        <li><a href="{{ route('aboutUs.companyProfile') }}">COMPANY PROFILE</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Our Companies</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">JB HALAL FOOD</a></li>
                        <li><a href="#">JBHRA</a></li>
                        <li><a href="#">JBNET TELECOM</a></li>
                        <li><a href="#">IKIAGI CORPORATION</a></li>
                        <li><a href="#">JBNET TRAVELS</a></li>
                        <li><a href="#">JB FASHION</a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#"><span>Our Services</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                        <li><a href="#">Internet Connection</a></li>
                        <li><a href="#">Halal Food Services</a></li>
                        <li><a href="#">Corporate Consultancy</a></li>
                        <li><a href="#">Discount Air Ticket</a></li>
                        <li><a href="#">Visa Processing</a></li>
                        <li><a href="#">Send Money</a></li>
                        <li><a href="#">Translation</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="#">Our Product</a></li>
                <li><a class="nav-link scrollto " href="{{ route('front.gallery') }}">Gallery</a></li>
                <li><a class="nav-link scrollto " href="#">Blog</a></li>
                <li><a class="nav-link scrollto " href="#">Notice</a></li>
                <li><a class="nav-link scrollto " href="{{ route('front.contact_us') }}">Contact Us</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>

<div class="top-area main-nav">
    <div class="container">
        <nav class="navbar-nav main-nav-items">
            <a class="{{url()->current() == route('index') ? "active": ""}}" href="{{route('index')}}">Home</a>
            <a class="{{url()->current() == route('statement') ? "active": ""}}"  href="{{route('statement')}}">Statement from Chair</a>
            <a class="{{url()->current() == route('events') ? "active": ""}}"  href="{{route('events')}}">Our Events</a>
            <a class="{{url()->current() == route('contact') ? "active": ""}}"  href="{{route('contact')}}">Contact Us</a>
        </nav>
    </div>
</div>
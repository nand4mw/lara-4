<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand" href="#">NNDMW blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" {{ $title === 'home' ? 'active' : '' }} href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ $title === 'home' ? 'active' : '' }} href="/about">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" {{ $title === 'home' ? 'active' : '' }} href="/posts">blog</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

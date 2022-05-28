<nav class="navbar navbar-dark bg-dark border-bottom border-secondary fixed-top">
    <div class="container">
        <a class="navbar-brand text-warning" href="/">
            <h1 class="fs-3 text-center">BeeFlix</h1>
        </a>
    </div>

    <div class="container mb-3">
        <div class="btn-group" role="group">
            <a href="{{ url()->previous() }}" class="btn btn-warning py-1 px-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left-short" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z" />
                </svg><b>KEMBALI</b>
            </a>

            <a href="/" class="btn btn-outline-warning py-1 px-2">
                <b>LIHAT SEMUA FILM</b>
            </a>
        </div>
    </div>
</nav>

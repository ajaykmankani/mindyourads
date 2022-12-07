@extends('master')
@section('main')
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">404 - Error Page</h1>
            <ul class="breadcumb-menu">
                <li><a href="index-2">Home</a></li>
                <li>404 - Error Page</li>
            </ul>
        </div>
    </div>
    </div>
    <section class="space">
        <div class="container">
            <div class="error-img"><img src="assets/img/normal/error.svg" alt="404 image"></div>
            <div class="error-content">
                <h2 class="error-title">Opp’s that page can’t be found</h2>
                <p class="error-text">It looks like nothing was found at this location. Maybe try one of the links
                    below or a search?</p><a href="index-2" class="as-btn"><i class="fal fa-home me-2"></i>Back
                    To Home</a>
            </div>
        </div>
    </section>
@endsection

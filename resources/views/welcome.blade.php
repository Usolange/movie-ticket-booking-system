<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* CSS to set a fixed height for movie images */
        .movie-image {
            height: 200px; /* You can adjust the height as needed */
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="navigation mt-3 mb-3">
            <a href="" class="btn btn-primary me-2">user login</a>
        </div>

        <div class="header text-center">
            <h1>Welcome Movie Ticket Booking Dashboard</h1>
            <!-- Add your search menu here -->
            <form method="GET" action="{{ route('search_movies') }}">
                <input type="text" name="query" placeholder="Search..." class="form-control w-50 mx-auto mt-3">
                <button type="submit" class="btn btn-primary mt-2">Search</button>
            </form>
        </div>

        <div class="movies">
            <!-- Check if there are any movies to display -->
            @if(count($movies) > 0)
            <div class="row">
                @foreach($movies as $movie)
                <div class="col-md-4">
                    <div class="card mb-3">
                        @if(isset($movie['title']) && isset($movie['year']))
                        <img src="{{ $movie['image']['url'] }}" class="card-img-top movie-image" alt="{{ $movie['title'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['title'] }}</h5>
                            <p class="card-text">Year: {{ $movie['year'] }}</p>
                        </div>
                        @else
                        <div class="card-body">
                            <p class="card-text">Movie information not available</p>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
            @else
            <p>No movies found.</p>
            @endif
        </div>

        <div class="content">
            <!-- Add your content here -->
        </div>

        <div class="footer text-center mb-3">
            <!-- Add your footer content here -->
        </div>
    </div>

    <!-- Add Bootstrap JS link (Optional, but required for some Bootstrap features) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

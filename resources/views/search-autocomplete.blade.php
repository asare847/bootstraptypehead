<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Laravel Typeahead JS Autocomplete Search</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" />
    <style>
        .container {
            max-width: 600px;
        }
    </style>
</head>

<body>
   
    <div class="container mt-5">
        <h3>Search with Bootstrap Typehead</h3>
        <div classs="form-group">
            <input type="text" id="search" name="search" placeholder="Search" class="form-control" />
        </div>
    </div>

    <div class="container px-4 py-5" id="icon-grid">
        <h2 class="pb-2 border-bottom">Users List</h2>
    
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">

        @foreach ($users as $user )   
          <div class="col d-flex align-items-start">
            <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#bootstrap"/></svg>
            <div>
                {{ $user->id }}
              <strong class="fw-bold mb-0">{{ $user->name }}</strong>
              
            </div>
          </div>
        @endforeach
        </div>
      </div>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js">
    </script>
     {{-- Typeshead initialized  --}} 
    <script type="text/javascript">
       //assign the route to route var
        var route = "{{ url('autocomplete-search') }}";

        $('#search').typeahead({
            source: function (query, process) {
                return $.get(route, {
                    query: query
                }, function (data) {
                    return process(data);
                });
            }
        });
    </script>

</body>

</html>
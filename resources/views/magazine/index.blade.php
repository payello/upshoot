@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($magazines as $magazine)
                <div class="col-lg-4">
                    <div class="card">
                        <p class="card-body card-top text-center">
                            Magazine {{ $magazine->id }}
                        </p>

                        <h5 class="card-title">
                            Name: {{ $magazine->name }} - Price: {{ '£' . $magazine->price }}
                        </h5>

                        <h6 class="card-subtitle mb-2 text-muted">
                            Cover: {{ $magazine->cover }}
                        </h6>

                        <p class="card-text">
                            Colour: {{ $magazine->colour }} -
                            Size: {{ $magazine->size }} -
                            Theme: {{ $magazine->theme }}
                        </p>

                        <form class="delete" action="{{ route('magazine.destroy', $magazine->id) }}" method="POST">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>

                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        $(".delete").on("submit", function () {
            return confirm("Do you want to delete this magazine?");
        });
    </script>
@endsection

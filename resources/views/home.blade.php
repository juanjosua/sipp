@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login success</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p style="display:block;">You will be redirected in <span class="countdown">5</span> !</p>
                    <a class="hidden" style="display:none;" href="{{ route('profile') }}">Click here if you are not automatically redirected</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <script>
        // Function to update counters on all elements with class counter
        var doUpdate = function() {
            $('.countdown').each(function() {
            var count = parseInt($(this).html());
            if (count !== 0) {
                $(this).html(count - 1);
            }
            });
        };

        setInterval(doUpdate, 1000);

        var timer = setTimeout(function() {
            window.location='{{ route('profile') }}';
        }, 6000);

        var timer = setTimeout(function() {
            $('p').css("display", "none");
            $('.hidden').css("display", "block");
        }, 5000);


    </script>

@endsection

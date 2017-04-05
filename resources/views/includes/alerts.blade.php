@section('scripts')

<script>
        
        swal(
            'Good Job!',
            '{!! session()->get('success') !!}',
            'success'
        )


    </script>

@if(session()->has('success'))

    <script>
        
        swal(
            'Good Job!',
            '{!! session()->get('success') !!}',
            'success'
        )


    </script>

@endif  


@endsection
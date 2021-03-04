<div>
@section('header-title', 'Daftar Post')
    <div class="container">
        
        <div class="row card-group">

            @foreach ($post as $item)
                <div class="col-sm-4 col-md-4 col-lg-4">
                
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('/') }}{{ $item->post_headerfoto }}" alt="Card image cap image-responsive"  >
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>

                </div>
            @endforeach

            </div>
        </div>

        <div class="row position-absolute top-0 start-50 translate-middle">
            <div class="col-sm-12 col-lg-12">
                <div class="justify-content-center">
                    {{ $post->links() }}
                </div>
            </div>
        </div>

    </div>

@section('after-js')
<script>
       
</script>
@endsection

</div>

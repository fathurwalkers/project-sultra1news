<div>
@section('header-title', 'Daftar Post')
    <div class="container">

        <div class="row">
            <div class="col-sm-3 col-lg-3 mx-auto">
                {{ $post->links() }}
            </div>
        </div>

        <div class="row card-group">

            @foreach ($post as $item)
                <div class="col-sm-4 col-md-4 col-lg-4">
                
                    <div class="card d-flex">
                        <img class="card-img-top" src="{{ asset('/') }}{{ $item->post_headerfoto }}" alt="Card image cap" size="100px">
                        <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($item->post_judul, 35) }}</h5>
                        @foreach ($item->kategori as $items)
                        <div class="my-2 btn-group">
                            <button class="btn btn-sm btn-primary mx-1">{{ $items->kategori_nama }}</button>
                        </div>
                        @endforeach
                        <p class="card-text">{{ Str::limit($item->post_body, 70) }}</p>
                        </div>
                    </div>

                </div>
            @endforeach

            </div>
        </div>

    </div>
    

@section('after-js')
<script>
       
</script>
@endsection

</div>

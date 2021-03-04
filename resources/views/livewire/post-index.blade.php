<div>
@section('header-title', 'Daftar Post')
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12 col-lg-12 mx-auto">
                <div class="row justify-content-center align-self-center">
                    {{ $post->links() }}
                </div>
            </div>
        </div>

        <div class="row card-group">

            @foreach ($post as $item)
                <div class="col-sm-4 col-md-4 col-lg-4">
                
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('/') }}{{ $item->post_headerfoto }}" alt="Card image cap" size="100px">
                        <div class="card-body">
                        <h5 class="card-title">{{ Str::limit($item->post_judul, 35) }}</h5>
                        {{-- @foreach ($post->kategori as $items)
                        {{ $post->kategori->kategori_nama }}
                        @endforeach --}}
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

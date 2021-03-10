<div>
@section('header-title', 'Daftar Post')
    @if (session('berhasil_hapus'))
        <div class="alert alert-success">
            {{ session('berhasil_hapus') }}
        </div>
    @endif
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
                        <div class="container">
                            <div class="row my-2">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="btn-group mx-2">
                                        <a href="{{ route('post-detail', $item->id) }}" class="btn btn-info mx-1">Info</a>
                                        <a href="{{ route('post-edit', $item->id) }}" class="btn btn-success mx-1">Edit</a>
                                        <form action="{{ route('post-delete', $item->id) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-danger mx-1">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

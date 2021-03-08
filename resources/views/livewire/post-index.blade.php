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
                        <div class="container">
                            <div class="row my-2">
                                <div class="col-sm-12 col-lg-12">
                                    <div class="btn-group mx-2">
                                        <button value="{{ intval($item->id) }}" class="info btn btn-primary mx-1">Info</button>
                                        <button  class="btn btn-success mx-1">Edit</button>
                                        <button  class="btn btn-danger mx-1">Delete</button>
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
    // $(document).ready(function(){
    //     $('.info', this).click(function() {
    //         var infoId = $('.info').val($(this));
    //         var textvalue = $(this).('.info').text(infoId);
    //         console.log('http://127.0.0.1:5001/dashboard/post-edit/'+ parseInt(textvalue));
    //         var str1 = "{{ url('/post-edit') }}/" + infoId;
    //         window.location.href = (str1);
    //         Swal.fire({
    //         title: 'Are you sure?',
    //         text: "You won't be able to revert this!",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Yes, delete it!'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 window.location.href = "";
    //             } else {
                    
    //             }
    //         });
    //     });
    // });
</script>
@endsection

</div>

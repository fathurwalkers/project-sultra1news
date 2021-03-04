<div>
@section('header-title', 'Daftar Post')
    {{-- <div class="container"> --}}

        <div class="row">
        
            <div class="col-sm-12 col-lg-12">

                <div class="card">
                    
                    {{-- <div class="card-header">
                                <h4>Simple Table</h4>
                    </div> --}}
                    
                    <div class="card-body">
                        @if($post->count() == 0)
                        <div class="alert alert-danger">
                            <p>Tidak ada Post</p>
                        </div>
                        @endif
                        
                        <div class="table-responsive">
                            
                            <table class="table table-bordered table-lg">
                                    
                                <tbody>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Judul Post</th>
                                        <th>Slug / Link</th>
                                        <th>Post Status</th>
                                        <th>Tanggal Publish</th>
                                        <th>Tanggal Dibuat</th>
                                        <th>Menu Kelola</th>
                                    </tr>

                                    @if($post)
                                    @foreach ($post as $item)
                                    <tr>
                                        <td class="py-1">{{ $loop->iteration }}</td>
                                        <td class="py-1">{{ Str::limit($item->post_judul, 50) }}</td>
                                        <td class="py-1">
                                            <a href="{{ $item->post_slug }}">to Post</a>
                                        </td>
                                        <td class="py-1">{{ $item->post_status }}</td>
                                        <td class="py-1">{{ date('d/m/y', intval($item->post_tanggalpublish)) }}</td>
                                        <td class="py-1">{{ date('d/m/y', strtotime($item->created_at)) }}</td>
                                        <td class="py-1">
                                            <button wire:click="edit({{ $item->id }})" onclick="return confirm('Do you want to go?')" id="editme" class="btn btn-success mx-1">Edit</button>
                                            <button wire:click="info({{ $item->id }})" class="btn btn-info mx-1">Info</button>
                                            <button wire:click="delete({{ $item->id }})" class="btn btn-danger mx-1">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endif
                                    
                                </tbody>

                            </table>

                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-12 col-lg-12">
                                        {{ $post->links() }}
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    {{-- </div> --}}

@section('after-js')
<script>
       
</script>
@endsection

</div>

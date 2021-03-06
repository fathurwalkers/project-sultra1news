<div>
    @section('header-title', 'Tambah Post')
    @section('after-css')
    <script src="https://cdn.tiny.cloud/1/0fzrtif8pxlg6kw3rfi13s2t5xzfaiqpavx3fiqci9ysvmva/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="{{ asset('vendor/editor/editor.css') }}">

    @endsection

    <div class="container">

        <form wire:submit.prevent="addPost" enctype="multipart/form-data">
            @csrf
        <div class="row">

            
            <div class="col-sm-12 col-md-8 col-lg-8">
                
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label><h6>Judul Post : </h6></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control phone-number" wire:model="post_judul">
                            </div>
                        </div>

                        <div class="form-group">
                            <label><h6>Header Foto : </h6></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="file" class="form-control phone-number" wire:model="post_headerfoto">
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Open Form
                                </button> --}}

                                

                            </div>
                        </div>

                        <div class="form-group">
                            <textarea id="txtEditor" wire:model="post_body">
                            </textarea>
                        </div>

                    </div>
                </div>

            </div>



            <div class="col-sm-12 col-md-4 col-lg-4">
                <div class="card">
                    <div class="card-body">

                        <div class="form-group">
                            <label>Date Range Picker</label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <div class="input-group-text">
                                  <i class="fas fa-calendar"></i>
                                </div>
                              </div>
                              <input type="date" class="form-control daterange-cus">
                            </div>  
                        </div>

                        <div class="form-group">
                            <label class="form-label">Kategori : </label>
                            <div class="selectgroup selectgroup-pills">
                                @php
                                $i = 1;
                                $k = 1;
                                $increment = [];
                                @endphp
                                @foreach ($kategori as $cat)
                                    <label class="selectgroup-item">
                                        <input type="checkbox" wire:model="kategori_req.{{ $i++ }}" value="{{ $cat->id }}" class="selectgroup-input" checked="">
                                        {{-- <input type="checkbox" wire:model="increment.{{ $k++ }}" value="2"> --}}
                                        <span class="selectgroup-button">{{ $cat->kategori_nama }}</span>
                                    </label>
                                @endforeach
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <label class="custom-switch mt-2">Post Status : &nbsp;
                                <input type="checkbox" wire:model="post_status" class="custom-switch-input" value="1">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">Publish ?</span>
                            </label>
                        </div>

                        <button class="btn btn-lg btn-primary" id="submitbutton">
                            submit Post
                          </button>
                        
                    </div>
                </div>
            </div>

        </div>
        </form>

    </div>
@section('after-js')
<script src="{{ asset('vendor/editor/editor.js') }}"></script>

<script>
    //     tinymce.init({
    //       selector: 'textarea',
    //       plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    //       toolbar_mode: 'floating',
    //    });

        // window.livewire.on('Gallery', () => {
        //     $('#exampleModal').modal('hide');
        // });
            $(document).ready(function() {
                $("#txtEditor").Editor();
            });

</script>
    
@endsection
</div>

<div>
    @section('header-title', 'Tambah Post')
    @section('after-css')
    <script src="https://cdn.tiny.cloud/1/0fzrtif8pxlg6kw3rfi13s2t5xzfaiqpavx3fiqci9ysvmva/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
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
                                {{-- <input type="file" class="form-control phone-number" wire:model="post_headerfoto"> --}}
                                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                    Open Form
                                </button> --}}

                                <div class="gallery gallery-fw" data-item-height="100">
                                    <div class="gallery-item" data-image="{{ asset('assets/stisla/') }}assets/img/news/img09.jpg" data-title="Image 1" href="assets/img/news/img09.jpg" title="Image 1" style="height: 100px; background-image: url(&quot;assets/img/news/img09.jpg&quot;);"></div>
                                    <div class="gallery-item" data-image="{{ asset('assets/stisla/') }}assets/img/news/img10.jpg" data-title="Image 2" href="assets/img/news/img10.jpg" title="Image 2" style="height: 100px; background-image: url(&quot;assets/img/news/img10.jpg&quot;);"></div>
                                    <div class="gallery-item gallery-more" data-image="{{ asset('assets/stisla/') }}assets/img/news/img08.jpg" data-title="Image 3" href="assets/img/news/img08.jpg" title="Image 3" style="height: 100px; background-image: url(&quot;assets/img/news/img08.jpg&quot;);">
                                      <div style="line-height: 100px;">+2</div>
                                    </div>
                                    <div class="gallery-item gallery-hide" data-image="{{ asset('assets/stisla/') }}assets/img/news/img01.jpg" data-title="Image 4" href="assets/img/news/img01.jpg" title="Image 4" style="height: 100px; background-image: url(&quot;assets/img/news/img01.jpg&quot;);"></div>
                                  </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <textarea wire:model="post_body">
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

<script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
       });

        // window.livewire.on('Gallery', () => {
        //     $('#exampleModal').modal('hide');
        // });

</script>
    
@endsection
</div>

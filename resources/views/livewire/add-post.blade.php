<div>
    @section('header-title', 'Tambah Post')
    @section('after-css')
    <script src="https://cdn.tiny.cloud/1/0fzrtif8pxlg6kw3rfi13s2t5xzfaiqpavx3fiqci9ysvmva/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @endsection

    <div class="container">

        <form wire:submit.prevent="addPost">
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

                        <button type="submit" class="btn btn-primary">Submit</button>
                        
                    </div>
                </div>
            </div>



            <div class="col-sm-12 col-md-12 col-lg-12">
                
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <textarea wire:model="post_body">
                            </textarea>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        </form>

    </div>
@section('after-js')

<script>
    // $(document).ready(function(){
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
       });
// });
</script>
    
@endsection
</div>

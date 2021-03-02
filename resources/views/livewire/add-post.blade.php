<div>
    @section('header-title', 'Tambah Post')
    @section('after-css')
    <script src="https://cdn.tiny.cloud/1/0fzrtif8pxlg6kw3rfi13s2t5xzfaiqpavx3fiqci9ysvmva/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    @endsection

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-8 col-lg-8">
                
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Default Input Text</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Phone Number (US Format)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control phone-number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password Strength</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
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
                            <label>Phone Number (US Format)</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control phone-number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password Strength</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fas fa-lock"></i>
                                </div>
                            </div>
                            <input type="password" class="form-control pwstrength" data-indicator="pwindicator">
                        </div>
                        <div id="pwindicator" class="pwindicator">
                            <div class="bar"></div>
                            <div class="label"></div>
                        </div>
                    </div>
                    </div>
                </div>

            </div>



            <div class="col-sm-12 col-md-12 col-lg-12">
                
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Default Input Text</label>
                            <textarea name="post_body">
                            </textarea>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
@section('after-js')

<script>
    $(document).ready(function(){
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
       });
});
</script>
    
@endsection
</div>

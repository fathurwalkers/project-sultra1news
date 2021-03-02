<div>
    @section('header-title', 'Tambah Post')

    <div class="col-12 col-md-12 col-lg-12">
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

</div>

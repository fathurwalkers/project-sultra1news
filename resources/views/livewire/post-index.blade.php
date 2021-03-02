<div>
    <div class="container">


    <div class="row">
        <div class="col-sm-12 col-lg-12">

            <div class="card">
              <div class="card-header">
                <h4>Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-bordered table-lg">
                    <tbody><tr>
                      <th>#</th>
                      <th>Judul Post</th>
                      <th>Slug / Link</th>
                      <th>Post Status</th>
                      <th>Tanggal Publish</th>
                      <th>Tanggal Dibuat</th>
                      <th>Menu Kelola</th>
                    </tr>

                    @foreach ($post as $item)
                    <tr>
                        <td>1</td>
                        <td>Irwansyah Saputra</td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-secondary">Detail</a>
                        </td>
                      </tr>
                    @endforeach

                  </tbody></table>
                </div>
              </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>

    </div>

</div>
</div>

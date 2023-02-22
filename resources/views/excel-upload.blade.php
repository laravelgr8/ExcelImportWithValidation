<html>
    <head>
        <title>Excel Upload</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
<body>
    <div class="container">
        <div class="col-xl-6">
            
            @if (count($errors) > 0)
                <div class="row">
                    <div class="col-md-8 col-md-offset-1">
                      <div class="alert alert-danger alert-dismissible">
                          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                          <h4><i class="icon fa fa-ban"></i> Error!</h4>
                          @foreach($errors->all() as $error)
                          {{ $error }} <br>
                          @endforeach      
                      </div>
                    </div>
                </div>
                @endif
            
            
            
            <form method="post" action="excel-import" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Excel</label>
                    <input type="file" name="excelfile" class="form-control">
                </div>
                <input type="submit" value="Upload" class="btn btn-info">
            </form>
        </div>
    </div>
</body>
</html>
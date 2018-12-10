@extends('adminlte::page')

@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">公司資料維護</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
          <div class="box-body">
            <div class="form-group">
              <label for="company_name">公司名稱</label>
              <input type="text" class="form-control" id="company_name" placeholder="company_name">
            </div>
            <div class="form-group">
              <label for="company_phone">公司電話</label>
              <input type="number" class="form-control" id="company_phone" placeholder="company_phone">
            </div>
            <div class="form-group has-feedback {{ $errors->has('company_logo') ? 'has-error' : '' }}">
                <label class="btn btn-primary btn-block btn-flat">
                    <input id="upload_img" style="display:none;" type="file" onchange="readURL(this)" targetID="company_logo" accept="image/gif, image/jpeg, image/png" class="form-control" value="{{ old('company_logo') }}">
                    <i class="fa fa-photo"></i> 上傳公司LOGO
                </label>
                <img id="company_logo" src="#" style="display:block; margin:auto;">
            </div>
            {{-- <div class="checkbox">
              <label>
                <input type="checkbox"> Check me out
              </label>
            </div> --}}
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
          </div>
        </form>
      </div>
    </div>
    <div class="col-md-2"></div>
    <!--/.col (right) -->
</div>
<!-- /.row -->
@endsection
@section('js')
<script>
    function readURL(input){
      if(input.files && input.files[0]){
        var imageTagID = input.getAttribute("targetID");
        var reader = new FileReader();
        reader.onload = function (e) {
           var img = document.getElementById(imageTagID);
           img.setAttribute("src", e.target.result)           
        }          
        reader.readAsDataURL(input.files[0]);           
      }           
    }          
</script>
@endsection
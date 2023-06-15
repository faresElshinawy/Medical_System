@if (!$uploadFile)
<div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">File</label>
    <div class="col-sm-10">
        <div class="form-group">
            <div class="custom-control custom-switch">
              <input type="checkbox" class="custom-control-input" id="customSwitch1" wire:click='toggle'>
              <label class="custom-control-label text-info" for="customSwitch1">Upload File</label>
            </div>
          </div>
    </div>
</div>
@endif
@if ($uploadFile)
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">File</label>
        <div class="col-sm-10">
    <div class="input-group">
        <div class="custom-file">
            <input type="file" class="custom-file-input" id="exampleInputFile" name='file'>
            <label class="custom-file-label" for="exampleInputFile">Choose File</label>
        </div>
        <div class="input-group-append">
            <span class="input-group-text">Upload</span>
        </div>
    </div>
    @error('file')
    <span class="text-danger">{{$message}}</span>
    @enderror
    </div>
    </div>
@endif

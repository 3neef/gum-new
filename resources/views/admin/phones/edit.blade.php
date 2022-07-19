@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.phone.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.phones.update", [$phone->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.phone.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $phone->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="brand_id">{{ trans('cruds.phone.fields.brand') }}</label>
                <select class="form-control select2 {{ $errors->has('brand') ? 'is-invalid' : '' }}" name="brand_id" id="brand_id" required>
                    @foreach($brands as $id => $entry)
                        <option value="{{ $id }}" {{ (old('brand_id') ? old('brand_id') : $phone->brand->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('brand'))
                    <div class="invalid-feedback">
                        {{ $errors->first('brand') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.brand_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.phone.fields.state') }}</label>
                @foreach(App\Models\Phone::STATE_RADIO as $key => $label)
                    <div class="form-check {{ $errors->has('state') ? 'is-invalid' : '' }}">
                        <input class="form-check-input" type="radio" id="state_{{ $key }}" name="state" value="{{ $key }}" {{ old('state', $phone->state) === (string) $key ? 'checked' : '' }} required>
                        <label class="form-check-label" for="state_{{ $key }}">{{ $label }}</label>
                    </div>
                @endforeach
                @if($errors->has('state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.state_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="color">{{ trans('cruds.phone.fields.color') }}</label>
                <input class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" type="text" name="color" id="color" value="{{ old('color', $phone->color) }}">
                @if($errors->has('color'))
                    <div class="invalid-feedback">
                        {{ $errors->first('color') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.color_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="battery">{{ trans('cruds.phone.fields.battery') }}</label>
                <input class="form-control {{ $errors->has('battery') ? 'is-invalid' : '' }}" type="number" name="battery" id="battery" value="{{ old('battery', $phone->battery) }}" step="1">
                @if($errors->has('battery'))
                    <div class="invalid-feedback">
                        {{ $errors->first('battery') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.battery_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="space">{{ trans('cruds.phone.fields.space') }}</label>
                <input class="form-control {{ $errors->has('space') ? 'is-invalid' : '' }}" type="number" name="space" id="space" value="{{ old('space', $phone->space) }}" step="1">
                @if($errors->has('space'))
                    <div class="invalid-feedback">
                        {{ $errors->first('space') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.space_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="ram">{{ trans('cruds.phone.fields.ram') }}</label>
                <input class="form-control {{ $errors->has('ram') ? 'is-invalid' : '' }}" type="text" name="ram" id="ram" value="{{ old('ram', $phone->ram) }}">
                @if($errors->has('ram'))
                    <div class="invalid-feedback">
                        {{ $errors->first('ram') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.ram_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="images">{{ trans('cruds.phone.fields.images') }}</label>
                <div class="needsclick dropzone {{ $errors->has('images') ? 'is-invalid' : '' }}" id="images-dropzone">
                </div>
                @if($errors->has('images'))
                    <div class="invalid-feedback">
                        {{ $errors->first('images') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.images_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.phone.fields.notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{!! old('notes', $phone->notes) !!}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price">{{ trans('cruds.phone.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="text" name="price" id="price" value="{{ old('price', $phone->price) }}">
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="serial">{{ trans('cruds.phone.fields.serial') }}</label>
                <input class="form-control {{ $errors->has('serial') ? 'is-invalid' : '' }}" type="text" name="serial" id="serial" value="{{ old('serial', $phone->serial) }}">
                @if($errors->has('serial'))
                    <div class="invalid-feedback">
                        {{ $errors->first('serial') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.phone.fields.serial_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-warning" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedImagesMap = {}
Dropzone.options.imagesDropzone = {
    url: '{{ route('admin.phones.storeMedia') }}',
    maxFilesize: 50, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 50,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
      uploadedImagesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedImagesMap[file.name]
      }
      $('form').find('input[name="images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($phone) && $phone->images)
      var files = {!! json_encode($phone->images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}

</script>
<script>
    $(document).ready(function () {
  function SimpleUploadAdapter(editor) {
    editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
      return {
        upload: function() {
          return loader.file
            .then(function (file) {
              return new Promise(function(resolve, reject) {
                // Init request
                var xhr = new XMLHttpRequest();
                xhr.open('POST', '{{ route('admin.phones.storeCKEditorImages') }}', true);
                xhr.setRequestHeader('x-csrf-token', window._token);
                xhr.setRequestHeader('Accept', 'application/json');
                xhr.responseType = 'json';

                // Init listeners
                var genericErrorText = `Couldn't upload file: ${ file.name }.`;
                xhr.addEventListener('error', function() { reject(genericErrorText) });
                xhr.addEventListener('abort', function() { reject() });
                xhr.addEventListener('load', function() {
                  var response = xhr.response;

                  if (!response || xhr.status !== 201) {
                    return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                  }

                  $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                  resolve({ default: response.url });
                });

                if (xhr.upload) {
                  xhr.upload.addEventListener('progress', function(e) {
                    if (e.lengthComputable) {
                      loader.uploadTotal = e.total;
                      loader.uploaded = e.loaded;
                    }
                  });
                }

                // Send request
                var data = new FormData();
                data.append('upload', file);
                data.append('crud_id', '{{ $phone->id ?? 0 }}');
                xhr.send(data);
              });
            })
        }
      };
    }
  }

  var allEditors = document.querySelectorAll('.ckeditor');
  for (var i = 0; i < allEditors.length; ++i) {
    ClassicEditor.create(
      allEditors[i], {
        extraPlugins: [SimpleUploadAdapter]
      }
    );
  }
});
</script>

@endsection
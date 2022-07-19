@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.swap.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.swaps.update", [$swap->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.swap.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('customer_id') ? old('customer_id') : $swap->customer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.swap.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_1_id">{{ trans('cruds.swap.fields.phone_1') }}</label>
                <select class="form-control select2 {{ $errors->has('phone_1') ? 'is-invalid' : '' }}" name="phone_1_id" id="phone_1_id" required>
                    @foreach($phone_1s as $id => $entry)
                        <option value="{{ $id }}" {{ (old('phone_1_id') ? old('phone_1_id') : $swap->phone_1->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('phone_1'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_1') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.swap.fields.phone_1_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="phone_2_id">{{ trans('cruds.swap.fields.phone_2') }}</label>
                <select class="form-control select2 {{ $errors->has('phone_2') ? 'is-invalid' : '' }}" name="phone_2_id" id="phone_2_id" required>
                    @foreach($phone_2s as $id => $entry)
                        <option value="{{ $id }}" {{ (old('phone_2_id') ? old('phone_2_id') : $swap->phone_2->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('phone_2'))
                    <div class="invalid-feedback">
                        {{ $errors->first('phone_2') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.swap.fields.phone_2_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="price_diffrance">{{ trans('cruds.swap.fields.price_diffrance') }}</label>
                <input class="form-control {{ $errors->has('price_diffrance') ? 'is-invalid' : '' }}" type="text" name="price_diffrance" id="price_diffrance" value="{{ old('price_diffrance', $swap->price_diffrance) }}">
                @if($errors->has('price_diffrance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price_diffrance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.swap.fields.price_diffrance_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.swap.fields.notes') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{!! old('notes', $swap->notes) !!}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.swap.fields.notes_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.swaps.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $swap->id ?? 0 }}');
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
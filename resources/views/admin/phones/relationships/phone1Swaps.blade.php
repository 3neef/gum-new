@can('swap_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.swaps.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.swap.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.swap.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-phone1Swaps">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.swap.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.swap.fields.customer') }}
                        </th>
                        <th>
                            {{ trans('cruds.swap.fields.phone_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.swap.fields.phone_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.swap.fields.price_diffrance') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($swaps as $key => $swap)
                        <tr data-entry-id="{{ $swap->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $swap->id ?? '' }}
                            </td>
                            <td>
                                {{ $swap->customer->name ?? '' }}
                            </td>
                            <td>
                                {{ $swap->phone_1->name ?? '' }}
                            </td>
                            <td>
                                {{ $swap->phone_2->name ?? '' }}
                            </td>
                            <td>
                                {{ $swap->price_diffrance ?? '' }}
                            </td>
                            <td>
                                @can('swap_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.swaps.show', $swap->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('swap_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.swaps.edit', $swap->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('swap_delete')
                                    <form action="{{ route('admin.swaps.destroy', $swap->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('swap_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.swaps.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-phone1Swaps:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
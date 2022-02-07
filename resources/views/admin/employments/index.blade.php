@extends('layouts.admin')
@section('content')
@can('employment_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.employments.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.employment.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.employment.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Employment">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.employment.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.employment.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.employment.fields.phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.employment.fields.email') }}
                        </th>
                        <th>
                            {{ trans('cruds.employment.fields.job') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employments as $key => $employment)
                        <tr data-entry-id="{{ $employment->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $employment->id ?? '' }}
                            </td>
                            <td>
                                {{ $employment->name ?? '' }}
                            </td>
                            <td>
                                {{ $employment->phone ?? '' }}
                            </td>
                            <td>
                                {{ $employment->email ?? '' }}
                            </td>
                            <td>
                                {{ $employment->job ?? '' }}
                            </td>
                            <td>
                                @can('employment_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.employments.show', $employment->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('employment_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.employments.edit', $employment->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('employment_delete')
                                    <form action="{{ route('admin.employments.destroy', $employment->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('employment_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.employments.massDestroy') }}",
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
    pageLength: 25,
  });
  let table = $('.datatable-Employment:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection
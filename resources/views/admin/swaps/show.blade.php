@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.swap.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.swaps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.id') }}
                        </th>
                        <td>
                            {{ $swap->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.customer') }}
                        </th>
                        <td>
                            {{ $swap->customer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.phone_1') }}
                        </th>
                        <td>
                            {{ $swap->phone_1->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.phone_2') }}
                        </th>
                        <td>
                            {{ $swap->phone_2->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.price_diffrance') }}
                        </th>
                        <td>
                            {{ $swap->price_diffrance }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.swap.fields.notes') }}
                        </th>
                        <td>
                            {!! $swap->notes !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.swaps.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
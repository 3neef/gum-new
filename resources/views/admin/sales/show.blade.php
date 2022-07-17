@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sale.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sales.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="invoice-logo">
                <img src="/images/gum-logo.png" class="w-30 h-30" alt="main_logo">
                
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.id') }}
                        </th>
                        <td>
                            {{ $sale->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.customer') }}
                        </th>
                        <td>
                            {{ $sale->customer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.phone') }}
                        </th>
                        <td>
                            @foreach($sale->phones as $key => $phone)
                                <span class="label label-info">{{ $phone->name }}</span>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.operation') }}
                        </th>
                        <td>
                            {{ App\Models\Sale::OPERATION_RADIO[$sale->operation] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.notes') }}
                        </th>
                        <td>
                            {!! $sale->notes !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sale.fields.total_price') }}
                        </th>
                        <td>
                            {{ $sale->total_price }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.sales.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div>
                <div  class="social-links">
                    
                    <span>Gum21th/</span>
                    <i class="fa fa-twitter me-sm-1"></i>
                    <i class="fa fa-telegram me-sm-1"></i>
                    <i class="fab fa-tiktok me-sm-1"></i>
                    <i class="fa fa-instagram me-sm-1"></i>
                    <i class="fa fa-heart me-sm-1"></i>
                </div>
                <div class="whatsapp">
                    <span>0112196778</span>
                    <i class="fa fa-whatsapp me-sm-1"></i>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
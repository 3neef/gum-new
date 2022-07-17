@extends('layouts.mat')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customers.index') }}">
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
                            {{ trans('cruds.customer.fields.id') }}
                        </th>
                        <td>
                            {{ $customer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.name') }}
                        </th>
                        <td>
                            {{ $customer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.address') }}
                        </th>
                        <td>
                            {{ $customer->address }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.phone') }}
                        </th>
                        <td>
                            {{ $customer->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.email') }}
                        </th>
                        <td>
                            {{ $customer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.facebook') }}
                        </th>
                        <td>
                            {{ $customer->facebook }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.code') }}
                        </th>
                        <td>
                            {{ $customer->code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.identification') }}
                        </th>
                        <td>
                            @foreach($customer->identification as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customers.index') }}">
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

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#customer_sales" role="tab" data-toggle="tab">
                {{ trans('cruds.sale.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#customer_swaps" role="tab" data-toggle="tab">
                {{ trans('cruds.swap.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="customer_sales">
            @includeIf('admin.customers.relationships.customerSales', ['sales' => $customer->customerSales])
        </div>
        <div class="tab-pane" role="tabpanel" id="customer_swaps">
            @includeIf('admin.customers.relationships.customerSwaps', ['swaps' => $customer->customerSwaps])
        </div>
    </div>
</div>

@endsection
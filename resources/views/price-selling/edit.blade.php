@extends('layouts.master')

@section('content')
<div class="page-header">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title">Edit Selling Price</h3>
            <ul class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="/">Dashboard</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('price-selling.index') }}">Selling Price</a> 
                </li>
                <li class="breadcrumb-item active">
                    Selling Price
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="{{ route('price-selling.update',$product) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PATCH')
            {{-- product name --}}
            <div class="mb-3">
                <label for="product-name" class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product-name" value="{{ $product->name }}" disabled>
            </div>

            {{-- product category --}}
            <div class="mb-3">
                <label for="product-category" class="form-label">Product Category</label>
                <select class="form-select" disabled>
                    <option value="{{ $product->productCategory->id }}">{{ $product->productCategory->name }}</option>
                </select>
            </div>

            {{-- SKU code --}}
            <div class="mb-3">
                <label for="product-sku" class="form-label">SKU Code</label>
                <input type="text" class="form-control" name="product-sku" value="{{ $product->sku_code }}" disabled>
            </div>

            {{-- product purchase price --}}
            <div class="mb-3">
                <label for="buyingPrice" class="form-label">Product Buying Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                    <input type="text" class="form-control" name="buyingPrice" value="{{ ($product->priceBuying->last()) ? $product->priceBuying->last()->price : ""}}"  id="priceBuying" readonly>
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            {{-- margin category --}}
            <div class="mb-3">
                <label for="margin_category" class="form-label">Margin Category</label>
                <select class="form-select" name="margin_category" id="marginCategory" required>
                    
                    @if ($product->priceSelling)
                        <option value="percent" {{ ($product->priceSelling->margin_category == 'percent') ? "selected" : ""}}>percent</option>
                        <option value="nominal" {{ ($product->priceSelling->margin_category == 'nominal') ? "selected" : ""}}>nominal</option>
                        <option value="sellingPrice" {{ ($product->priceSelling->margin_category == 'sellingPrice') ? "selected" : ""}}>selling price</option>
                    @else
                        <option selected><< Select Margin Category >></option>
                        <option value="percent">percent</option>
                        <option value="nominal">nominal</option>
                        <option value="sellingPrice">selling price</option>
                    @endif
                    
                </select>
            </div>

            {{-- margin value --}}
            <div class="mb-3">
                <label for="margin_value" class="form-label">Margin Value</label>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="margin_value" value="{{ ($product->priceSelling) ? $product->priceSelling->margin_value : "" }}" id="marginValue" required>
                </div>
            </div>

            {{-- count button --}}
            <div class="mb-3">
                <div class="d-grid gap-2">
                    <button onclick="count();" class="btn btn-primary" type="button">Count</button>
                  </div>
            </div>
            
            {{-- selling price --}}
            <div class="mb-3">
                <label for="price-buying" class="form-label">Selling Price</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" id="priceSelling" value="{{ ($product->priceSelling) ? $product->priceSelling->selling_price : ""}}" disabled>
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button type="submit" class="btn btn-primary" data-bs-toggle="modal">Save</button>
            </div>
        </form>

        </div>
        <div class="col">
            <div class="image">
                <img src="assets/img/product/matrix-nvr.jpg" alt="">
            </div>
            
        </div>
</div>
@endsection

@section('script')
<script>
    function count(){
        var priceBuying = parseFloat(document.getElementById('priceBuying').value);
        var marginValue = parseFloat(document.getElementById('marginValue').value);

        var marginCategory = document.getElementById('marginCategory').value;

        if(marginCategory === 'percent')
        {
            document.getElementById('priceSelling').value = priceBuying+(priceBuying*marginValue/100);
        }
        if(marginCategory === 'nominal')
        {
            document.getElementById('priceSelling').value = priceBuying+marginValue;
        }
        if(marginCategory === 'sellingPrice')
        {
            document.getElementById('priceSelling').value = marginValue;
        }
    }
</script>
@endsection
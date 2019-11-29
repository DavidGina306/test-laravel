@extends('layouts.app', ['activePage' => 'user-management', 'titlePage' => __('User Management')])

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <form method="post" action="{{ route('products.store') }}" autocomplete="off" class="form-horizontal">
            @csrf
            @method('post')

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Adicionar Produtos') }}</h4>
                <p class="card-category"></p>
              </div>
              <div class="card-body ">
                <div class="row">
                    {{-- <div class="col-md-12 text-right">
                        <a href="{{ route('user.index') }}" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                    </div> --}}
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Nome') }}</label>
                  <div class="col-sm-9">
                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}" required="true" aria-required="true"/>
                      @if ($errors->has('name'))
                        <span id="name-error" class="error text-danger" for="input-name">{{ $errors->first('name') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Marca') }}</label>
                  <div class="col-sm-9">
                    <div class="form-group{{ $errors->has('marca') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('marca') ? ' is-invalid' : '' }}" name="marca" id="input-marca" type="marca" placeholder="{{ __('Marca') }}" value="{{ old('marca') }}" required />
                      @if ($errors->has('marca'))
                        <span id="marca-error" class="error text-danger" for="input-marca">{{ $errors->first('marca') }}</span>
                      @endif
                    </div>
                  </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary pull-right">{{ __('salvar') }}</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

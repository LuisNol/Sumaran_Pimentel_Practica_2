<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{ old('nombre', $actividad?->nombre) }}" id="nombre" placeholder="Nombre">
            {!! $errors->first('nombre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="dia" class="form-label">{{ __('Dia') }}</label>
            <input type="text" name="dia" class="form-control @error('dia') is-invalid @enderror" value="{{ old('dia', $actividad?->dia) }}" id="dia" placeholder="Dia">
            {!! $errors->first('dia', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="horario" class="form-label">{{ __('Horario') }}</label>
            <input type="text" name="horario" class="form-control @error('horario') is-invalid @enderror" value="{{ old('horario', $actividad?->horario) }}" id="horario" placeholder="Horario">
            {!! $errors->first('horario', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
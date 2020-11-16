
@csrf

<div class="form-group">
    <input type="text" class="form-control @error('cru') is-invalid @enderror"
    name="cru" placeholder="Rentrez un cru" value="{{ old('cru') ?? $vin->cru ?? '' }}">
    @error('cru')
        <div class="invalid-feedback">
            {{ $errors->first('cru') }}
        </div>
    @enderror
</div>

<div class="form-group">
    <input type="text" class="form-control @error('annee') is-invalid @enderror"
    name="annee" placeholder="Rentrez un annee"  value="{{ old('annee') ?? $vin->annee ?? '' }}">
    @error('annee')
        <div class="invalid-feedback">
            {{ $errors->first('annee') }}
        </div>
    @enderror
</div>

<div class="form-group">
    <input type="text" class="form-control @error('degre') is-invalid @enderror"
    name="degre" placeholder="Rentrez un degre"  value="{{ old('degre') ?? $vin->degre ?? '' }}">
    @error('degre')
        <div class="invalid-feedback">
            {{ $errors->first('degre') }}
        </div>
    @enderror
</div>


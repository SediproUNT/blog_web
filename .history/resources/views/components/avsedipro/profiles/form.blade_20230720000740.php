<div class="row">
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="apellidoP-column">Apellido Paterno</label>
            <input type="text" id="apellidoP" class="form-control"
                placeholder="Apellido Paterno" name="apellidoP">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="apellidoM-column">Apellido Materno</label>
            <input type="text" id="apellidoM" class="form-control"
                placeholder="Apellido Materno" name="apellidoM">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="name-column">Nombres</label>
            <input type="text" id="first-name-column" class="form-control"
                placeholder="Nombres" name="name">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="dni-column">DNI</label>
            <input type="text" id="dni" class="form-control"
                placeholder="DNI" name="dni" pattern="[0-9]+" maxlength="8">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="email-column">Correo Electronico</label>
            <input type="email" id="email" class="form-control"
                placeholder="Correo Electronico" name="email">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="password-column">Contraseña</label>
            <input type="password" id="password" class="form-control"
                placeholder="Contraseña" name="password">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="celular-column">Celular</label>
            <input type="text" id="celular" class="form-control"
                placeholder="Celular" name="celular" pattern="[0-9]+" maxlength="9">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="city-column">City</label>
            <input type="text" id="city-column" class="form-control"
                placeholder="City" name="city-column">
        </div>
    </div>
    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="city-column">City</label>
            <input type="text" id="city-column" class="form-control"
                placeholder="City" name="city-column">
        </div>
    </div>

    <div class="col-md-6 col-12">
        <div class="form-group">
            <label for="country-floating">Country</label>
            <input type="text" id="country-floating" class="form-control"
                name="country-floating" placeholder="Country">
        </div>
    </div>
    {{-- <div class="form-group col-12">
        <div class='form-check'>
            <div class="checkbox">
                <input type="checkbox" id="checkbox5"
                    class='form-check-input' checked>
                <label for="checkbox5">Remember Me</label>
            </div>
        </div>
    </div> --}}
    <div class="col-12 d-flex justify-content-end">
        <button type="submit"
            class="btn btn-primary me-1 mb-1">Submit</button>
        <button type="reset"
            class="btn btn-light-secondary me-1 mb-1">Reset</button>
    </div>
</div>

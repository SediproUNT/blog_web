@extends('layouts.dashboard.app')

@section('titulo')
    Sediprano
@endsection

@section('contenido')
    <div class="row">
        <div class="col-md-12">
            <h1>Sediprano</h1>

            <script src="assets/static/js/initTheme.js"></script>
            <div id="app">
                
            </div>
            <script src="assets/static/js/components/dark.js"></script>
            <script src="assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>


            <script src="assets/compiled/js/app.js"></script>



            <script src="assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
            <script src="assets/static/js/pages/simple-datatables.js"></script>

        </div>
    </div>
@endsection

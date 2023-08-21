
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<div class="container">
    <div class="row justify-content-center" style="margin-top:100px;">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ ucfirst(config('multiauth.prefix')) }} Dashboard</div>
                <div class="card-body">
                    @include('multiauth::message')
                    You are logged in to {{ config('multiauth.prefix') }} side!
                </div>
            </div>
        </div>
    </div>
</div>

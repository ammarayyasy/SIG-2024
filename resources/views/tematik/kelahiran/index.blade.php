@extends('layouts.main')

@section('content')
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">kelahiran</div>
        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id="provinceSelect">
            <option selected>Pilih provinsi</option>
            @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
            @endforeach
        </select>
    </div>
</header>

<script>
    document.getElementById('provinceSelect').addEventListener('change', function() {
        var provinceId = this.value;
        if (provinceId) {
            window.location.href = '/kelahiran/' + provinceId;
        }
    });
</script>
@endsection

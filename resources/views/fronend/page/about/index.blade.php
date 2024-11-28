@extends('fronend.layot.app')

@section('content')
    <!-- About-->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
                <h1 class="mb-0">
                    {{$data['nama']}}
                </h1>
            <div class="subheading mb-5">
               {{$data['alamat'] .' Telepon :'. $data['telp']}}
                <a href="mailto:name@email.com"> {{$data['email']}}</a>
            </div>
                <p class="lead mb-5">1.Orang sukses juga pernah bodoh, malas dan gagal. Namun mereka tetap terus bergerak dan mencoba.</p>
                <p class="lead mb-5">2.Gagal itu biasa, yang penting bangkrutnya jangan.</p>
            <div class="social-icons">
                 @foreach ($data['item'] as $key => $val)
                    <a class="social-icon" href="{{$val['link']}}"><i class="{{$val['icon']}}"></i></a>
                 @endforeach
            </div>
        </div>
    </section>
@endsection

@push('styles')

@endpush

@push('scrip')

@endpush
@extends('fronend.layot.app')

@section('content')
   <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">
                        {{$data['']}}
                    </h2>
                    <div class="subheading mb-3">hasil design</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <img src="boo.jpg" alt="Deskripsi Gambar">
                    </ul>
                    <div class="subheading mb-3">Workflow</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Design Grafis
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Browser Testing & Debugging
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Cross Functional Teams
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Agile Development & Scrum
                        </li>
                    </ul>
                </div>
            </section>
@endsection

@push('styles')

@endpush

@push('scrip')

@endpush

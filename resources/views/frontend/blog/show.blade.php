@extends('master.frontend')
@section('title',$blog->translate(app()->getLocale())->meta_title ?? '')
@section('styles')
    <style>
        .thumbnail-box {
            position: relative;
            cursor: pointer;
        }

        .thumbnail {
            width: 100%;
            height: 200px;
        }
    </style>

@endsection
@section('front')
    <section class="project-info-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="project-info-img-box">
                        <img src="{{ asset($blog->photo) }}"
                             alt="{{ $blog->translate(app()->getLocale())->alt ?? '' }}"/>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="colx-xl-12">
                    <div class="project-description-box">
                        <h2>{{ $blog->translate(app()->getLocale())->name ?? '' }}</h2>
                        <p>{!! $blog->translate(app()->getLocale())->description ?? '' !!}</p>
                    </div>
                </div>
            </div>
            <div style="gap:40px 0" class="row">
                @foreach ($blog->photos as $photo)
                    <div class="col-xl-3">
                        <div class="thumbnail-box">
                            <a
                                class="lightbox-image"
                                data-fancybox="gallery"
                                href="{{ asset($photo->photo) }}"
                            >
                                <img
                                    src="{{ asset($photo->photo) }}"
                                    alt="{{ $blog->translate(app()->getLocale())->alt ?? '' }}"
                                    class="thumbnail"
                                />
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        // Initialize Lightbox2
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });
    </script>

@endsection

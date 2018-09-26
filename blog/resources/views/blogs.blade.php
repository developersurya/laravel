@extends('/layouts/app')
@section('content')
    @isset ( $blog )
        @if ( $blog  == "")
            <div class="alert alert-success" role="alert">
                No Blog data found !
            </div>
        @endif


        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    @foreach ($blog as $blog_)
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex">
                                <i class="icon-screen-desktop m-auto text-primary"></i>
                            </div>
                            <h3>{{$blog_->blog_title}}</h3>
                            <p class="lead mb-0">{{$blog_->blog_content}}</p>
                        </div>
                    </div>
                @endforeach
                        <div class="row ">
                        {{ $blog->links() }}
                        </div>
                </div>
            </div>
        </section>
    @endisset
@stop
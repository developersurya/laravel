@extends('layouts/app')
@section('content')


    <div class="container">

        <div class="row">
        <div class="col-xl-9 mx-auto">
            <h3 class="mb-5">Go ahead with your own form</h3>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            @isset ( $update )
                @if ( $update  == 1)
                    <div class="alert alert-success" role="alert">
                        Blog update success !
                    </div>
                @endif
            @endisset
            <form method="post" action="{{URL::to('/store-blog')}}">
                <div class="form-group">
                    <label for="exampleInputEmail1">Blog Title</label>
                    <input type="text" class="form-control"  placeholder="" name="blog_title">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your blog with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Blog Content</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="blog_content">
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}" >
                <div class="form-group">
                    <label for="exampleInputPassword1">Date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="" name="blog_date">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>
@endsection
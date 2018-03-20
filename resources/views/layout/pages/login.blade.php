@extends('layout.index')
@section('content')
    <section id="page-title">

        <div class="container clearfix">
            <h1>Login</h1>
        </div>

    </section><!-- #page-title end -->
    <div style="display: flex; justify-content: center; align-items: center; padding: 25px">
        <div class="col-md-6">
            <form novalidate id="contactForm" class="reply-form" action="{{route('login.autobot')}}" method="post">
                <div class="form-group">
                    <div></div>
                    <label style="display: flex; align-items: center" for="email"><i
                                class="i-plain icon-user"></i> <span>Email</span></label>

                    <input class=" sm-form-control input-block-level" type="email" name="email" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <div></div>
                    <label style="display: flex; align-items: center" for="password">
                        <i class="i-plain icon-lock"></i> <span>Password</span></label>
                    <input class=" sm-form-control input-block-level" type="password" name="password" id="password" placeholder="********">
                </div>
                <div class="form-elem">
                    <button type="submit" class="button button-small button-3d nomargin">Login</button>
                </div>
            </form>
        </div>
    </div>
@stop
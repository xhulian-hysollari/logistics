<form novalidate id="contactForm" class="reply-form form-inline" action="{{route('login.user')}}" method="post">
    <div class="default-inp form-elem">
        <i class="fa fa-user"></i>

        <input type="email" name="email" id="email" placeholder="{{trans('register.email')}}">
    </div>
    <div class="default-inp form-elem">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="{{trans('register.password')}}">
    </div>
    <div class="form-elem">
        <button type="submit" class="btn btn-success btn-default">{{trans('navigation.login')}}</button>
    </div>
</form>
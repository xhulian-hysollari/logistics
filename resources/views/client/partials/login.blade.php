<form novalidate id="contactForm" class="reply-form form-inline" action="{{route('login.autobot')}}" method="post">
    <div class="default-inp form-elem">
        <i class="fa fa-user"></i>
        <input type="email" name="email" id="email" placeholder="Email">
    </div>
    <div class="default-inp form-elem">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="********">
    </div>
    <div class="form-elem">
        <button type="submit" class="btn btn-success btn-default">Login</button>
    </div>
</form>
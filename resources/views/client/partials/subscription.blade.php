<div class="col-xs-12 col-md-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title">
                {{$plan->name}}</h3>
        </div>
        <div class="panel-body">
            <div class="the-price">
                <h1>
                    {{$plan->price}}<span class="subscript">/mo</span></h1>
                <small>{{$plan->trial}}</small>
            </div>
            <table class="table">

            </table>
        </div>
        <div class="panel-footer">
            <button type="button" class="btn btn-success">Sign Up</button>
        </div>
    </div>
</div>
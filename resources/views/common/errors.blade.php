<br style="clear:both" />
<div class="col-md-1"></div>
<div class="col-md-8">
    <div class="panel panel-danger">
        <div class="panel-heading">
            <h3 class="panel-title">Submission Errors</h3>
        </div>
        <div class="panel-body">
            <ul class="" style="list-style:none">
            @foreach($errors->all() as $error)
                <li class="alert alert-danger "> {{$error}} <button class="close" data-dismiss="alert"> <i class="fa fa-lg fa-times-circle"></i> </button></li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
<br style="clear:both" />
@extends('layouts.app')

@section('css')

@endsection

@section('content')
    <div class="content-heading">
        <div>Livro
            <small>Cadastro</small>
        </div>
    </div>

    <div class="card b">
        <div class="card-body bb">
            <div class="clearfix">
                <div class="float-left">
                    <button class="btn btn-secondary btn-oval" type="button">
                        <em class="fa fa-play fa-fw text-muted"></em>
                        <span>Favorito</span>
                    </button>
                    <button class="btn btn-secondary btn-oval" type="button">
                        <em class="fa fa-pause fa-fw text-muted"></em>
                        <span>Desejado</span>
                    </button>
                    <button class="btn btn-secondary btn-oval" type="button">
                        <em class="fa fa-pause fa-fw text-muted"></em>
                        <span>Tenho</span>
                    </button>
                    <button class="btn btn-secondary btn-oval" type="button">
                        <em class="fa fa-pause fa-fw text-muted"></em>
                        <span>Troco</span>
                    </button>
                    <button class="btn btn-secondary btn-oval" type="button">
                        <em class="fa fa-pause fa-fw text-muted"></em>
                        <span>Meta</span>
                    </button>
                    <button class="btn btn-secondary btn-oval" type="button">
                        <em class="fa fa-pause fa-fw text-muted"></em>
                        <span>Emprestado</span>
                    </button>
                </div>
                <div class="float-right">
                    <button class="btn btn-danger btn-oval" type="button">Excluir</button>
                </div>
            </div>

            <div class="card-body bb">
                <div class="d-flex align-items-center">
                    <div class="w-100">
                        <div class="progress progress-xs m-0">
                            <div class="progress-bar bg-info" style="width:48%"></div>
                        </div>
                    </div>
                    <div class="wd-xxs text-right">
                        <div class="text-bold text-muted">48%</div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h4>Sinopse</h4>
                <p>Nam eget risus tellus. Vestibulum pretium mollis ligula, at ultrices quam egestas et. Sed mattis tincidunt ligula, ac porttitor lectus porttitor condimentum. Ut et ligula ante, nec mollis lacus. Aliquam erat volutpat. Aliquam auctor
                    diam ut urna lacinia faucibus. Proin est sapien, convallis non hendrerit nec, laoreet ut ipsum. Aenean vehicula, nulla vel pharetra accumsan, elit risus pretium arcu, nec ultrices urna ligula vel nunc. Cras porttitor orci eget
                    nibh pharetra mollis.</p>
                <p>Maecenas at porta purus. Ut eu aliquam orci. Praesent in libero at neque gravida venenatis auctor nec arcu.</p>
                <p class="text-right">
                    <button class="btn btn-secondary" type="button">View all documents</button>
                </p>
            </div>

            <div class="card-body">
                <p>
                    <small class="float-left">Activity over time</small>
                    <span class="text-center" data-sparkline="" data-type="line" data-height="100" data-width="100%" data-line-width="3" data-line-color="#23b7e5" data-chart-range-min="0" data-spot-color="#888" data-min-spot-color="#23b7e5" data-max-spot-color="#23b7e5" data-fill-color="#e5f2fa" data-highlight-line-color="#fff" data-spot-radius="5" data-values="2,4,5,6,10,7,8,5,7,7,11,8,6,9,11,9,13,14,12,16" data-resize="true"><canvas width="1053" height="100" style="display: inline-block; width: 1053.33px; height: 100px; vertical-align: top;"></canvas></span>
                </p>
            </div>

            <div class="card-body">
                <div class="row text-center">
                    <div class="col-4">
                        <div class="inline" data-sparkline="" data-values="20,80" data-type="pie" data-height="60" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#23b7e5&quot;]"></div>
                        <p class="mt-3">Homens</p>
                    </div>
                    <div class="col-4">
                        <div class="inline" data-sparkline="" data-values="60,40" data-type="pie" data-height="60" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#27c24c&quot;]"></div>
                        <p class="mt-3">Mulheres</p>
                    </div>
                    <div class="col-4">
                        <div class="inline" data-sparkline="" data-values="90,10" data-type="pie" data-height="60" data-slice-colors="[&quot;#edf1f2&quot;, &quot;#ff902b&quot;]"></div>
                        <p class="mt-3">Files</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="card card-default">
        <div class="card-header">
        <div class="px-2 float-right badge badge-danger">5</div>
        <div class="px-2 mr-2 float-right badge badge-success">12</div>
        <div class="card-title">Team messages</div>
        </div>
        <!-- START list group-->
        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 180px;"><div class="list-group" data-height="180" data-scrollable="" style="overflow: hidden; width: auto; height: 180px;">
        <!-- START list group item-->
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <img class="align-self-start mx-2 circle thumb32" src="img/user/02.jpg" alt="Image">
                <div class="media-body text-truncate">
                    <p class="mb-1">
                    <strong class="text-primary">
                        <span class="circle bg-success circle-lg text-left"></span>
                        <span>Catherine Ellis</span>
                    </strong>
                    </p>
                    <p class="mb-1 text-sm">Cras sit amet nibh libero, in gravida nulla. Nulla...</p>
                </div>
                <div class="ml-auto">
                    <small class="text-muted ml-2">2h</small>
                </div>
            </div>
        </div>
        <!-- END list group item-->
        <!-- START list group item-->
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <img class="align-self-start mx-2 circle thumb32" src="img/user/03.jpg" alt="Image">
                <div class="media-body text-truncate">
                    <p class="mb-1">
                    <strong class="text-primary">
                        <span class="circle bg-success circle-lg text-left"></span>
                        <span>Jessica Silva</span>
                    </strong>
                    </p>
                    <p class="mb-1 text-sm">Cras sit amet nibh libero, in gravida nulla. Nulla...</p>
                </div>
                <div class="ml-auto">
                    <small class="text-muted ml-2">3h</small>
                </div>
            </div>
        </div>
        <!-- END list group item-->
        <!-- START list group item-->
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <img class="align-self-start mx-2 circle thumb32" src="img/user/09.jpg" alt="Image">
                <div class="media-body text-truncate">
                    <p class="mb-1">
                    <strong class="text-primary">
                        <span class="circle bg-danger circle-lg text-left"></span>
                        <span>Jessie Wells</span>
                    </strong>
                    </p>
                    <p class="mb-1 text-sm">Cras sit amet nibh libero, in gravida nulla. Nulla...</p>
                </div>
                <div class="ml-auto">
                    <small class="text-muted ml-2">4h</small>
                </div>
            </div>
        </div>
        <!-- END list group item-->
        <!-- START list group item-->
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <img class="align-self-start mx-2 circle thumb32" src="img/user/12.jpg" alt="Image">
                <div class="media-body text-truncate">
                    <p class="mb-1">
                    <strong class="text-primary">
                        <span class="circle bg-danger circle-lg text-left"></span>
                        <span>Rosa Burke</span>
                    </strong>
                    </p>
                    <p class="mb-1 text-sm">Cras sit amet nibh libero, in gravida nulla. Nulla...</p>
                </div>
                <div class="ml-auto">
                    <small class="text-muted ml-2"> 1d</small>
                </div>
            </div>
        </div>
        <!-- END list group item-->
        <!-- START list group item-->
        <div class="list-group-item list-group-item-action">
            <div class="media">
                <img class="align-self-start mx-2 circle thumb32" src="img/user/10.jpg" alt="Image">
                <div class="media-body text-truncate">
                    <p class="mb-1">
                    <strong class="text-primary">
                        <span class="circle bg-danger circle-lg text-left"></span>
                        <span>Michelle Lane</span>
                    </strong>
                    </p>
                    <p class="mb-1 text-sm">Mauris eleifend, libero nec cursus lacinia...</p>
                </div>
                <div class="ml-auto">
                    <small class="text-muted ml-2"> 2d</small>
                </div>
            </div>
        </div>
        <!-- END list group item-->
        </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 104.18px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
        <!-- END list group-->
        <!-- START card footer-->
        <div class="card-footer">
        <div class="input-group">
            <input class="form-control form-control-sm" type="text" placeholder="Search message ..">
            <span class="input-group-btn">
                <button class="btn btn-secondary btn-sm" type="submit"><i class="fa fa-search"></i></button>
            </span>
        </div>
        </div>
        <!-- END card-footer-->
    </div>
@endsection

@section('js')
    <!-- SLIMSCROLL-->
    <script src="{{ asset('vendor/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- SPARKLINE-->
    <script src="{{ asset('vendor/jquery-sparkline/jquery.sparkline.js') }}"></script>
@endsection

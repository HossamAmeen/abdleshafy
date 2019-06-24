@extends('admin.panel')

@section('content')

    <section id="main-container">

        <!--Page main section start-->
        <section id="min-wrapper">
            <div id="main-content">
                <div class="container-fluid">

                    <!-- Main Content Element  Start-->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">إضافة مقال</h3>
                                </div>

                                <div class="panel-body">
                                    <form id="defaultForm" method="post" class="form-horizontal ls_form" action="{{url('admin/blog')}}"
                                          data-bv-message="This value is not valid"
                                          data-bv-feedbackicons-valid="fa fa-check"
                                          data-bv-feedbackicons-invalid="fa fa-bug"
                                          data-bv-feedbackicons-validating="fa fa-refresh"
                                          enctype="multipart/form-data"
                                    >
                                        {{csrf_field()}}
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">عنوان المقال*</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="ar_title"
                                                       data-bv-message="The username is not valid"
                                                       required data-bv-notempty-message="The username is required and cannot be empty"
                                                       value="{{ old('ar_title')}}"
                                                       data-bv-stringlength="true" data-bv-stringlength-min="6" data-bv-stringlength-max="30" data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"
                                                       data-bv-different="true" data-bv-different-field="password" data-bv-different-message="The username and password cannot be the same as each other"

                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-3 control-label">صاحب المقال</label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" name="owner"
                                                       data-bv-message="The username is not valid"
                                                        data-bv-notempty-message="The username is required and cannot be empty"
                                                       value="{{ old('owner')}}"
                                                       data-bv-stringlength="true" data-bv-stringlength-min="6" data-bv-stringlength-max="30" data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"
                                                       data-bv-different="true" data-bv-different-field="password" data-bv-different-message="The username and password cannot be the same as each other"

                                                />
                                            </div>
                                        </div>  
                                       
                                    <label class="col-lg-3 control-label">وصف المقال</label><br>
                                    <div class="panel-heading">
                                       
                                        <ul class="panel-control">
                                            <li><a class="minus" href="javascript:void(0)"><i class="fa fa-minus"></i></a></li>
                                            <li><a class="refresh" href="javascript:void(0)"><i class="fa fa-refresh"></i></a></li>
                                            <li><a class="close-panel" href="javascript:void(0)"><i class="fa fa-times"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="panel-body no-padding" >
                                        <textarea class="summernote" name="description" id="demo" >
                                         
                                        </textarea>
                                    </div><br>

                                        <div class="row ls_divider last">
                                            <div class="form-group">
                                                <label class="col-md-2 control-label"> إضافة صورة (يفضل أبعاد 800 * 600 )</label>

                                                <div class="col-md-10 ls-group-input">
                                                    <input id="file-3" type="file" multiple="true" name="img">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-9 col-lg-offset-3">
                                                <button type="submit" class="btn btn-primary">إضافه</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Main Content Element  End-->

                </div>
            </div>



        </section>
        <!--Page main section end -->
        <!--Right hidden  section start-->
        <section id="right-wrapper">
            <!--Right hidden  section close icon start-->
            <div class="close-right-wrapper">
                <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
            </div>
            <!--Right hidden  section close icon end-->

            <!--Tab navigation start-->
            <ul class="nav nav-tabs" id="setting-tab">
                <li class="active"><a href="#chatTab" data-toggle="tab"><i class="fa fa-comment-o"></i> Chat</a></li>
                <li><a href="#settingTab" data-toggle="tab"><i class="fa fa-cogs"></i> Setting</a></li>
            </ul>
            <!--Tab navigation end -->

            <!--Tab content start-->
            <div class="tab-content">
                <div class="tab-pane active" id="chatTab">
                    <div class="nano">
                        <div class="nano-content">
                            <div class="chat-group chat-group-fav">
                                <h3 class="ls-header">Favorites</h3>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-online"></span>
                                    Catherine J. Watkins
                                    <span class="badge badge-lightBlue">1</span>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-idle"></span>
                                    Fernando G. Olson
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-busy"></span>
                                    Susan J. Best
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-offline"></span>
                                    Brandon S. Young
                                </a>
                            </div>
                            <div class="chat-group chat-group-coll">
                                <h3 class="ls-header">Colleagues</h3>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-offline"></span>
                                    Brandon S. Young
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-idle"></span>
                                    Fernando G. Olson
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-online"></span>
                                    Catherine J. Watkins
                                    <span class="badge badge-lightBlue">3</span>
                                </a>

                                <a href="javascript:void(0)">
                                    <span class="user-status is-busy"></span>
                                    Susan J. Best
                                </a>

                            </div>
                            <div class="chat-group chat-group-social">
                                <h3 class="ls-header">Social</h3>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-online"></span>
                                    Catherine J. Watkins
                                    <span class="badge badge-lightBlue">5</span>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-busy"></span>
                                    Susan J. Best
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="chat-box">
                        <div class="chat-box-header">
                            <h5>
                                <span class="user-status is-online"></span>
                                Catherine J. Watkins
                            </h5>
                        </div>

                        <div class="chat-box-content">
                            <div class="nano nano-chat">
                                <div class="nano-content">

                                    <ul>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Are you here?</p>
                                            <span class="time">10:10</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Whohoo!</p>
                                            <span class="time">10:12</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>This message is pre-queued.</p>
                                            <span class="time">10:15</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Do you like it?</p>
                                            <span class="time">10:20</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>This message is pre-queued.</p>
                                            <span class="time">11:00</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Hi, you there ?</p>
                                            <span class="time">12:00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="chat-write">
                        <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
                    </div>
                </div>

                <div class="tab-pane" id="settingTab">

                    <div class="setting-box">
                        <h3 class="ls-header">Account Setting</h3>
                        <div class="setting-box-content">
                            <ul>
                                <li><span class="pull-left">Online status: </span><input type="checkbox" class="js-switch-red" checked/></li>
                                <li><span class="pull-left">Show offline contact: </span><input type="checkbox" class="js-switch-light-blue" checked/></li>
                                <li><span class="pull-left">Invisible mode: </span><input class="js-switch" type="checkbox" checked></li>
                                <li><span class="pull-left">Log all message:</span><input class="js-switch-light-green" type="checkbox" checked></li>
                            </ul>
                        </div>
                    </div>
                    <div class="setting-box">
                        <h3 class="ls-header">Maintenance</h3>
                        <div class="setting-box-content">
                            <div class="easy-pai-box">
                                <span class="easyPieChart" data-percent="90">
                                    <span class="easyPiePercent"></span>
                                </span>
                            </div>
                            <div class="easy-pai-box">
                                <button class="btn btn-xs ls-red-btn js_update">Update Data</button>
                            </div>
                        </div>
                    </div>

                    <div class="setting-box">
                        <h3 class="ls-header">Progress</h3>
                        <div class="setting-box-content">

                            <h5>File uploading</h5>
                            <div class="progress">
                                <div class="progress-bar ls-light-blue-progress six-sec-ease-in-out"
                                     aria-valuetransitiongoal="10"></div>
                            </div>

                            <h5>Plugin setup</h5>
                            <div class="progress progress-striped active">
                                <div class="progress-bar six-sec-ease-in-out ls-light-green-progress"
                                     aria-valuetransitiongoal="20"></div>
                            </div>
                            <h5>Post New Article</h5>
                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-yellow-progress six-sec-ease-in-out"
                                     aria-valuetransitiongoal="80"></div>
                            </div>
                            <h5>Create New User</h5>
                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-red-progress six-sec-ease-in-out"
                                     aria-valuetransitiongoal="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Tab content -->
        </section>
        <!--Right hidden  section end -->
        <div id="change-color">
            <div id="change-color-control">
                <a href="javascript:void(0)"><i class="fa fa-magic"></i></a>
            </div>
            <div class="change-color-box">
                <ul>
                    <li class="default active"></li>
                    <li class="red-color"></li>
                    <li class="blue-color"></li>
                    <li class="light-green-color"></li>
                    <li class="black-color"></li>
                    <li class="deep-blue-color"></li>
                </ul>
            </div>
        </div>
    </section>
@endsection
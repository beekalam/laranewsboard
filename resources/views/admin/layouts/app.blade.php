<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>title</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href=""/>
    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/AdminLTE.min.css') }}">
    <!-- AdminLTE Skins -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/_all-skins.min.css') }}">
    <!-- Datatables -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('assets/admin/plugins/datatables/jquery.dataTables_themeroller.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/icheck/square/purple.css') }}">
    <!-- Page -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/pace/pace.min.css') }}">
    <!-- Tags Input -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/tagsinput/jquery.tagsinput.min.css') }}">
    <!-- Color Picker css -->
    <link rel="stylesheet"
          href="{{ asset('assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css') }}">
    <!-- File Manager css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/plugins/file-manager/file-manager.min.css') }}">
    <!-- Custom css -->
    <link rel="stylesheet"
          href="{{ asset('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css') }}">
    <!-- Datetimepicker css -->
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.min.css') }}">
    <!-- RTL -->

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('assets/admin/js/jquery.min.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <script>
        var csfr_token_name  = 'varient_csrf_token';
        var csfr_cookie_name = 'varient_csrf_token';
        var base_url         = '{{ config('app.url') }}/';
        var fb_app_id        = '';
    </script>
    <script>
    </script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo admin_url(); ?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b><?php echo 'appnamehere'; ?></b>  </span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <i class="fa fa-bars" aria-hidden="true"></i>
            </a>
            <div class="navbar-custom-menu">
                <?php //echo form_open('admin_controller/control_panel_language_post', ['id' => 'form_control_panel_lang']); ?>
                <form>
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="btn btn-sm btn-success pull-left btn-site-prev" target="_blank"
                               href="<?php echo base_url(); ?>"><i
                                        class="fa fa-eye"></i> <?php echo trans("view_site"); ?>
                            </a>
                        </li>

                        <li class="dropdown user-menu">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fa fa-globe"></i>&nbsp;
                                <?php //if (!empty($this->control_panel_lang)) {
                                //     echo $this->control_panel_lang->name;
                                // } ?>
                                <span class="fa fa-caret-down"></span>
                            </a>

                            <ul class="dropdown-menu">
                            </ul>

                        </li>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="" class="user-image" alt="">
                                <span class="hidden-xs"> <i class="fa fa-caret-down"></i> </span>
                            </a>
                            <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                                <li>
                                    <a href="<?php echo base_url(); ?>profile/"><i
                                                class="fa fa-user"></i> <?php echo trans("profile"); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>settings"><i
                                                class="fa fa-cog"></i> <?php echo trans("update_profile"); ?></a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>settings/change-password"><i
                                                class="fa fa-lock"></i> <?php echo trans("change_password"); ?></a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="<?php echo base_url(); ?>logout"><i
                                                class="fa fa-sign-out"></i> <?php echo trans("logout"); ?></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </form>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p></p>
                    <a href="#"><i class="fa fa-circle text-success"></i> <?php echo trans("online"); ?></a>
                </div>
            </div>

            @include('admin.layouts._sidebar')
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <footer id="footer" class="main-footer">
        <div class="pull-right hidden-xs">
            <strong style="font-weight: 600;"></strong>
        </div>
        <b>Version</b> 1.6
    </footer>
</div><!-- ./wrapper -->
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/admin/js/adminlte.min.js') }}"></script>
<!-- DataTables js -->
<script src="{{ asset('assets/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<!-- Lazy Load js -->
<script src="{{ asset('assets/admin/js/lazysizes.min.js') }}"></script>
<!-- iCheck js -->
<script src="{{ asset('assets/vendor/icheck/icheck.min.js') }}"></script>
<!-- Ckeditor js -->
<script src="{{ asset('assets/admin/plugins/ckeditor/ckeditor.js') }}"></script>
<!-- Pace -->
<script src="{{ asset('assets/admin/plugins/pace/pace.min.js') }}"></script>
<!-- File Manager -->
{{--<script src="{{ asset('assets/admin/plugins/file-manager/file-manager.min.js') }}"></script>--}}
<script src="{{ asset('assets/admin/plugins/file-manager/file-manager.js') }}"></script>
<script src="{{ asset('assets/admin/plugins/tagsinput/jquery.tagsinput.min.js') }}"></script>
<!-- Bootstrap Toggle js -->
<script src="{{ asset('assets/admin/js/bootstrap-toggle.min.js') }}"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
<!-- Plugins js -->
{{--<script src="{{ asset('assets/admin/js/plugins.js') }}"></script>--}}
<script src="{{ asset('assets/admin/js/plugins.js') }}"></script>

<!-- Color Picker js -->
<script src="{{ asset('assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.js') }}"></script>
<!-- Datepicker js -->
<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/moment.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js') }}"></script>
<!-- Custom js -->
{{--<script src="{{ asset('assets/admin/js/custom-1.6.min.js') }}"></script>--}}
<script src="{{ asset('assets/admin/js/custom-1.6.js') }}"></script>
<!-- Ckeditor -->
<script>
    $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    });
</script>
<script>
    var ckEditor = document.getElementById('ckEditor');
    if (ckEditor != undefined && ckEditor != null) {
        CKEDITOR.replace('ckEditor', {
            language: 'en',
            filebrowserBrowseUrl: 'path',
            removeButtons: 'Save'
        });
    }

    function selectFile(fileUrl) {
        window.opener.CKEDITOR.tools.callFunction(1, fileUrl);
    }

    CKEDITOR.on('dialogDefinition', function (ev) {
            var editor           = ev.editor;
            var dialogDefinition = ev.data.definition;

            // This function will be called when the user will pick a file in file manager
            var cleanUpFuncRef = CKEDITOR.tools.addFunction(function (a) {
                $('#ck_file_manager').modal('hide');
                CKEDITOR.tools.callFunction(1, a, "");
            });
            var tabCount       = dialogDefinition.contents.length;
            for (var i = 0; i < tabCount; i++) {
                var browseButton = dialogDefinition.contents[i].get('browse');
                if (browseButton !== null) {
                    browseButton.onClick = function (dialog, i) {
                        editor._.filebrowserSe = this;
                        var iframe             = $('#ck_file_manager').find('iframe').attr({
                            src: editor.config.filebrowserBrowseUrl + '&CKEditor=body&CKEditorFuncNum=' + cleanUpFuncRef + '&langCode=en'
                        });
                        $('#ck_file_manager').appendTo('body').modal('show');
                    }
                }
            }

        }
    );
</script>


</body>
</html>

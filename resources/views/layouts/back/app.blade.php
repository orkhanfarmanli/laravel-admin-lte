<!DOCTYPE html>
<html lang="en">

@include('layouts.back.partials.links')


<body class="skin-blue sidebar-mini">
<div class="wrapper">

    @include('layouts.back.partials.header')

    @include('layouts.back.partials.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        @include('layouts.back.partials.contentheader')

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            @yield('content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('layouts.back.partials.footer')

</div><!-- ./wrapper -->

@section('scripts')
    @include('layouts.back.partials.scripts')
@show

</body>


</html>

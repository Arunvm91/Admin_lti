<style>
   
.pac-man {
  margin-top: 10em;
  animation: eating-top .4s infinite;

}

@keyframes eating-top{
  0%{ transform: rotate(-8deg); }
  80% { transform: rotate(0deg); }
  100%{ transform: rotate(-40deg); }
}

  

    </style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            404 Error Page
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">404 error</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class='pac-man' />

        <div class="error-page">

                <h1 class="headline text-yellow"> 404</h1>
                <h2><i class="fa fa-warning text-yellow"></i> Oops! Page not found.</h2>




            <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    </section>
    <!-- /.content -->
</div>
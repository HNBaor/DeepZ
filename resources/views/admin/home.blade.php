<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.parts.head')
</head>

<body>
    <section class="deepz-admin">
        <div class="container-coolmate">
            <div class="row-coolmate">
                <div class="deepz-admin-left">
                    @include('admin.parts.sidebar')
                </div>
                <div class="deepz-admin-right">
                    <div class="deepz-admin-right-top">
                        @include('admin.parts.header')
                    </div>
                    <div class="deepz-admin-right-content">
                        <div class="deepz-admin-right-content-title">
                           {{$title}}
                        </div>
                        <div class="deepz-admin-right-content-main">
                                @yield('content')
                        </div>
                    </div>
                 
                </div>
            </div>
        
        
        </div>
    </section>
    <footer>
      @include('admin.parts.footer')

     </footer>
</body>

</html>
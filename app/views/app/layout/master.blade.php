@include('app.tpl.header')

<div class="page-container">
	@include('app.tpl.left-sidebar')
	<div class="page-content">
		<div class="container">
			<div class="page-toolbar">
			  <div class="page-toolbar-block">
            <div class="page-toolbar-title">
            	@yield('page-toolbar-title')
            </div>
            <div class="page-toolbar-subtitle">
            	@yield('page-toolbar-subtitle')
            </div>
        </div>
        @if(Request::segment(1) != 'dashboard')
        <div class="page-toolbar-block pull-right">
            <div class="widget-info widget-from">
                @yield('page-toolbar-block-right')
            </div>
        </div>
        @endif
        @if(Request::segment(1) != 'dashboard')
			  <ul class="breadcrumb">
        	@yield('breadcrumb')
        </ul>
        @endif
			</div>
			@yield('content')
		</div>
  </div>
  @include('app.tpl.right-sidebar')
</div>

@include('app.tpl.footer')
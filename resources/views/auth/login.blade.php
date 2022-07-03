{{-- @extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'SPMB')

@section('content')
<!-- begin login -->
<div class="login login-with-news-feed">
	<!-- begin news-feed -->
	<div class="news-feed">
		<div class="news-image" style="background-image: url(/assets/img/login-bg/front.png)"></div>
		<div class="news-caption">
			<h4 class="caption-title"><b>E</b>-Larning</h4>
			<p>
				E-Learning Canggih
			</p>
		</div>
	</div>
	<!-- end news-feed -->
	<!-- begin right-content -->
	<div class="right-content">
		<!-- begin login-header -->
		<div class="login-header mx-auto">
			<a href="#"><img src="{{asset('assets/img/login-bg/logonew.png')}}" width="160"></a>
		</div>
		<!-- end login-header -->
		<!-- begin login-content -->
		<div class="login-content">
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif
			<form action="{{ request()->routeIs('admin*') ? route('admin.login') : route('login') }}" method="POST" class="margin-bottom-0">
				@csrf
				<div class="form-group m-b-15">
					<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus />

					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group m-b-15">
					<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />

					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="checkbox checkbox-css m-b-30">
					<input type="checkbox" id="remember_me_checkbox" value="" />
					<label for="remember_me_checkbox">
						Remember Me
					</label>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
				</div>
				@if(!request()->routeIs('admin*'))
				<p>
					<br />
					Belum punya akun? <a href="{{ route('register') }}">Mendaftar</a>
					<br />
					Lupa kata sandi? <a href="{{ route('password.request') }}">Dapatkan kembali</a>
				</p>
				@endif
				<hr />
				<p class="text-center text-grey-darker">
					&copy; <?= date('Y') ?> Mandiri Solusindo </p>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end right-container -->
</div>
<!-- end login -->
@endsection --}}




@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'SPMB')

@section('content')




<body class="pace-done pace-top " style=""><div class="pace pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
    <div class="pace-progress-inner"></div>
  </div>
  <div class="pace-activity"></div></div>
      <!-- begin #page-loader -->
  <div id="page-loader" class="fade show d-none"><span class="spinner"></span></div>
  <!-- end #page-loader -->
          <!-- begin login -->
      <div class="login login-v1">
          <!-- begin login-container -->
          <div class="login-container">
              <!-- begin login-header -->
              <div class="login-header">
                  <div class="brand">
                      <span class="logo"></span> <b>WELCOME to </b> e-Learning</small>
                  </div>
                  <div class="icon">
                      <i class="fa fa-book"></i>
                  </div>
              </div>
              <!-- end login-header -->
              <!-- begin login-body -->
              <div class="login-body">
                  <!-- begin login-content -->
                  <div class="login-content">
                    <form action="{{ request()->routeIs('admin*') ? route('admin.login') : route('login') }}" method="POST" class="margin-bottom-0">
                        @csrf
                        <div class="form-group m-b-15">
                            <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus />

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group m-b-15">
                            <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="checkbox checkbox-css m-b-30">
                            <input type="checkbox" id="remember_me_checkbox" value="" />
                            <label for="remember_me_checkbox">
                                Remember Me
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
                        </div>
                        @if(!request()->routeIs('admin*'))
                        <p>
                            <br />
                            Belum punya akun? <a href="{{ route('register') }}">Mendaftar</a>
                            <br />
                            Lupa kata sandi? <a href="{{ route('password.request') }}">Dapatkan kembali</a>
                        </p>
                        @endif
                        <hr />
                        {{-- <p class="text-center text-grey-darker">
                            &copy; <?= date('Y') ?> Mandiri Solusindo </p> --}}
                    </form>
                  </div>
                  <!-- end login-content -->
              </div>
              <!-- end login-body -->
          </div>
          <!-- end login-container -->
      </div>
      <!-- end login -->

      <!-- ================== BEGIN BASE JS ================== -->
  <script src="/assets/js/app.min.js"></script>
  <script src="/assets/js/theme/default.min.js"></script>
  <!-- ================== END BASE JS ================== -->

  <script src="/assets/js/custom/select2.autofocus.fix.js"></script>
  <script type="text/javascript">
  var phpdebugbar = new PhpDebugBar.DebugBar();
  phpdebugbar.addIndicator("php_version", new PhpDebugBar.DebugBar.Indicator({"icon":"code","tooltip":"PHP Version"}), "right");
  phpdebugbar.addTab("messages", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Messages", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
  phpdebugbar.addIndicator("time", new PhpDebugBar.DebugBar.Indicator({"icon":"clock-o","tooltip":"Request Duration"}), "right");
  phpdebugbar.addTab("timeline", new PhpDebugBar.DebugBar.Tab({"icon":"tasks","title":"Timeline", "widget": new PhpDebugBar.Widgets.TimelineWidget()}));
  phpdebugbar.addIndicator("memory", new PhpDebugBar.DebugBar.Indicator({"icon":"cogs","tooltip":"Memory Usage"}), "right");
  phpdebugbar.addTab("exceptions", new PhpDebugBar.DebugBar.Tab({"icon":"bug","title":"Exceptions", "widget": new PhpDebugBar.Widgets.ExceptionsWidget()}));
  phpdebugbar.addTab("views", new PhpDebugBar.DebugBar.Tab({"icon":"leaf","title":"Views", "widget": new PhpDebugBar.Widgets.TemplatesWidget()}));
  phpdebugbar.addTab("route", new PhpDebugBar.DebugBar.Tab({"icon":"share","title":"Route", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
  phpdebugbar.addIndicator("currentroute", new PhpDebugBar.DebugBar.Indicator({"icon":"share","tooltip":"Route"}), "right");
  phpdebugbar.addTab("queries", new PhpDebugBar.DebugBar.Tab({"icon":"database","title":"Queries", "widget": new PhpDebugBar.Widgets.LaravelSQLQueriesWidget()}));
  phpdebugbar.addTab("models", new PhpDebugBar.DebugBar.Tab({"icon":"cubes","title":"Models", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
  phpdebugbar.addTab("emails", new PhpDebugBar.DebugBar.Tab({"icon":"inbox","title":"Mails", "widget": new PhpDebugBar.Widgets.MailsWidget()}));
  phpdebugbar.addTab("gate", new PhpDebugBar.DebugBar.Tab({"icon":"list-alt","title":"Gate", "widget": new PhpDebugBar.Widgets.MessagesWidget()}));
  phpdebugbar.addTab("session", new PhpDebugBar.DebugBar.Tab({"icon":"archive","title":"Session", "widget": new PhpDebugBar.Widgets.VariableListWidget()}));
  phpdebugbar.addTab("request", new PhpDebugBar.DebugBar.Tab({"icon":"tags","title":"Request", "widget": new PhpDebugBar.Widgets.HtmlVariableListWidget()}));
  phpdebugbar.setDataMap({
  "php_version": ["php.version", ],
  "messages": ["messages.messages", []],
  "messages:badge": ["messages.count", null],
  "time": ["time.duration_str", '0ms'],
  "timeline": ["time", {}],
  "memory": ["memory.peak_usage_str", '0B'],
  "exceptions": ["exceptions.exceptions", []],
  "exceptions:badge": ["exceptions.count", null],
  "views": ["views", []],
  "views:badge": ["views.nb_templates", 0],
  "route": ["route", {}],
  "currentroute": ["route.uri", ],
  "queries": ["queries", []],
  "queries:badge": ["queries.nb_statements", 0],
  "models": ["models.data", {}],
  "models:badge": ["models.count", 0],
  "emails": ["swiftmailer_mails.mails", []],
  "emails:badge": ["swiftmailer_mails.count", null],
  "gate": ["gate.messages", []],
  "gate:badge": ["gate.count", null],
  "session": ["session", {}],
  "request": ["request", {}]
  });
  phpdebugbar.restoreState();
  phpdebugbar.ajaxHandler = new PhpDebugBar.AjaxHandler(phpdebugbar, undefined, true);
  phpdebugbar.ajaxHandler.bindToFetch();
  phpdebugbar.ajaxHandler.bindToXHR();
  phpdebugbar.setOpenHandler(new PhpDebugBar.OpenHandler({"url":"http:\/\/127.0.0.1:8000\/_debugbar\/open"}));
  phpdebugbar.addDataSet({"__meta":{"id":"Xda72490b7e93458de4718c3cd13753eb","datetime":"2022-07-01 18:12:07","utime":1656699127.747744,"method":"GET","uri":"\/login\/v1","ip":"127.0.0.1"},"php":{"version":"7.4.19","interface":"cli-server"},"messages":{"count":0,"messages":[]},"time":{"start":1656699127.481508,"end":1656699127.747763,"duration":0.26625490188598633,"duration_str":"266ms","measures":[{"label":"Booting","start":1656699127.481508,"relative_start":0,"end":1656699127.686338,"relative_end":1656699127.686338,"duration":0.20482993125915527,"duration_str":"205ms","params":[],"collector":null},{"label":"Application","start":1656699127.691041,"relative_start":0.2095329761505127,"end":1656699127.747765,"relative_end":2.1457672119140625e-6,"duration":0.05672407150268555,"duration_str":"56.72ms","params":[],"collector":null}]},"memory":{"peak_usage":21629112,"peak_usage_str":"21MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":6,"templates":[{"name":"demo-pages.login-v1 (\\resources\\views\\demo-pages\\login-v1.blade.php)","param_count":0,"params":[],"type":"blade"},{"name":"layouts.empty (\\resources\\views\\layouts\\empty.blade.php)","param_count":4,"params":["__env","app","errors","paceTop"],"type":"blade"},{"name":"includes.head (\\resources\\views\\includes\\head.blade.php)","param_count":4,"params":["__env","app","errors","paceTop"],"type":"blade"},{"name":"includes.component.page-loader (\\resources\\views\\includes\\component\\page-loader.blade.php)","param_count":5,"params":["__env","app","errors","paceTop","bodyClass"],"type":"blade"},{"name":"includes.page-js (\\resources\\views\\includes\\page-js.blade.php)","param_count":5,"params":["__env","app","errors","paceTop","bodyClass"],"type":"blade"},{"name":"sweetalert::alert (\\resources\\views\\vendor\\sweetalert\\alert.blade.php)","param_count":5,"params":["__env","app","errors","paceTop","bodyClass"],"type":"blade"}]},"route":{"uri":"GET login\/v1","middleware":"web","uses":"Closure() {#1692\n  class: \"Illuminate\\Routing\\RouteFileRegistrar\"\n  this: Illuminate\\Routing\\RouteFileRegistrar {#416 \u2026}\n  file: \"C:\\laragon\\www\\template\\routes\\demo.php\"\n  line: \"254 to 256\"\n}","namespace":"App\\Http\\Controllers","prefix":"","where":[],"file":"<a href=\"phpstorm:\/\/open?file=C:\\laragon\\www\\template\\routes\\demo.php&line=254\">\\routes\\demo.php:254-256<\/a>"},"queries":{"nb_statements":0,"nb_failed_statements":0,"accumulated_duration":0,"accumulated_duration_str":"0\u03bcs","statements":[]},"models":{"data":[],"count":0},"swiftmailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"YRMTXrnhbwZOh2KOW0SGqB2ThEbmhHYlSQlPLY2U","url":"[]","_previous":"array:1 [\n  \"url\" => \"http:\/\/127.0.0.1:8000\/login\/v1\"\n]","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d":"2","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/login\/v1","status_code":"<pre class=sf-dump id=sf-dump-180759254 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-180759254\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-952125352 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-952125352\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-23566490 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-23566490\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-1271580923 data-indent-pad=\"  \"><span class=sf-dump-note>array:16<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"66 characters\">&quot;.Not\/A)Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;103&quot;, &quot;Chromium&quot;;v=&quot;103&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/103.0.0.0 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"34 characters\">http:\/\/127.0.0.1:8000\/dashboard\/v1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"35 characters\">id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"746 characters\">_ga=GA1.1.1265979492.1637201731; XSRF-TOKEN=eyJpdiI6ImQ1UUNuMW5JbEE1dkZIeXpvR1g3bXc9PSIsInZhbHVlIjoiZThhYndYc254Rnh5K2RlTVVjdXIyNUJsbXRPNVZGS3ltWEVNMzdmYzA5cWFsZ25VNSs3TmE2MkgwV3UyMFNaNW9aVkhLRjZoMWZFd0NUL2FrcFBNcnVLWkVZUXpaV2lQQk9WRUdFSkdPQVNxYzZzTkkxWU84U3BPWE9KeFNQYXUiLCJtYWMiOiIxNzhiZjAzNjhkZjIyNzdjZDJhYWY5ODcxZTk2NmNkNjRiYWM1MDZlNjFmOTcwOGViZWY2ZWVjZmJlYWZmYzY1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IndPdXU3UFA5MlJOSVBXYk5iUlBycGc9PSIsInZhbHVlIjoiaG5WdENrZVRTNlE2N0xwOFdGMXovZWhFcGpSeW9FRlFiQ05iMTIvckplOXlGbUFiZnFaWm5RL3NUbkVsSFhjbS95YjhUbkFYQkJONldvVjdxT3N0UFpRRlJNQ1lGU1BhSmQ1SHlNLzhuQkQ2UUlCaVpzaGZWOFozWmNuNEdIaXUiLCJtYWMiOiJiNDc4OGMyZWYxNWY2NGVjZDRhODRiMjlhYjQ0NjQ0NTUxZTlhN2U2NTRlZjgzNGMyYjg0OTgyNjcyMGJlMDIwIiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1271580923\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-1998492651 data-indent-pad=\"  \"><span class=sf-dump-note>array:31<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"30 characters\">C:\\laragon\\www\\template\\public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">53606<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"29 characters\">PHP 7.4.19 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8000<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">\/login\/v1<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">C:\\laragon\\www\\template\\public\\index.php<\/span>\"\n  \"<span class=sf-dump-key>PATH_INFO<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">\/login\/v1<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"19 characters\">\/index.php\/login\/v1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"66 characters\">&quot;.Not\/A)Brand&quot;;v=&quot;99&quot;, &quot;Google Chrome&quot;;v=&quot;103&quot;, &quot;Chromium&quot;;v=&quot;103&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"111 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/103.0.0.0 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"34 characters\">http:\/\/127.0.0.1:8000\/dashboard\/v1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"35 characters\">id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"746 characters\">_ga=GA1.1.1265979492.1637201731; XSRF-TOKEN=eyJpdiI6ImQ1UUNuMW5JbEE1dkZIeXpvR1g3bXc9PSIsInZhbHVlIjoiZThhYndYc254Rnh5K2RlTVVjdXIyNUJsbXRPNVZGS3ltWEVNMzdmYzA5cWFsZ25VNSs3TmE2MkgwV3UyMFNaNW9aVkhLRjZoMWZFd0NUL2FrcFBNcnVLWkVZUXpaV2lQQk9WRUdFSkdPQVNxYzZzTkkxWU84U3BPWE9KeFNQYXUiLCJtYWMiOiIxNzhiZjAzNjhkZjIyNzdjZDJhYWY5ODcxZTk2NmNkNjRiYWM1MDZlNjFmOTcwOGViZWY2ZWVjZmJlYWZmYzY1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IndPdXU3UFA5MlJOSVBXYk5iUlBycGc9PSIsInZhbHVlIjoiaG5WdENrZVRTNlE2N0xwOFdGMXovZWhFcGpSeW9FRlFiQ05iMTIvckplOXlGbUFiZnFaWm5RL3NUbkVsSFhjbS95YjhUbkFYQkJONldvVjdxT3N0UFpRRlJNQ1lGU1BhSmQ1SHlNLzhuQkQ2UUlCaVpzaGZWOFozWmNuNEdIaXUiLCJtYWMiOiJiNDc4OGMyZWYxNWY2NGVjZDRhODRiMjlhYjQ0NjQ0NTUxZTlhN2U2NTRlZjgzNGMyYjg0OTgyNjcyMGJlMDIwIiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1656699127.4815<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1656699127<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1998492651\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1830740883 data-indent-pad=\"  \"><span class=sf-dump-note>array:3<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_ga<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">YRMTXrnhbwZOh2KOW0SGqB2ThEbmhHYlSQlPLY2U<\/span>\"\n  \"<span class=sf-dump-key>laravel_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">KCmhWgswL0SMjelCIE4iqpVVJQrQ0MBQFcLFTn0v<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1830740883\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-1597037898 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Fri, 01 Jul 2022 18:12:07 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6ImxLc3ZSZnZrRGNUcUtQNURpeTQ4MGc9PSIsInZhbHVlIjoidDJ3YUFRVVhRMWVYYjBIVDlmZ25DakpjODZaTG50Z0UrelptREtScEtMeitwMWJ2ZVZPVGxPVHgwMXFiWE5YQS9JR2Z1bzhJY3RQMjNLUCt3bzNyb01Gc3ArR1ZuUHFwTzJLcGZFVzE0d2JCUGRlQWN5c1pVeklnWGJPa0JYbWsiLCJtYWMiOiIzZWUzYjgzMjE0OTY3Njc0NTg5NjljYWIyNjgxZDg2ODlmNTgxOTJhZDkyNzZkYTY4ZTc1ODFkMDgzYmQ4N2M2IiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"443 characters\">laravel_session=eyJpdiI6Im9ZVE8zQ3MvRUczMVpsK2I1N2VNY1E9PSIsInZhbHVlIjoiMHZKaEVFcS8rcVhMSC9rWVZsRnFycm9RUmVIcCtEZmJmWEt3R01ua082bUQvbFl2WXQzUWJZczlRWWtMYi9aZTFpMXpRcU95VXNHeWRKRjZBTUMwS1M0MmxYbVAzeHBDY05ZVDU5Y045eEQyNDA5ckhpRkViOExJTnMvcUhQN20iLCJtYWMiOiIyY2RlOWQyMzZlYTdkYTgxN2Q5ZmM3OGRhNjBmNDViNzY4NDczOGZiNjQ5ZjZlZjU1MmMzZTRkZWZiYjY4YTZhIiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6ImxLc3ZSZnZrRGNUcUtQNURpeTQ4MGc9PSIsInZhbHVlIjoidDJ3YUFRVVhRMWVYYjBIVDlmZ25DakpjODZaTG50Z0UrelptREtScEtMeitwMWJ2ZVZPVGxPVHgwMXFiWE5YQS9JR2Z1bzhJY3RQMjNLUCt3bzNyb01Gc3ArR1ZuUHFwTzJLcGZFVzE0d2JCUGRlQWN5c1pVeklnWGJPa0JYbWsiLCJtYWMiOiIzZWUzYjgzMjE0OTY3Njc0NTg5NjljYWIyNjgxZDg2ODlmNTgxOTJhZDkyNzZkYTY4ZTc1ODFkMDgzYmQ4N2M2IiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"415 characters\">laravel_session=eyJpdiI6Im9ZVE8zQ3MvRUczMVpsK2I1N2VNY1E9PSIsInZhbHVlIjoiMHZKaEVFcS8rcVhMSC9rWVZsRnFycm9RUmVIcCtEZmJmWEt3R01ua082bUQvbFl2WXQzUWJZczlRWWtMYi9aZTFpMXpRcU95VXNHeWRKRjZBTUMwS1M0MmxYbVAzeHBDY05ZVDU5Y045eEQyNDA5ckhpRkViOExJTnMvcUhQN20iLCJtYWMiOiIyY2RlOWQyMzZlYTdkYTgxN2Q5ZmM3OGRhNjBmNDViNzY4NDczOGZiNjQ5ZjZlZjU1MmMzZTRkZWZiYjY4YTZhIiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1597037898\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-44089675 data-indent-pad=\"  \"><span class=sf-dump-note>array:6<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">YRMTXrnhbwZOh2KOW0SGqB2ThEbmhHYlSQlPLY2U<\/span>\"\n  \"<span class=sf-dump-key>url<\/span>\" => []\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"30 characters\">http:\/\/127.0.0.1:8000\/login\/v1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>2<\/span>\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-44089675\", {\"maxDepth\":0})<\/script>\n"}}, "Xda72490b7e93458de4718c3cd13753eb");

  </script><div class="phpdebugbar phpdebugbar-minimized phpdebugbar-closed"><div class="phpdebugbar-drag-capture"></div><div class="phpdebugbar-resize-handle" style="display: none;"></div><div class="phpdebugbar-header" style="display: none;"><div class="phpdebugbar-header-left"><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-list-alt"></i><span class="phpdebugbar-text">Messages</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-tasks"></i><span class="phpdebugbar-text">Timeline</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-bug"></i><span class="phpdebugbar-text">Exceptions</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-leaf"></i><span class="phpdebugbar-text">Views</span><span class="phpdebugbar-badge phpdebugbar-visible">6</span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-share"></i><span class="phpdebugbar-text">Route</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-database"></i><span class="phpdebugbar-text">Queries</span><span class="phpdebugbar-badge phpdebugbar-visible">0</span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-cubes"></i><span class="phpdebugbar-text">Models</span><span class="phpdebugbar-badge phpdebugbar-visible">0</span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-inbox"></i><span class="phpdebugbar-text">Mails</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-list-alt"></i><span class="phpdebugbar-text">Gate</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-archive"></i><span class="phpdebugbar-text">Session</span><span class="phpdebugbar-badge"></span></a><a class="phpdebugbar-tab"><i class="phpdebugbar-fa phpdebugbar-fa-tags"></i><span class="phpdebugbar-text">Request</span><span class="phpdebugbar-badge"></span></a></div><div class="phpdebugbar-header-right"><a class="phpdebugbar-close-btn"></a><a class="phpdebugbar-minimize-btn"></a><a class="phpdebugbar-maximize-btn"></a><a class="phpdebugbar-open-btn" style=""></a><select class="phpdebugbar-datasets-switcher"><option value="Xda72490b7e93458de4718c3cd13753eb">#1 v1 (18:12:07)</option></select><span class="phpdebugbar-indicator"><i class="phpdebugbar-fa phpdebugbar-fa-code"></i><span class="phpdebugbar-text">7.4.19</span><span class="phpdebugbar-tooltip">PHP Version</span></span><span class="phpdebugbar-indicator"><i class="phpdebugbar-fa phpdebugbar-fa-clock-o"></i><span class="phpdebugbar-text">266ms</span><span class="phpdebugbar-tooltip">Request Duration</span></span><span class="phpdebugbar-indicator"><i class="phpdebugbar-fa phpdebugbar-fa-cogs"></i><span class="phpdebugbar-text">21MB</span><span class="phpdebugbar-tooltip">Memory Usage</span></span><span class="phpdebugbar-indicator"><i class="phpdebugbar-fa phpdebugbar-fa-share"></i><span class="phpdebugbar-text">GET login/v1</span><span class="phpdebugbar-tooltip">Route</span></span></div></div><div class="phpdebugbar-body" style="height: 40px; display: none;"><div class="phpdebugbar-panel"><div class="phpdebugbar-widgets-messages"><ul class="phpdebugbar-widgets-list"></ul><div class="phpdebugbar-widgets-toolbar"><i class="phpdebugbar-fa phpdebugbar-fa-search"></i><input type="text"></div></div></div><div class="phpdebugbar-panel"><ul class="phpdebugbar-widgets-timeline"><li><div class="phpdebugbar-widgets-measure"><span class="phpdebugbar-widgets-value" style="left: 0%; width: 76.93%;"></span><span class="phpdebugbar-widgets-label">Booting (205ms)</span></div></li><li><div class="phpdebugbar-widgets-measure"><span class="phpdebugbar-widgets-value" style="left: 78.7%; width: 21.3%;"></span><span class="phpdebugbar-widgets-label">Application (56.72ms)</span></div></li><li><table style="display: table; border: 0; width: 99%" class="phpdebugbar-widgets-params"><tr><td class="phpdebugbar-widgets-name">1 x Booting (76.93%)</td><td class="phpdebugbar-widgets-value"><div class="phpdebugbar-widgets-measure"><span class="phpdebugbar-widgets-value" style="width:76.93%"></span><span class="phpdebugbar-widgets-label">204.83ms</span></div></td></tr><tr><td class="phpdebugbar-widgets-name">1 x Application (21.3%)</td><td class="phpdebugbar-widgets-value"><div class="phpdebugbar-widgets-measure"><span class="phpdebugbar-widgets-value" style="width:21.3%"></span><span class="phpdebugbar-widgets-label">56.72ms</span></div></td></tr></table></li></ul></div><div class="phpdebugbar-panel"><div class="phpdebugbar-widgets-exceptions"><ul class="phpdebugbar-widgets-list"></ul></div></div><div class="phpdebugbar-panel"><div class="phpdebugbar-widgets-templates"><div class="phpdebugbar-widgets-status"><span>6 templates were rendered</span></div><ul class="phpdebugbar-widgets-list"><li class="phpdebugbar-widgets-list-item"><span class="phpdebugbar-widgets-name">demo-pages.login-v1 (\resources\views\demo-pages\login-v1.blade.php)</span><span title="Parameter count" class="phpdebugbar-widgets-param-count">0</span><span title="Type" class="phpdebugbar-widgets-type">blade</span></li><li class="phpdebugbar-widgets-list-item" style="cursor: pointer;"><span class="phpdebugbar-widgets-name">layouts.empty (\resources\views\layouts\empty.blade.php)</span><span title="Parameter count" class="phpdebugbar-widgets-param-count">4</span><span title="Type" class="phpdebugbar-widgets-type">blade</span><table class="phpdebugbar-widgets-params"><tbody><tr><th colspan="2">Params</th></tr><tr><td class="phpdebugbar-widgets-name">0</td><td class="phpdebugbar-widgets-value"><pre><code>__env</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">1</td><td class="phpdebugbar-widgets-value"><pre><code>app</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">2</td><td class="phpdebugbar-widgets-value"><pre><code>errors</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">3</td><td class="phpdebugbar-widgets-value"><pre><code>paceTop</code></pre></td></tr></tbody></table></li><li class="phpdebugbar-widgets-list-item" style="cursor: pointer;"><span class="phpdebugbar-widgets-name">includes.head (\resources\views\includes\head.blade.php)</span><span title="Parameter count" class="phpdebugbar-widgets-param-count">4</span><span title="Type" class="phpdebugbar-widgets-type">blade</span><table class="phpdebugbar-widgets-params"><tbody><tr><th colspan="2">Params</th></tr><tr><td class="phpdebugbar-widgets-name">0</td><td class="phpdebugbar-widgets-value"><pre><code>__env</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">1</td><td class="phpdebugbar-widgets-value"><pre><code>app</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">2</td><td class="phpdebugbar-widgets-value"><pre><code>errors</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">3</td><td class="phpdebugbar-widgets-value"><pre><code>paceTop</code></pre></td></tr></tbody></table></li><li class="phpdebugbar-widgets-list-item" style="cursor: pointer;"><span class="phpdebugbar-widgets-name">includes.component.page-loader (\resources\views\includes\component\page-loader.blade.php)</span><span title="Parameter count" class="phpdebugbar-widgets-param-count">5</span><span title="Type" class="phpdebugbar-widgets-type">blade</span><table class="phpdebugbar-widgets-params"><tbody><tr><th colspan="2">Params</th></tr><tr><td class="phpdebugbar-widgets-name">0</td><td class="phpdebugbar-widgets-value"><pre><code>__env</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">1</td><td class="phpdebugbar-widgets-value"><pre><code>app</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">2</td><td class="phpdebugbar-widgets-value"><pre><code>errors</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">3</td><td class="phpdebugbar-widgets-value"><pre><code>paceTop</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">4</td><td class="phpdebugbar-widgets-value"><pre><code>bodyClass</code></pre></td></tr></tbody></table></li><li class="phpdebugbar-widgets-list-item" style="cursor: pointer;"><span class="phpdebugbar-widgets-name">includes.page-js (\resources\views\includes\page-js.blade.php)</span><span title="Parameter count" class="phpdebugbar-widgets-param-count">5</span><span title="Type" class="phpdebugbar-widgets-type">blade</span><table class="phpdebugbar-widgets-params"><tbody><tr><th colspan="2">Params</th></tr><tr><td class="phpdebugbar-widgets-name">0</td><td class="phpdebugbar-widgets-value"><pre><code>__env</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">1</td><td class="phpdebugbar-widgets-value"><pre><code>app</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">2</td><td class="phpdebugbar-widgets-value"><pre><code>errors</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">3</td><td class="phpdebugbar-widgets-value"><pre><code>paceTop</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">4</td><td class="phpdebugbar-widgets-value"><pre><code>bodyClass</code></pre></td></tr></tbody></table></li><li class="phpdebugbar-widgets-list-item" style="cursor: pointer;"><span class="phpdebugbar-widgets-name">sweetalert::alert (\resources\views\vendor\sweetalert\alert.blade.php)</span><span title="Parameter count" class="phpdebugbar-widgets-param-count">5</span><span title="Type" class="phpdebugbar-widgets-type">blade</span><table class="phpdebugbar-widgets-params"><tbody><tr><th colspan="2">Params</th></tr><tr><td class="phpdebugbar-widgets-name">0</td><td class="phpdebugbar-widgets-value"><pre><code>__env</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">1</td><td class="phpdebugbar-widgets-value"><pre><code>app</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">2</td><td class="phpdebugbar-widgets-value"><pre><code>errors</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">3</td><td class="phpdebugbar-widgets-value"><pre><code>paceTop</code></pre></td></tr><tr><td class="phpdebugbar-widgets-name">4</td><td class="phpdebugbar-widgets-value"><pre><code>bodyClass</code></pre></td></tr></tbody></table></li></ul><div class="phpdebugbar-widgets-callgraph"></div></div></div><div class="phpdebugbar-panel"><dl class="phpdebugbar-widgets-kvlist phpdebugbar-widgets-htmlvarlist"><dt class="phpdebugbar-widgets-key"><span title="uri">uri</span></dt><dd class="phpdebugbar-widgets-value">GET login/v1</dd><dt class="phpdebugbar-widgets-key"><span title="middleware">middleware</span></dt><dd class="phpdebugbar-widgets-value">web</dd><dt class="phpdebugbar-widgets-key"><span title="uses">uses</span></dt><dd class="phpdebugbar-widgets-value">Closure() {#1692
    class: "Illuminate\Routing\RouteFileRegistrar"
    this: Illuminate\Routing\RouteFileRegistrar {#416 …}
    file: "C:\laragon\www\template\routes\demo.php"
    line: "254 to 256"
  }</dd><dt class="phpdebugbar-widgets-key"><span title="namespace">namespace</span></dt><dd class="phpdebugbar-widgets-value">App\Http\Controllers</dd><dt class="phpdebugbar-widgets-key"><span title="prefix">prefix</span></dt><dd class="phpdebugbar-widgets-value"></dd><dt class="phpdebugbar-widgets-key"><span title="where">where</span></dt><dd class="phpdebugbar-widgets-value"></dd><dt class="phpdebugbar-widgets-key"><span title="file">file</span></dt><dd class="phpdebugbar-widgets-value"><a href="phpstorm://open?file=C:\laragon\www\template\routes\demo.php&amp;line=254">\routes\demo.php:254-256</a></dd></dl></div><div class="phpdebugbar-panel"><div class="phpdebugbar-widgets-sqlqueries"><div class="phpdebugbar-widgets-status"><span>0 statements were executed</span><span title="Accumulated duration" class="phpdebugbar-widgets-duration">0μs</span></div><div class="phpdebugbar-widgets-toolbar"></div><ul class="phpdebugbar-widgets-list"></ul></div></div><div class="phpdebugbar-panel"><dl class="phpdebugbar-widgets-kvlist phpdebugbar-widgets-htmlvarlist"></dl></div><div class="phpdebugbar-panel"><div class="phpdebugbar-widgets-mails"><ul class="phpdebugbar-widgets-list"></ul></div></div><div class="phpdebugbar-panel"><div class="phpdebugbar-widgets-messages"><ul class="phpdebugbar-widgets-list"></ul><div class="phpdebugbar-widgets-toolbar"><i class="phpdebugbar-fa phpdebugbar-fa-search"></i><input type="text"></div></div></div><div class="phpdebugbar-panel"><dl class="phpdebugbar-widgets-kvlist phpdebugbar-widgets-varlist"><dt class="phpdebugbar-widgets-key"><span title="_token">_token</span></dt><dd class="phpdebugbar-widgets-value">YRMTXrnhbwZOh2KOW0SGqB2ThEbmhHYlSQlPLY2U</dd><dt class="phpdebugbar-widgets-key"><span title="url">url</span></dt><dd class="phpdebugbar-widgets-value">[]</dd><dt class="phpdebugbar-widgets-key"><span title="_previous">_previous</span></dt><dd class="phpdebugbar-widgets-value">array:1 [
    "url" =&gt; "http://127.0.0.1:8000/login/v1"
  ]</dd><dt class="phpdebugbar-widgets-key"><span title="_flash">_flash</span></dt><dd class="phpdebugbar-widgets-value">array:2 [
    "old" =&gt; []
    "new" =&gt; []
  ]</dd><dt class="phpdebugbar-widgets-key"><span title="login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d">login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d</span></dt><dd class="phpdebugbar-widgets-value">2</dd><dt class="phpdebugbar-widgets-key"><span title="PHPDEBUGBAR_STACK_DATA">PHPDEBUGBAR_STACK_DATA</span></dt><dd class="phpdebugbar-widgets-value">[]</dd></dl></div><div class="phpdebugbar-panel"><dl class="phpdebugbar-widgets-kvlist phpdebugbar-widgets-htmlvarlist"><dt class="phpdebugbar-widgets-key"><span title="path_info">path_info</span></dt><dd class="phpdebugbar-widgets-value">/login/v1</dd><dt class="phpdebugbar-widgets-key"><span title="status_code">status_code</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-180759254" data-indent-pad="  "><span class="sf-dump-num">200</span>
  </pre><script>Sfdump("sf-dump-180759254", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="status_text">status_text</span></dt><dd class="phpdebugbar-widgets-value">OK</dd><dt class="phpdebugbar-widgets-key"><span title="format">format</span></dt><dd class="phpdebugbar-widgets-value">html</dd><dt class="phpdebugbar-widgets-key"><span title="content_type">content_type</span></dt><dd class="phpdebugbar-widgets-value">text/html; charset=UTF-8</dd><dt class="phpdebugbar-widgets-key"><span title="request_query">request_query</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-952125352" data-indent-pad="  ">[]
  </pre><script>Sfdump("sf-dump-952125352", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="request_request">request_request</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-23566490" data-indent-pad="  ">[]
  </pre><script>Sfdump("sf-dump-23566490", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="request_headers">request_headers</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-1271580923" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">array:16</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▼</span></a><samp data-depth="1" class="sf-dump-expanded">
    "<span class="sf-dump-key">host</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="14 characters">127.0.0.1:8000</span>"
    </samp>]
    "<span class="sf-dump-key">connection</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="10 characters">keep-alive</span>"
    </samp>]
    "<span class="sf-dump-key">sec-ch-ua</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="66 characters">".Not/A)Brand";v="99", "Google Chrome";v="103", "Chromium";v="103"</span>"
    </samp>]
    "<span class="sf-dump-key">sec-ch-ua-mobile</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="2 characters">?0</span>"
    </samp>]
    "<span class="sf-dump-key">sec-ch-ua-platform</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="9 characters">"Windows"</span>"
    </samp>]
    "<span class="sf-dump-key">upgrade-insecure-requests</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str">1</span>"
    </samp>]
    "<span class="sf-dump-key">user-agent</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="111 characters">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36</span>"
    </samp>]
    "<span class="sf-dump-key">accept</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="135 characters">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</span>"
    </samp>]
    "<span class="sf-dump-key">sec-fetch-site</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="11 characters">same-origin</span>"
    </samp>]
    "<span class="sf-dump-key">sec-fetch-mode</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="8 characters">navigate</span>"
    </samp>]
    "<span class="sf-dump-key">sec-fetch-user</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="2 characters">?1</span>"
    </samp>]
    "<span class="sf-dump-key">sec-fetch-dest</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="8 characters">document</span>"
    </samp>]
    "<span class="sf-dump-key">referer</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="34 characters">http://127.0.0.1:8000/dashboard/v1</span>"
    </samp>]
    "<span class="sf-dump-key">accept-encoding</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="17 characters">gzip, deflate, br</span>"
    </samp>]
    "<span class="sf-dump-key">accept-language</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="35 characters">id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7</span>"
    </samp>]
    "<span class="sf-dump-key">cookie</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str sf-dump-str-collapse" title="746 characters"><span class="sf-dump-str-collapse">_ga=GA1.1.1265979492.1637201731; XSRF-TOKEN=eyJpdiI6ImQ1UUNuMW5JbEE1dkZIeXpvR1g3bXc9PSIsInZhbHVlIjoiZThhYndYc254Rnh5K2RlTVVjdXIyNUJsbXRPNVZGS3ltWEVNMzdmYzA5cWFsZ25VNSs3TmE2MkgwV3UyMFNaNW9aVkhLRjZoMWZFd0NUL2FrcFBNcnVLWkVZUXpaV2lQQk9WRUdFSkdPQVNxYzZzTkkxWU84U3BPWE9KeFNQYXUiLCJtYWMiOiIxNzhiZjAzNjhkZjIyNzdjZDJhYWY5ODcxZTk2NmNkNjRiYWM1MDZlNjFmOTcwOGViZWY2ZWVjZmJlYWZmYzY1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IndPdXU3UFA5MlJOSVBXYk5iUlBycGc9PSIsInZhbHVlIjoiaG5WdENrZVRTNlE2N0xwOFdGMXovZWhFcGpSeW9FRlFiQ05iMTIvckplOXlGbUFiZnFaWm5RL3NUbkVsSFhjbS95YjhUbkFYQkJONldvVjdxT3N0UFpRRlJNQ1lGU1BhSmQ1SHlNLzhuQkQ2UUlCaVpzaGZWOFozWmNuNEdIaXUiLCJtYWMiOiJiNDc4OGMyZWYxNWY2NGVjZDRhODRiMjlhYjQ0NjQ0NTUxZTlhN2U2NTRlZjgzNGMyYjg0OTgyNjcyMGJlMDIwIiwidGFnIjoiIn0%3D<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">_ga=GA1.1.1265979492.1637201731; XSRF-TOKEN=eyJpdiI6ImQ1UUNuMW5JbEE1dkZIeXpvR1g3bXc9PSIsInZhbHVlIjoiZThhYndYc254Rnh5K2RlTVVjdXIyNUJsbXRPNVZGS3ltWEVNMzdmYzA5cWFs<a class="sf-dump-ref sf-dump-str-toggle" title="586 remaining characters"> ▶</a></span></span>"
    </samp>]
  </samp>]
  </pre><script>Sfdump("sf-dump-1271580923", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="request_server">request_server</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-1998492651" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">array:31</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▼</span></a><samp data-depth="1" class="sf-dump-expanded">
    "<span class="sf-dump-key">DOCUMENT_ROOT</span>" =&gt; "<span class="sf-dump-str" title="30 characters">C:\laragon\www\template\public</span>"
    "<span class="sf-dump-key">REMOTE_ADDR</span>" =&gt; "<span class="sf-dump-str" title="9 characters">127.0.0.1</span>"
    "<span class="sf-dump-key">REMOTE_PORT</span>" =&gt; "<span class="sf-dump-str" title="5 characters">53606</span>"
    "<span class="sf-dump-key">SERVER_SOFTWARE</span>" =&gt; "<span class="sf-dump-str" title="29 characters">PHP 7.4.19 Development Server</span>"
    "<span class="sf-dump-key">SERVER_PROTOCOL</span>" =&gt; "<span class="sf-dump-str" title="8 characters">HTTP/1.1</span>"
    "<span class="sf-dump-key">SERVER_NAME</span>" =&gt; "<span class="sf-dump-str" title="9 characters">127.0.0.1</span>"
    "<span class="sf-dump-key">SERVER_PORT</span>" =&gt; "<span class="sf-dump-str" title="4 characters">8000</span>"
    "<span class="sf-dump-key">REQUEST_URI</span>" =&gt; "<span class="sf-dump-str" title="9 characters">/login/v1</span>"
    "<span class="sf-dump-key">REQUEST_METHOD</span>" =&gt; "<span class="sf-dump-str" title="3 characters">GET</span>"
    "<span class="sf-dump-key">SCRIPT_NAME</span>" =&gt; "<span class="sf-dump-str" title="10 characters">/index.php</span>"
    "<span class="sf-dump-key">SCRIPT_FILENAME</span>" =&gt; "<span class="sf-dump-str" title="40 characters">C:\laragon\www\template\public\index.php</span>"
    "<span class="sf-dump-key">PATH_INFO</span>" =&gt; "<span class="sf-dump-str" title="9 characters">/login/v1</span>"
    "<span class="sf-dump-key">PHP_SELF</span>" =&gt; "<span class="sf-dump-str" title="19 characters">/index.php/login/v1</span>"
    "<span class="sf-dump-key">HTTP_HOST</span>" =&gt; "<span class="sf-dump-str" title="14 characters">127.0.0.1:8000</span>"
    "<span class="sf-dump-key">HTTP_CONNECTION</span>" =&gt; "<span class="sf-dump-str" title="10 characters">keep-alive</span>"
    "<span class="sf-dump-key">HTTP_SEC_CH_UA</span>" =&gt; "<span class="sf-dump-str" title="66 characters">".Not/A)Brand";v="99", "Google Chrome";v="103", "Chromium";v="103"</span>"
    "<span class="sf-dump-key">HTTP_SEC_CH_UA_MOBILE</span>" =&gt; "<span class="sf-dump-str" title="2 characters">?0</span>"
    "<span class="sf-dump-key">HTTP_SEC_CH_UA_PLATFORM</span>" =&gt; "<span class="sf-dump-str" title="9 characters">"Windows"</span>"
    "<span class="sf-dump-key">HTTP_UPGRADE_INSECURE_REQUESTS</span>" =&gt; "<span class="sf-dump-str">1</span>"
    "<span class="sf-dump-key">HTTP_USER_AGENT</span>" =&gt; "<span class="sf-dump-str" title="111 characters">Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36</span>"
    "<span class="sf-dump-key">HTTP_ACCEPT</span>" =&gt; "<span class="sf-dump-str" title="135 characters">text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9</span>"
    "<span class="sf-dump-key">HTTP_SEC_FETCH_SITE</span>" =&gt; "<span class="sf-dump-str" title="11 characters">same-origin</span>"
    "<span class="sf-dump-key">HTTP_SEC_FETCH_MODE</span>" =&gt; "<span class="sf-dump-str" title="8 characters">navigate</span>"
    "<span class="sf-dump-key">HTTP_SEC_FETCH_USER</span>" =&gt; "<span class="sf-dump-str" title="2 characters">?1</span>"
    "<span class="sf-dump-key">HTTP_SEC_FETCH_DEST</span>" =&gt; "<span class="sf-dump-str" title="8 characters">document</span>"
    "<span class="sf-dump-key">HTTP_REFERER</span>" =&gt; "<span class="sf-dump-str" title="34 characters">http://127.0.0.1:8000/dashboard/v1</span>"
    "<span class="sf-dump-key">HTTP_ACCEPT_ENCODING</span>" =&gt; "<span class="sf-dump-str" title="17 characters">gzip, deflate, br</span>"
    "<span class="sf-dump-key">HTTP_ACCEPT_LANGUAGE</span>" =&gt; "<span class="sf-dump-str" title="35 characters">id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7</span>"
    "<span class="sf-dump-key">HTTP_COOKIE</span>" =&gt; "<span class="sf-dump-str sf-dump-str-collapse" title="746 characters"><span class="sf-dump-str-collapse">_ga=GA1.1.1265979492.1637201731; XSRF-TOKEN=eyJpdiI6ImQ1UUNuMW5JbEE1dkZIeXpvR1g3bXc9PSIsInZhbHVlIjoiZThhYndYc254Rnh5K2RlTVVjdXIyNUJsbXRPNVZGS3ltWEVNMzdmYzA5cWFsZ25VNSs3TmE2MkgwV3UyMFNaNW9aVkhLRjZoMWZFd0NUL2FrcFBNcnVLWkVZUXpaV2lQQk9WRUdFSkdPQVNxYzZzTkkxWU84U3BPWE9KeFNQYXUiLCJtYWMiOiIxNzhiZjAzNjhkZjIyNzdjZDJhYWY5ODcxZTk2NmNkNjRiYWM1MDZlNjFmOTcwOGViZWY2ZWVjZmJlYWZmYzY1IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IndPdXU3UFA5MlJOSVBXYk5iUlBycGc9PSIsInZhbHVlIjoiaG5WdENrZVRTNlE2N0xwOFdGMXovZWhFcGpSeW9FRlFiQ05iMTIvckplOXlGbUFiZnFaWm5RL3NUbkVsSFhjbS95YjhUbkFYQkJONldvVjdxT3N0UFpRRlJNQ1lGU1BhSmQ1SHlNLzhuQkQ2UUlCaVpzaGZWOFozWmNuNEdIaXUiLCJtYWMiOiJiNDc4OGMyZWYxNWY2NGVjZDRhODRiMjlhYjQ0NjQ0NTUxZTlhN2U2NTRlZjgzNGMyYjg0OTgyNjcyMGJlMDIwIiwidGFnIjoiIn0%3D<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">_ga=GA1.1.1265979492.1637201731; XSRF-TOKEN=eyJpdiI6ImQ1UUNuMW5JbEE1dkZIeXpvR1g3bXc9PSIsInZhbHVlIjoiZThhYndYc254Rnh5K2RlTVVjdXIyNUJsbXRPNVZGS3ltWEVNMzdmYzA5cWFs<a class="sf-dump-ref sf-dump-str-toggle" title="586 remaining characters"> ▶</a></span></span>"
    "<span class="sf-dump-key">REQUEST_TIME_FLOAT</span>" =&gt; <span class="sf-dump-num">1656699127.4815</span>
    "<span class="sf-dump-key">REQUEST_TIME</span>" =&gt; <span class="sf-dump-num">1656699127</span>
  </samp>]
  </pre><script>Sfdump("sf-dump-1998492651", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="request_cookies">request_cookies</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-1830740883" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">array:3</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▼</span></a><samp data-depth="1" class="sf-dump-expanded">
    "<span class="sf-dump-key">_ga</span>" =&gt; <span class="sf-dump-const">null</span>
    "<span class="sf-dump-key">XSRF-TOKEN</span>" =&gt; "<span class="sf-dump-str" title="40 characters">YRMTXrnhbwZOh2KOW0SGqB2ThEbmhHYlSQlPLY2U</span>"
    "<span class="sf-dump-key">laravel_session</span>" =&gt; "<span class="sf-dump-str" title="40 characters">KCmhWgswL0SMjelCIE4iqpVVJQrQ0MBQFcLFTn0v</span>"
  </samp>]
  </pre><script>Sfdump("sf-dump-1830740883", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="response_headers">response_headers</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-1597037898" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">array:5</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▼</span></a><samp data-depth="1" class="sf-dump-expanded">
    "<span class="sf-dump-key">content-type</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="24 characters">text/html; charset=UTF-8</span>"
    </samp>]
    "<span class="sf-dump-key">cache-control</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="17 characters">no-cache, private</span>"
    </samp>]
    "<span class="sf-dump-key">date</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str" title="29 characters">Fri, 01 Jul 2022 18:12:07 GMT</span>"
    </samp>]
    "<span class="sf-dump-key">set-cookie</span>" =&gt; <span class="sf-dump-note">array:2</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str sf-dump-str-collapse" title="428 characters"><span class="sf-dump-str-collapse">XSRF-TOKEN=eyJpdiI6ImxLc3ZSZnZrRGNUcUtQNURpeTQ4MGc9PSIsInZhbHVlIjoidDJ3YUFRVVhRMWVYYjBIVDlmZ25DakpjODZaTG50Z0UrelptREtScEtMeitwMWJ2ZVZPVGxPVHgwMXFiWE5YQS9JR2Z1bzhJY3RQMjNLUCt3bzNyb01Gc3ArR1ZuUHFwTzJLcGZFVzE0d2JCUGRlQWN5c1pVeklnWGJPa0JYbWsiLCJtYWMiOiIzZWUzYjgzMjE0OTY3Njc0NTg5NjljYWIyNjgxZDg2ODlmNTgxOTJhZDkyNzZkYTY4ZTc1ODFkMDgzYmQ4N2M2IiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; Max-Age=7200; path=/; samesite=lax<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">XSRF-TOKEN=eyJpdiI6ImxLc3ZSZnZrRGNUcUtQNURpeTQ4MGc9PSIsInZhbHVlIjoidDJ3YUFRVVhRMWVYYjBIVDlmZ25DakpjODZaTG50Z0UrelptREtScEtMeitwMWJ2ZVZPVGxPVHgwMXFiWE5YQS9JR2Z1b<a class="sf-dump-ref sf-dump-str-toggle" title="268 remaining characters"> ▶</a></span></span>"
      <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str sf-dump-str-collapse" title="443 characters"><span class="sf-dump-str-collapse">laravel_session=eyJpdiI6Im9ZVE8zQ3MvRUczMVpsK2I1N2VNY1E9PSIsInZhbHVlIjoiMHZKaEVFcS8rcVhMSC9rWVZsRnFycm9RUmVIcCtEZmJmWEt3R01ua082bUQvbFl2WXQzUWJZczlRWWtMYi9aZTFpMXpRcU95VXNHeWRKRjZBTUMwS1M0MmxYbVAzeHBDY05ZVDU5Y045eEQyNDA5ckhpRkViOExJTnMvcUhQN20iLCJtYWMiOiIyY2RlOWQyMzZlYTdkYTgxN2Q5ZmM3OGRhNjBmNDViNzY4NDczOGZiNjQ5ZjZlZjU1MmMzZTRkZWZiYjY4YTZhIiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; Max-Age=7200; path=/; httponly; samesite=lax<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">laravel_session=eyJpdiI6Im9ZVE8zQ3MvRUczMVpsK2I1N2VNY1E9PSIsInZhbHVlIjoiMHZKaEVFcS8rcVhMSC9rWVZsRnFycm9RUmVIcCtEZmJmWEt3R01ua082bUQvbFl2WXQzUWJZczlRWWtMYi9aZTFp<a class="sf-dump-ref sf-dump-str-toggle" title="283 remaining characters"> ▶</a></span></span>"
    </samp>]
    "<span class="sf-dump-key">Set-Cookie</span>" =&gt; <span class="sf-dump-note">array:2</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      <span class="sf-dump-index">0</span> =&gt; "<span class="sf-dump-str sf-dump-str-collapse" title="400 characters"><span class="sf-dump-str-collapse">XSRF-TOKEN=eyJpdiI6ImxLc3ZSZnZrRGNUcUtQNURpeTQ4MGc9PSIsInZhbHVlIjoidDJ3YUFRVVhRMWVYYjBIVDlmZ25DakpjODZaTG50Z0UrelptREtScEtMeitwMWJ2ZVZPVGxPVHgwMXFiWE5YQS9JR2Z1bzhJY3RQMjNLUCt3bzNyb01Gc3ArR1ZuUHFwTzJLcGZFVzE0d2JCUGRlQWN5c1pVeklnWGJPa0JYbWsiLCJtYWMiOiIzZWUzYjgzMjE0OTY3Njc0NTg5NjljYWIyNjgxZDg2ODlmNTgxOTJhZDkyNzZkYTY4ZTc1ODFkMDgzYmQ4N2M2IiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; path=/<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">XSRF-TOKEN=eyJpdiI6ImxLc3ZSZnZrRGNUcUtQNURpeTQ4MGc9PSIsInZhbHVlIjoidDJ3YUFRVVhRMWVYYjBIVDlmZ25DakpjODZaTG50Z0UrelptREtScEtMeitwMWJ2ZVZPVGxPVHgwMXFiWE5YQS9JR2Z1b<a class="sf-dump-ref sf-dump-str-toggle" title="240 remaining characters"> ▶</a></span></span>"
      <span class="sf-dump-index">1</span> =&gt; "<span class="sf-dump-str sf-dump-str-collapse" title="415 characters"><span class="sf-dump-str-collapse">laravel_session=eyJpdiI6Im9ZVE8zQ3MvRUczMVpsK2I1N2VNY1E9PSIsInZhbHVlIjoiMHZKaEVFcS8rcVhMSC9rWVZsRnFycm9RUmVIcCtEZmJmWEt3R01ua082bUQvbFl2WXQzUWJZczlRWWtMYi9aZTFpMXpRcU95VXNHeWRKRjZBTUMwS1M0MmxYbVAzeHBDY05ZVDU5Y045eEQyNDA5ckhpRkViOExJTnMvcUhQN20iLCJtYWMiOiIyY2RlOWQyMzZlYTdkYTgxN2Q5ZmM3OGRhNjBmNDViNzY4NDczOGZiNjQ5ZjZlZjU1MmMzZTRkZWZiYjY4YTZhIiwidGFnIjoiIn0%3D; expires=Fri, 01-Jul-2022 20:12:07 GMT; path=/; httponly<a class="sf-dump-ref sf-dump-str-toggle" title="Collapse"> ◀</a></span><span class="sf-dump-str-expand">laravel_session=eyJpdiI6Im9ZVE8zQ3MvRUczMVpsK2I1N2VNY1E9PSIsInZhbHVlIjoiMHZKaEVFcS8rcVhMSC9rWVZsRnFycm9RUmVIcCtEZmJmWEt3R01ua082bUQvbFl2WXQzUWJZczlRWWtMYi9aZTFp<a class="sf-dump-ref sf-dump-str-toggle" title="255 remaining characters"> ▶</a></span></span>"
    </samp>]
  </samp>]
  </pre><script>Sfdump("sf-dump-1597037898", {"maxDepth":0})</script>
  </dd><dt class="phpdebugbar-widgets-key"><span title="session_attributes">session_attributes</span></dt><dd class="phpdebugbar-widgets-value"><pre class="sf-dump" id="sf-dump-44089675" data-indent-pad="  " tabindex="0"><div class="sf-dump-search-wrapper sf-dump-search-hidden"> <input type="text" class="sf-dump-search-input"> <span class="sf-dump-search-count">0 of 0</span> <button type="button" class="sf-dump-search-input-previous" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 1331l-166 165q-19 19-45 19t-45-19L896 965l-531 531q-19 19-45 19t-45-19l-166-165q-19-19-19-45.5t19-45.5l742-741q19-19 45-19t45 19l742 741q19 19 19 45.5t-19 45.5z"></path></svg> </button> <button type="button" class="sf-dump-search-input-next" tabindex="-1"> <svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1683 808l-742 741q-19 19-45 19t-45-19L109 808q-19-19-19-45.5t19-45.5l166-165q19-19 45-19t45 19l531 531 531-531q19-19 45-19t45 19l166 165q19 19 19 45.5t-19 45.5z"></path></svg> </button> </div><span class="sf-dump-note">array:6</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▼</span></a><samp data-depth="1" class="sf-dump-expanded">
    "<span class="sf-dump-key">_token</span>" =&gt; "<span class="sf-dump-str" title="40 characters">YRMTXrnhbwZOh2KOW0SGqB2ThEbmhHYlSQlPLY2U</span>"
    "<span class="sf-dump-key">url</span>" =&gt; []
    "<span class="sf-dump-key">_previous</span>" =&gt; <span class="sf-dump-note">array:1</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      "<span class="sf-dump-key">url</span>" =&gt; "<span class="sf-dump-str" title="30 characters">http://127.0.0.1:8000/login/v1</span>"
    </samp>]
    "<span class="sf-dump-key">_flash</span>" =&gt; <span class="sf-dump-note">array:2</span> [<a class="sf-dump-ref sf-dump-toggle" title="[Ctrl+click] Expand all children"><span>▶</span></a><samp data-depth="2" class="sf-dump-compact">
      "<span class="sf-dump-key">old</span>" =&gt; []
      "<span class="sf-dump-key">new</span>" =&gt; []
    </samp>]
    "<span class="sf-dump-key">login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d</span>" =&gt; <span class="sf-dump-num">2</span>
    "<span class="sf-dump-key">PHPDEBUGBAR_STACK_DATA</span>" =&gt; []
  </samp>]
  </pre><script>Sfdump("sf-dump-44089675", {"maxDepth":0})</script>
  </dd></dl></div></div><a class="phpdebugbar-restore-btn" style=""></a></div><div class="phpdebugbar-openhandler" style="display: none;"><div class="phpdebugbar-openhandler-header">PHP DebugBar | Open<a><i class="phpdebugbar-fa phpdebugbar-fa-times"></i></a></div><table><thead><tr><th width="150">Date</th><th width="55">Method</th><th>URL</th><th width="125">IP</th><th width="100">Filter data</th></tr></thead><tbody></tbody></table><div class="phpdebugbar-openhandler-actions"><a>Load more</a><a>Show only current URL</a><a>Show all</a><a>Delete all</a><form><br><b>Filter results</b><br>Method: <select name="method"><option></option><option>GET</option><option>POST</option><option>PUT</option><option>DELETE</option></select><br>Uri: <input type="text" name="uri"><br>IP: <input type="text" name="ip"><br><button type="submit">Search</button></form></div></div><div class="phpdebugbar-openhandler-overlay" style="display: none;"></div>


  </body>



@endsection

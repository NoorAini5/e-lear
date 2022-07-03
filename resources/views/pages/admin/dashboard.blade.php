@extends('layouts.default', ['topMenu' => true, 'sidebarHide' => true])
@section('title', 'Dashboard')

@push('css')
<link href="/assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet" />
<link href="/assets/plugins/nvd3/build/nv.d3.css" rel="stylesheet" />
<link href="/assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" />
@endpush

@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb float-xl-right">
  {{-- <li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
  <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
  <li class="breadcrumb-item active">Dashboard v3</li> --}}
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
{{-- <h1 class="page-header mb-3">Dashboard v3</h1> --}}
<!-- end page-header -->


<!-- begin daterange-filter -->
{{-- <div class="d-sm-flex align-items-center mb-3">
  <a href="#" class="btn btn-inverse mr-2 text-truncate" id="daterange-filter">
    <i class="fa fa-calendar fa-fw text-white-transparent-5 ml-n1"></i>
    <span>1 Jun 2020 - 7 Jun 2020</span>
    <b class="caret"></b>
  </a>
  <div class="text-muted f-w-600 mt-2 mt-sm-0">compared to <span id="daterange-prev-date">24 Mar-30 Apr 2020</span></div>
</div> --}}
<!-- end daterange-filter -->


<!-- begin widget-todolist -->
{{-- <div class="widget-todolist widget-todolist-rounded">
    <!-- begin widget-todolist-header -->
    <div class="widget-todolist-header">
      <div class="widget-todolist-header-left">
        <h4 class="widget-todolist-header-title">Todolist</h4>
      </div>
      <div class="widget-todolist-header-right">
        <div class="widget-todolist-header-total">
          <span class="text-inverse">0</span>
          <small>Done</small>
        </div>
      </div>
    </div>
</div> --}}
    <!-- end widget-todolist-header -->

    <!-- begin widget-todolist-body -->
    {{-- <div class="widget-todolist-body">
      <!-- begin widget-todolist-item -->
      <div class="widget-todolist-item">
        <div class="widget-todolist-input">
          <div class="checkbox checkbox-css pt-0">
            <input type="checkbox" id="widget_todolist_1" />
            <label for="widget_todolist_1" class="p-l-15"> </label>
          </div>
        </div>
        <div class="widget-todolist-content">
          <h4 class="widget-todolist-title">Borrow Tony's travel guide</h4>
          <p class="widget-todolist-desc">Vacation in Rome</p>
        </div>
        <div class="widget-todolist-icon">
          <a href="#"><i class="fa fa-question-circle"></i></a>
        </div>
      </div>
      <!-- end widget-todolist-item -->
      ...
      <!-- begin widget-todolist-item -->
      <div class="widget-todolist-item">
        <div class="widget-todolist-input">
          <i class="fa fa-plus text-muted"></i>
        </div>
        <div class="widget-todolist-content">
          <input type="text" class="form-control" placeholder="Write your task here..." />
        </div>
      </div>
      <!-- end widget-todolist-item -->
    </div> --}}
    <!-- end widget-todolist-body -->
  </div>
  <!-- end widget-todolist -->


<!-- begin timeline -->
{{-- <ul class="timeline">
    <li>
        <!-- begin timeline-time -->
        <div class="timeline-time">
            <span class="date">today</span>
            <span class="time">04:20</span>
        </div>
        <!-- end timeline-time -->
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            <div class="timeline-header">
                <span class="userimage"><img src="/assets/img/user/user-1.jpg" alt="" /></span>
                <span class="username"><a href="javascript:;">John Smith</a> <small></small></span>
                <span class="views">18 Views</span>
            </div>
            <div class="timeline-content">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                    Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                </p>
            </div>
            <div class="timeline-likes">
                <div class="stats">
                    <span class="fa-stack fa-fw stats-icon">
                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                    <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                    </span>
                    <span class="fa-stack fa-fw stats-icon">
                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                    </span>
                    <span class="stats-total">4.3k</span>
                </div>
                <div class="stats-right">
                    <span class="stats-text">259 Shares</span>
                    <span class="stats-text">21 Comments</span>
                </div>
            </div>
            <div class="timeline-footer">
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
            </div>
            <div class="timeline-comment-box">
                <div class="user"><img src="/assets/img/user/user-13.jpg" /></div>
                <div class="input">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-corner" placeholder="Write a comment..." />
                            <span class="input-group-btn p-l-10">
                            <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end timeline-body -->
    </li>
    <li>
        <!-- begin timeline-time -->
        <div class="timeline-time">
            <span class="date">yesterday</span>
            <span class="time">20:17</span>
        </div>
        <!-- end timeline-time -->
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            <div class="timeline-header">
                <span class="userimage"><img src="/assets/img/user/user-2.jpg" alt="" /></span>
                <span class="username">Darren Parrase</span>
                <span class="views">82 Views</span>
            </div>
            <div class="timeline-content">
                <p>Location: United States</p>
                <div id="google-map" class="height-sm m-b-10"></div>
            </div>
            <div class="timeline-footer">
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
            </div>
        </div>
        <!-- end timeline-body -->
    </li>
    <li>
        <!-- begin timeline-time -->
        <div class="timeline-time">
            <span class="date">24 February 2014</span>
            <span class="time">08:17</span>
        </div>
        <!-- end timeline-time -->
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            <div class="timeline-header">
                <span class="userimage"><img src="/assets/img/user/user-6.jpg" alt="" /></span>
                <span class="username">Richard Leong</span>
                <span class="views">1,282 Views</span>
            </div>
            <div class="timeline-content">
                <p class="lead">
                    <i class="fa fa-quote-left fa-fw pull-left"></i>
                    Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
                    <i class="fa fa-quote-right fa-fw pull-right"></i>
                </p>
            </div>
            <div class="timeline-footer">
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
            </div>
        </div>
        <!-- end timeline-body -->
    </li>
    <li>
        <!-- begin timeline-time -->
        <div class="timeline-time">
            <span class="date">10 January 2014</span>
            <span class="time">20:43</span>
        </div>
        <!-- end timeline-time -->
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            <div class="timeline-header">
                <span class="userimage"><img src="/assets/img/user/user-7.jpg" alt="" /></span>
                <span class="username">Lelouch Wong</span>
                <span class="views">1,021,282 Views</span>
            </div>
            <div class="timeline-content">
                <h4 class="template-title">
                    <i class="fa fa-map-marker-alt text-danger fa-fw"></i>
                    795 Folsom Ave, Suite 600 San Francisco, CA 94107
                </h4>
                <p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
                <p class="m-t-20">
                    <img src="/assets/img/gallery/gallery-4.jpg" alt="" />
                </p>
            </div>
            <div class="timeline-footer">
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a>
                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
            </div>
        </div>
        <!-- end timeline-body -->
    </li>
    <li>
        <!-- begin timeline-icon -->
        <div class="timeline-icon">
            <a href="javascript:;">&nbsp;</a>
        </div>
        <!-- end timeline-icon -->
        <!-- begin timeline-body -->
        <div class="timeline-body">
            Loading...
        </div>
        <!-- begin timeline-body -->
    </li>
</ul> --}}
<!-- end timeline -->



<!-- begin widget-stats Siswa -->
<div class="row">
    <div class="col-md-4">
        <div class="widget widget-stats bg-gradient-red m-b-10">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-child fa-fw"></i></div>
            <div class="stats-content">
              <div class="stats-title">Siswa</div>
              <div class="stats-number">7,842,900</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 70.1%;"></div>
              </div>
              <div class="stats-desc">Better than last week (70.1%)</div>
            </div>
          </div>
    </div>

    <div class="col-md-4">
        <div class="widget widget-stats bg-gradient-teal m-b-10">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-user fa-fw"></i></div>
            <div class="stats-content">
              <div class="stats-title">Guru</div>
              <div class="stats-number">7,842,900</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 70.1%;"></div>
              </div>
              <div class="stats-desc">Better than last week (70.1%)</div>
            </div>
          </div>
    </div>

    <div class="col-md-4">
        <div class="widget widget-stats bg-gradient-yellow m-b-10">
            <div class="stats-icon stats-icon-lg"><i class="fa fa-book fa-fw"></i></div>
            <div class="stats-content">
              <div class="stats-title">Kelas</div>
              <div class="stats-number">7,842,900</div>
              <div class="stats-progress progress">
                <div class="progress-bar" style="width: 70.1%;"></div>
              </div>
              <div class="stats-desc">Better than last week (70.1%)</div>
            </div>
          </div>
    </div>
</div>

  <!-- end widget-stats -->



    <!-- begin scroll to top btn -->
<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
<!-- end scroll to top btn -->

</div>

<!-- ================== BEGIN BASE JS ================== -->
<script src="/assets/js/app.min.js"></script>
<script src="/assets/js/theme/default.min.js"></script>
<!-- ================== END BASE JS ================== -->

<script src="/assets/js/custom/select2.autofocus.fix.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="/assets/js/demo/timeline.demo.js"></script>
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
phpdebugbar.addDataSet({"__meta":{"id":"X47e22bb7a9d894c90165f504675cef59","datetime":"2022-05-12 06:32:27","utime":1652337147.307849,"method":"GET","uri":"\/extra\/timeline","ip":"127.0.0.1"},"php":{"version":"7.4.19","interface":"cli-server"},"messages":{"count":0,"messages":[]},"time":{"start":1652337146.943063,"end":1652337147.307877,"duration":0.36481404304504395,"duration_str":"365ms","measures":[{"label":"Booting","start":1652337146.943063,"relative_start":0,"end":1652337147.169205,"relative_end":1652337147.169205,"duration":0.22614192962646484,"duration_str":"226ms","params":[],"collector":null},{"label":"Application","start":1652337147.17249,"relative_start":0.22942686080932617,"end":1652337147.30788,"relative_end":2.86102294921875e-6,"duration":0.135390043258667,"duration_str":"135ms","params":[],"collector":null}]},"memory":{"peak_usage":22134784,"peak_usage_str":"21MB"},"exceptions":{"count":0,"exceptions":[]},"views":{"nb_templates":9,"templates":[{"name":"demo-pages.extra-timeline (\\resources\\views\\demo-pages\\extra-timeline.blade.php)","param_count":0,"params":[],"type":"blade"},{"name":"layouts.default (\\resources\\views\\layouts\\default.blade.php)","param_count":3,"params":["__env","app","errors"],"type":"blade"},{"name":"includes.head (\\resources\\views\\includes\\head.blade.php)","param_count":3,"params":["__env","app","errors"],"type":"blade"},{"name":"includes.component.page-loader (\\resources\\views\\includes\\component\\page-loader.blade.php)","param_count":11,"params":["__env","app","errors","bodyClass","sidebarHide","sidebarTwo","sidebarSearch","topMenu","footer","pageContainerClass","contentClass"],"type":"blade"},{"name":"includes.header (\\resources\\views\\includes\\header.blade.php)","param_count":11,"params":["__env","app","errors","bodyClass","sidebarHide","sidebarTwo","sidebarSearch","topMenu","footer","pageContainerClass","contentClass"],"type":"blade"},{"name":"includes.sidebar (\\resources\\views\\includes\\sidebar.blade.php)","param_count":11,"params":["__env","app","errors","bodyClass","sidebarHide","sidebarTwo","sidebarSearch","topMenu","footer","pageContainerClass","contentClass"],"type":"blade"},{"name":"includes.component.scroll-top-btn (\\resources\\views\\includes\\component\\scroll-top-btn.blade.php)","param_count":11,"params":["__env","app","errors","bodyClass","sidebarHide","sidebarTwo","sidebarSearch","topMenu","footer","pageContainerClass","contentClass"],"type":"blade"},{"name":"includes.page-js (\\resources\\views\\includes\\page-js.blade.php)","param_count":11,"params":["__env","app","errors","bodyClass","sidebarHide","sidebarTwo","sidebarSearch","topMenu","footer","pageContainerClass","contentClass"],"type":"blade"},{"name":"sweetalert::alert (\\resources\\views\\vendor\\sweetalert\\alert.blade.php)","param_count":11,"params":["__env","app","errors","bodyClass","sidebarHide","sidebarTwo","sidebarSearch","topMenu","footer","pageContainerClass","contentClass"],"type":"blade"}]},"route":{"uri":"GET extra\/timeline","middleware":"web","uses":"Closure() {#1700\n  class: \"Illuminate\\Routing\\RouteFileRegistrar\"\n  this: Illuminate\\Routing\\RouteFileRegistrar {#416 \u2026}\n  file: \"C:\\laragon\\www\\template\\routes\\demo.php\"\n  line: \"230 to 232\"\n}","namespace":"App\\Http\\Controllers","prefix":"","where":[],"file":"<a href=\"phpstorm:\/\/open?file=C:\\laragon\\www\\template\\routes\\demo.php&line=230\">\\routes\\demo.php:230-232<\/a>"},"queries":{"nb_statements":1,"nb_failed_statements":0,"accumulated_duration":0.00547,"accumulated_duration_str":"5.47ms","statements":[{"sql":"select * from `users` where `id` = 1 limit 1","type":"query","params":[],"bindings":["1"],"hints":null,"show_copy":false,"backtrace":[{"index":15,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\EloquentUserProvider.php","line":53},{"index":16,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\SessionGuard.php","line":148},{"index":17,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\GuardHelpers.php","line":60},{"index":18,"namespace":"view","name":"37d24071d07b2ff30e577bfd5c44708c1823e7dc","line":153},{"index":20,"namespace":null,"name":"\\vendor\\laravel\\framework\\src\\Illuminate\\Filesystem\\Filesystem.php","line":108}],"duration":0.00547,"duration_str":"5.47ms","stmt_id":"\\vendor\\laravel\\framework\\src\\Illuminate\\Auth\\EloquentUserProvider.php:53","connection":"template2","start_percent":0,"width_percent":100}]},"models":{"data":{"App\\Models\\User":1},"count":1},"swiftmailer_mails":{"count":0,"mails":[]},"gate":{"count":0,"messages":[]},"session":{"_token":"ey3oSUm86W65Y40TWV9N7CBZ5fPaqWhmlVlf9I5B","_flash":"array:2 [\n  \"old\" => []\n  \"new\" => []\n]","url":"[]","_previous":"array:1 [\n  \"url\" => \"http:\/\/127.0.0.1:8000\/extra\/timeline\"\n]","login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d":"4","login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d":"1","PHPDEBUGBAR_STACK_DATA":"[]"},"request":{"path_info":"\/extra\/timeline","status_code":"<pre class=sf-dump id=sf-dump-1022216267 data-indent-pad=\"  \"><span class=sf-dump-num>200<\/span>\n<\/pre><script>Sfdump(\"sf-dump-1022216267\", {\"maxDepth\":0})<\/script>\n","status_text":"OK","format":"html","content_type":"text\/html; charset=UTF-8","request_query":"<pre class=sf-dump id=sf-dump-1982441802 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1982441802\", {\"maxDepth\":0})<\/script>\n","request_request":"<pre class=sf-dump id=sf-dump-1668196453 data-indent-pad=\"  \">[]\n<\/pre><script>Sfdump(\"sf-dump-1668196453\", {\"maxDepth\":0})<\/script>\n","request_headers":"<pre class=sf-dump id=sf-dump-1817060475 data-indent-pad=\"  \"><span class=sf-dump-note>array:16<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>host<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>connection<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"66 characters\">&quot; Not A;Brand&quot;;v=&quot;99&quot;, &quot;Chromium&quot;;v=&quot;101&quot;, &quot;Google Chrome&quot;;v=&quot;101&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-mobile<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-ch-ua-platform<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>upgrade-insecure-requests<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str>1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>user-agent<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"115 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/101.0.4951.54 Safari\/537.36<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-site<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-mode<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-user<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>sec-fetch-dest<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>referer<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"35 characters\">http:\/\/127.0.0.1:8000\/extra\/invoice<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-encoding<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>accept-language<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"35 characters\">id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cookie<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"770 characters\">_ga=GA1.1.1265979492.1637201731; sidebar-minified=false; XSRF-TOKEN=eyJpdiI6Ik5CeUhHeVdveVl3VEhpcmJoRTlCbVE9PSIsInZhbHVlIjoiYnB4SGhFM1FYYS9qd3BQQlB0WE1acmpjblZtaWJGVGhzaUloTjZGRC9ud2puRU40YlAxVXR1UkpmTEdUcXQ1RVk5WE16TW9VaTVab0JKSGsyamJTd2k4bXdkN3pSdzVyOUV5aUtVOVNkbjM3RVV3Mm12ZDVtSXRjUVdjVnU2a1giLCJtYWMiOiIwY2YzZjY5NzhlNjQ0ZGU1MWU5NzgzZmE4YTA3ZjhmY2M2NTAxZTM0MDVhZDM5M2MwY2NmOTljMTA5ZjBjOWMxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InFUeThXYzhUUk1FQW9OVmh3U1B0OGc9PSIsInZhbHVlIjoiK0dmc2tjdGdjNmpDcDdtamtsZDFNMkVnK0xvQUx4SFhQNnRCcStuZkJqQ2VJMnc1NzIrdGx2c1E1Y2tHTitIZ0FiZzJRUlNjcTJRTEtVNmhocENGMjZHdmswU1VKaFc4WTJZOVM3NjdBQnM1YnFvNXBQUVY4SEVvQmpKMldlQmUiLCJtYWMiOiJkZDJlM2JhYWQ4OGEyODIwMDcxYTUwNDdjZmNmZTA4NDE1YmZjZjFjZTdkMWRkOWJjNzBkNTExMDYwN2Q4M2NmIiwidGFnIjoiIn0%3D<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1817060475\", {\"maxDepth\":0})<\/script>\n","request_server":"<pre class=sf-dump id=sf-dump-311338963 data-indent-pad=\"  \"><span class=sf-dump-note>array:31<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>DOCUMENT_ROOT<\/span>\" => \"<span class=sf-dump-str title=\"30 characters\">C:\\laragon\\www\\template\\public<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_ADDR<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>REMOTE_PORT<\/span>\" => \"<span class=sf-dump-str title=\"5 characters\">60914<\/span>\"\n  \"<span class=sf-dump-key>SERVER_SOFTWARE<\/span>\" => \"<span class=sf-dump-str title=\"29 characters\">PHP 7.4.19 Development Server<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PROTOCOL<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">HTTP\/1.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_NAME<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">127.0.0.1<\/span>\"\n  \"<span class=sf-dump-key>SERVER_PORT<\/span>\" => \"<span class=sf-dump-str title=\"4 characters\">8000<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_URI<\/span>\" => \"<span class=sf-dump-str title=\"15 characters\">\/extra\/timeline<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_METHOD<\/span>\" => \"<span class=sf-dump-str title=\"3 characters\">GET<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_NAME<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">\/index.php<\/span>\"\n  \"<span class=sf-dump-key>SCRIPT_FILENAME<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">C:\\laragon\\www\\template\\public\\index.php<\/span>\"\n  \"<span class=sf-dump-key>PATH_INFO<\/span>\" => \"<span class=sf-dump-str title=\"15 characters\">\/extra\/timeline<\/span>\"\n  \"<span class=sf-dump-key>PHP_SELF<\/span>\" => \"<span class=sf-dump-str title=\"25 characters\">\/index.php\/extra\/timeline<\/span>\"\n  \"<span class=sf-dump-key>HTTP_HOST<\/span>\" => \"<span class=sf-dump-str title=\"14 characters\">127.0.0.1:8000<\/span>\"\n  \"<span class=sf-dump-key>HTTP_CONNECTION<\/span>\" => \"<span class=sf-dump-str title=\"10 characters\">keep-alive<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA<\/span>\" => \"<span class=sf-dump-str title=\"66 characters\">&quot; Not A;Brand&quot;;v=&quot;99&quot;, &quot;Chromium&quot;;v=&quot;101&quot;, &quot;Google Chrome&quot;;v=&quot;101&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_MOBILE<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?0<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_CH_UA_PLATFORM<\/span>\" => \"<span class=sf-dump-str title=\"9 characters\">&quot;Windows&quot;<\/span>\"\n  \"<span class=sf-dump-key>HTTP_UPGRADE_INSECURE_REQUESTS<\/span>\" => \"<span class=sf-dump-str>1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_USER_AGENT<\/span>\" => \"<span class=sf-dump-str title=\"115 characters\">Mozilla\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\/537.36 (KHTML, like Gecko) Chrome\/101.0.4951.54 Safari\/537.36<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT<\/span>\" => \"<span class=sf-dump-str title=\"135 characters\">text\/html,application\/xhtml+xml,application\/xml;q=0.9,image\/avif,image\/webp,image\/apng,*\/*;q=0.8,application\/signed-exchange;v=b3;q=0.9<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_SITE<\/span>\" => \"<span class=sf-dump-str title=\"11 characters\">same-origin<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_MODE<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">navigate<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_USER<\/span>\" => \"<span class=sf-dump-str title=\"2 characters\">?1<\/span>\"\n  \"<span class=sf-dump-key>HTTP_SEC_FETCH_DEST<\/span>\" => \"<span class=sf-dump-str title=\"8 characters\">document<\/span>\"\n  \"<span class=sf-dump-key>HTTP_REFERER<\/span>\" => \"<span class=sf-dump-str title=\"35 characters\">http:\/\/127.0.0.1:8000\/extra\/invoice<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_ENCODING<\/span>\" => \"<span class=sf-dump-str title=\"17 characters\">gzip, deflate, br<\/span>\"\n  \"<span class=sf-dump-key>HTTP_ACCEPT_LANGUAGE<\/span>\" => \"<span class=sf-dump-str title=\"35 characters\">id-ID,id;q=0.9,en-US;q=0.8,en;q=0.7<\/span>\"\n  \"<span class=sf-dump-key>HTTP_COOKIE<\/span>\" => \"<span class=sf-dump-str title=\"770 characters\">_ga=GA1.1.1265979492.1637201731; sidebar-minified=false; XSRF-TOKEN=eyJpdiI6Ik5CeUhHeVdveVl3VEhpcmJoRTlCbVE9PSIsInZhbHVlIjoiYnB4SGhFM1FYYS9qd3BQQlB0WE1acmpjblZtaWJGVGhzaUloTjZGRC9ud2puRU40YlAxVXR1UkpmTEdUcXQ1RVk5WE16TW9VaTVab0JKSGsyamJTd2k4bXdkN3pSdzVyOUV5aUtVOVNkbjM3RVV3Mm12ZDVtSXRjUVdjVnU2a1giLCJtYWMiOiIwY2YzZjY5NzhlNjQ0ZGU1MWU5NzgzZmE4YTA3ZjhmY2M2NTAxZTM0MDVhZDM5M2MwY2NmOTljMTA5ZjBjOWMxIiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6InFUeThXYzhUUk1FQW9OVmh3U1B0OGc9PSIsInZhbHVlIjoiK0dmc2tjdGdjNmpDcDdtamtsZDFNMkVnK0xvQUx4SFhQNnRCcStuZkJqQ2VJMnc1NzIrdGx2c1E1Y2tHTitIZ0FiZzJRUlNjcTJRTEtVNmhocENGMjZHdmswU1VKaFc4WTJZOVM3NjdBQnM1YnFvNXBQUVY4SEVvQmpKMldlQmUiLCJtYWMiOiJkZDJlM2JhYWQ4OGEyODIwMDcxYTUwNDdjZmNmZTA4NDE1YmZjZjFjZTdkMWRkOWJjNzBkNTExMDYwN2Q4M2NmIiwidGFnIjoiIn0%3D<\/span>\"\n  \"<span class=sf-dump-key>REQUEST_TIME_FLOAT<\/span>\" => <span class=sf-dump-num>1652337146.9431<\/span>\n  \"<span class=sf-dump-key>REQUEST_TIME<\/span>\" => <span class=sf-dump-num>1652337146<\/span>\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-311338963\", {\"maxDepth\":0})<\/script>\n","request_cookies":"<pre class=sf-dump id=sf-dump-1236078484 data-indent-pad=\"  \"><span class=sf-dump-note>array:4<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_ga<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>sidebar-minified<\/span>\" => <span class=sf-dump-const>null<\/span>\n  \"<span class=sf-dump-key>XSRF-TOKEN<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">ey3oSUm86W65Y40TWV9N7CBZ5fPaqWhmlVlf9I5B<\/span>\"\n  \"<span class=sf-dump-key>laravel_session<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">bbAC77g0PWLRwIhfw9lBV40A4w8nM4mq9Fz31oqW<\/span>\"\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1236078484\", {\"maxDepth\":0})<\/script>\n","response_headers":"<pre class=sf-dump id=sf-dump-525961907 data-indent-pad=\"  \"><span class=sf-dump-note>array:5<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>content-type<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"24 characters\">text\/html; charset=UTF-8<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>cache-control<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"17 characters\">no-cache, private<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>date<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"29 characters\">Thu, 12 May 2022 06:32:27 GMT<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>set-cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"428 characters\">XSRF-TOKEN=eyJpdiI6IkRzRVpKQkJKUTV1RStMeTdQd1VUS3c9PSIsInZhbHVlIjoiOHM0ZEtoY2FEWXQ2bVJ3MGZnUnNQQzJaazg1M2h3dG5SRDZTU3ltWmdFVThRN053ZW5vN2VmSGxGazZtVHN4dHBVWDcrcUFCTU03bHU3UWpKUGQwb3lYbnhRM3ZBVTZYK2U4RnlSbXN3NlpQUU1COW53L0gwOUJVQ3dEaVlINUkiLCJtYWMiOiJlODZmNDllNTYwNDQ5Nzk0ZmQ0M2UxMmY5ZDdhMzJmNDI0ZDk2M2IyYmQ5NjllOTU5ZDI1NzkxMGZjZjllNzk5IiwidGFnIjoiIn0%3D; expires=Thu, 12-May-2022 08:32:27 GMT; Max-Age=7200; path=\/; samesite=lax<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"443 characters\">laravel_session=eyJpdiI6Im1hSGZhaVArcFRCV1QvSHUxeDBuZWc9PSIsInZhbHVlIjoiSVNWeTByR0FOOWdzNkx2YnhjR2NrSlh3UEY0dmxYLzJBSGd3STNVeGYvZWVwZ3BEdnJ1RytrN01xN0Qzc1JpZHZJTnRTczJSS3VPUlJQUWtNZlVSb1dNZVRKTFJZRmVFSkwyQTQzSVhXeXI2WWRLWmZIeFhlS2VveFZuWlR6bVkiLCJtYWMiOiIyMjJmZTY2N2UzZmI2NDVjYjU1YzQyM2QxNGU1MjUxOTQ3MzQzMmJhN2ViMzI4NmYwOWEwZWEwMGQxNGM4YWU2IiwidGFnIjoiIn0%3D; expires=Thu, 12-May-2022 08:32:27 GMT; Max-Age=7200; path=\/; httponly; samesite=lax<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>Set-Cookie<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    <span class=sf-dump-index>0<\/span> => \"<span class=sf-dump-str title=\"400 characters\">XSRF-TOKEN=eyJpdiI6IkRzRVpKQkJKUTV1RStMeTdQd1VUS3c9PSIsInZhbHVlIjoiOHM0ZEtoY2FEWXQ2bVJ3MGZnUnNQQzJaazg1M2h3dG5SRDZTU3ltWmdFVThRN053ZW5vN2VmSGxGazZtVHN4dHBVWDcrcUFCTU03bHU3UWpKUGQwb3lYbnhRM3ZBVTZYK2U4RnlSbXN3NlpQUU1COW53L0gwOUJVQ3dEaVlINUkiLCJtYWMiOiJlODZmNDllNTYwNDQ5Nzk0ZmQ0M2UxMmY5ZDdhMzJmNDI0ZDk2M2IyYmQ5NjllOTU5ZDI1NzkxMGZjZjllNzk5IiwidGFnIjoiIn0%3D; expires=Thu, 12-May-2022 08:32:27 GMT; path=\/<\/span>\"\n    <span class=sf-dump-index>1<\/span> => \"<span class=sf-dump-str title=\"415 characters\">laravel_session=eyJpdiI6Im1hSGZhaVArcFRCV1QvSHUxeDBuZWc9PSIsInZhbHVlIjoiSVNWeTByR0FOOWdzNkx2YnhjR2NrSlh3UEY0dmxYLzJBSGd3STNVeGYvZWVwZ3BEdnJ1RytrN01xN0Qzc1JpZHZJTnRTczJSS3VPUlJQUWtNZlVSb1dNZVRKTFJZRmVFSkwyQTQzSVhXeXI2WWRLWmZIeFhlS2VveFZuWlR6bVkiLCJtYWMiOiIyMjJmZTY2N2UzZmI2NDVjYjU1YzQyM2QxNGU1MjUxOTQ3MzQzMmJhN2ViMzI4NmYwOWEwZWEwMGQxNGM4YWU2IiwidGFnIjoiIn0%3D; expires=Thu, 12-May-2022 08:32:27 GMT; path=\/; httponly<\/span>\"\n  <\/samp>]\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-525961907\", {\"maxDepth\":0})<\/script>\n","session_attributes":"<pre class=sf-dump id=sf-dump-1924315199 data-indent-pad=\"  \"><span class=sf-dump-note>array:7<\/span> [<samp data-depth=1 class=sf-dump-expanded>\n  \"<span class=sf-dump-key>_token<\/span>\" => \"<span class=sf-dump-str title=\"40 characters\">ey3oSUm86W65Y40TWV9N7CBZ5fPaqWhmlVlf9I5B<\/span>\"\n  \"<span class=sf-dump-key>_flash<\/span>\" => <span class=sf-dump-note>array:2<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>old<\/span>\" => []\n    \"<span class=sf-dump-key>new<\/span>\" => []\n  <\/samp>]\n  \"<span class=sf-dump-key>url<\/span>\" => []\n  \"<span class=sf-dump-key>_previous<\/span>\" => <span class=sf-dump-note>array:1<\/span> [<samp data-depth=2 class=sf-dump-compact>\n    \"<span class=sf-dump-key>url<\/span>\" => \"<span class=sf-dump-str title=\"36 characters\">http:\/\/127.0.0.1:8000\/extra\/timeline<\/span>\"\n  <\/samp>]\n  \"<span class=sf-dump-key>login_admin_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>4<\/span>\n  \"<span class=sf-dump-key>login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d<\/span>\" => <span class=sf-dump-num>1<\/span>\n  \"<span class=sf-dump-key>PHPDEBUGBAR_STACK_DATA<\/span>\" => []\n<\/samp>]\n<\/pre><script>Sfdump(\"sf-dump-1924315199\", {\"maxDepth\":0})<\/script>\n"}}, "X47e22bb7a9d894c90165f504675cef59");




@endsection


@push('scripts')
<script src="/assets/plugins/d3/d3.min.js"></script>
<script src="/assets/plugins/nvd3/build/nv.d3.js"></script>
<script src="/assets/plugins/jvectormap-next/jquery-jvectormap.min.js"></script>
<script src="/assets/plugins/jvectormap-next/jquery-jvectormap-world-mill.js"></script>
<script src="/assets/plugins/apexcharts/dist/apexcharts.min.js"></script>
<script src="/assets/plugins/moment/moment.js"></script>
<script src="/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="/assets/js/demo/dashboard-v3.js"></script>
@endpush

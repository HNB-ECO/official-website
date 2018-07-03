@include('header', ['css_link_name' => 'ecosystem'])
<body>
<!-- banner -->
@include('nav')
<!--detail-->
<div class="container">
    <div class="research-download-pdf-box">
        <h2 class="hnb-research-download-pdf left">HNB Research Download PD</h2>
    </div>
    <div class="date-box00">
        <ul>
        		@if (!empty($pdf_result))
        		@foreach($pdf_result as $info)
            <li>
                <span class="date-box">{{$info['post_modified']}}</span>
                <span class="content-box05"><a href="{{$info['guid']}}">{{$info['post_title']}}</a></span>
            </li>
            @endforeach
            @endif
        </ul>
    </div>
</div>
<!-- footer -->
@include('footer')
</body>
</html>
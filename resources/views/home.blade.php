<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
@include('css') {{-- Include css file --}}  
<title>@yield('title')</title>
</head>
<body>
<div class="wrapper">
        @include('layouts.sidebar') {{-- Include sidebar file --}}
    <div class="main-panel">
        @include('layouts.header')  {{-- Include header file --}} 
    <div class="content">
        @yield("middle_content")
    </div>
  @include('layouts.footer') {{-- Include footer file --}}  
</div>
</div>
</body>
</html>
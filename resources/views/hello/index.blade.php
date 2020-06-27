<html>
<head>
  <title>Hello/Index</title>
  <style>
  body { font-size:16pt; color:#999; }
  h1 {font-size:50pt; text-align:right; color:#f6f6f6; margin:-20px 0px -30px 0px; }
  </style>
</head>
<body>
  <h1>Blade/Index</h1>
  <!-- &#064;forは@forをテキストとして出すため -->
  <p>&#064;forディレクティブの例</p>
  @foreach ($data as $item)
  @if ($loop->first)
  <p>※データ一覧</p>
  <ul>
  @endif
  <li>No,{{$loop->iteration}}. {{$item}}</li>
  @if ($loop->last)
  </ul>
  <p>--ここまで</p>
  @endif
  @endforeach
</body>
</html>

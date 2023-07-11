<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body >
    <h1> Welcome {{$name ?? "Guest"}} </h1>
    <select name="" id="">
        
    {{-- @for ($i = 1; $i <= 10; $i++)
        <h1> {{$i}} </h1>
    @endfor --}}

    {{-- @php
        $i = 1;
    @endphp

    @while ($i <= 10)
        {{$i}}
        @php
            $i++;
        @endphp
    @endwhile --}}

        {{-- @php
            $arr = ["Afghanistan",
		"Albania",
		"Algeria",
		"Andorra",
		"Angola",
		"Antigua and Barbuda",
		"Argentina",
		"Armenia",
		"Australia",
		"Austria",
		"Azerbaijan",
		"Bahamas",
		"Bahrain",
		"Bangladesh",
		];
        @endphp
    @foreach ($arr as $key=> $item)
      <option value={{$key}}>{{$item}}</option>
    @endforeach
    </select> --}}

</body>
</html>
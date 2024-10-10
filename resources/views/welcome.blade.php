<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPA Calculator</title>

    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-1/2">
    @if (session('gpa'))
            <div class="mt-4 text-center">
                @php
                    if (session('gpa') >= 3.5) {
                        $message = "Congrats Dude!";
                    } elseif (session('gpa') >= 3.0) {
                        $message = "Next Semester e kopai dibi!!";
                    } 
                @endphp

                <h2 class="text-lg font-semibold">{{$message}} Your GPA without thesis (1.5 credit) is: <span class="text-blue-500">{{ session('gpa') }}</span></h2>
            </div>
        @endif

        <h1 class="text-2xl font-bold mb-4 text-center">GPA Calculator</h1>
        
        <form action="{{ route('calculateGPA') }}" method="POST">
            @csrf
            @for ($i = 1; $i <= 9; $i++)
                
            @php
            if ($i == 7) {
                $course_code = "CSE 4113";
            } elseif ($i == 8) {
                $course_code = "HUM 4101";
            } elseif ($i == 9) {
                $course_code = "CSE 4150";
            } else {
                $course_code = "CSE 410" . $i;
            }
            @endphp
                
                <div class="mb-4">
                    <label for="subject{{ $i }}" class="block text-gray-700">Course {{ $course_code }}</label>
                    <input type="text" name="grades[]" id="subject{{ $i }}" 
                           class="mt-1 p-2 border rounded w-full" 
                           placeholder="Enter grade (Capital Letter A+,B-,C)">
                </div>
            @endfor

            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded">Calculate GPA</button>
        </form>


    </div>
</body>
</html>

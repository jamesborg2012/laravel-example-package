<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet"
        href="{{ asset('jamesborg2012/laravel-example-package/assets/laravel-example-package.css') }}" />
</head>

<body>
    @foreach ($table as $row)
        <div>
            <h2>Job - {{ $row['name'] }}, Earning €{{ $row['salary'] }}</h2>
            <table>
                <thead>
                    <th>Employee Name</th>
                    <th>Age</th>
                </thead>
                <tbody>
                    @foreach ($row['people'] as $person)
                        <tr>
                            <td>{{ $person['name'] }}</td>
                            <td>{{ $person['age'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endforeach
</body>

</html>

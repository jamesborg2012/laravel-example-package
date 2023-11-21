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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dynamic record list</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-top: 15px; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        button { padding: 8px 12px; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Dynamic Data Loading</h2>
    <!-- On-demand trigger -->
    <button id="loadBtn">Load records</button>

    <table id="recordsTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>company</th>
                <th>title</th>
                <th>location</th>
                <th>URL</th>
                <th>first_seen</th>
                <th>last_seen</th>
            </tr>
        </thead>
        <tbody id="recordRows">
            <!-- JavaScript will insert rows here -->
        </tbody>
    </table>

    <script>
        document.getElementById('loadBtn').addEventListener('click', loadData);

        function loadData() {
            // Fetch data from our PHP API (asking for a limit of 5 records)
            fetch('007_sqlite_2_json_return.php?limit=5')
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(records => {
                    const tbody = document.getElementById('recordRows');
                    tbody.innerHTML = ''; // Clear existing rows

                    // Loop through the JSON array and build rows dynamically
                    records.forEach(record => {
                        const row = document.createElement('tr');
                        
                        // Using textContent automatically protects against XSS attacks
                        row.innerHTML = `
                            <td>${record.id}</td>
                            <td>${record.company}</td>
                            <td>${record.title}</td>
                            <td>${record.location}</td>
                            <td>${record.url}</td>
                            <td>${record.first_seen}</td>
                            <td>${record.last_seen}</td>
                        `;
                        tbody.appendChild(row);
                    });

                    // Show the table once data is loaded
                   // document.getElementById('recordRows').style.display = 'table';
                    document.getElementById('recordRows').style.display = 'table-row-group';
                })
                .catch(error => {
                    console.error('Error fetching data:', error);
                    alert('Failed to load  data.');
                });
        }
    </script>
</body>
</html>

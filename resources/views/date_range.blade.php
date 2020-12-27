<html>

<head>
    <title>test</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
    .bg-1 {
        background-color: #b4c6e7;
    }

    .bg-2 {
        background-color: #eff6fb;
    }
    .bg-3{
        background-color: #f2f2f2;
    }

    th {
        font-weight: 400;
    }
    td,th{
        vertical-align: middle !important;
    }
</style>

<body>
    <div class="container-fluid">

        <div class="d-flex">

            <div class="text-center col-6 p-4">
                <p>Select By Month</p>
                <div>
                    <strong>
                        <label for="">Year</label>
                    </strong>
                    <select class="px-2 mx-2">
                        <option>2020</option>
                        <option>2019</option>
                        <option>2018</option>
                        <option>2017</option>
                    </select>

                    <strong>
                        <label>Month</label>
                    </strong>
                    <select class="px-2 mx-2">
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                    </select>
                </div>
            </div>
            <div class="text-center col-6 p-4">
                <p>Select By Date</p>
                <div>
                    <strong>
                        <label for="">From</label>
                    </strong>
                    <input type="date" class="px-2 mx-2">

                    <strong>
                        <label>To</label>
                    </strong>
                    <input type="date" class="px-2 mx-2">
                </div>
            </div>
        </div>
        <table class="table table-responsive table-bordered text-center">
            <tr class="bg-1">
                <th colspan="15" class="text-center"><strong>Activity Report</strong></th>
            </tr>
            <tr class="bg-2">
                <th rowspan="2">
                    Rep's Name
                </th>
                <th rowspan="2">
                    Number of FIles Touched
                </th>
                <th rowspan="2">
                    Email
                </th>
                <th rowspan="2">
                    SMS
                </th>
                <th rowspan="2">
                    Notes.
                </th>
                <th rowspan="2">
                    Status Changed
                </th>
                <th rowspan="2">
                    Debts
                </th>
                <th rowspan="2">
                    Average Time per Activity
                </th>
                <th colspan="4"><strong>Phone Time</strong></th>
                <th rowspan="2">
                    Total Signed
                </th>
                <th rowspan="2">
                    Total Working Days out of 21
                </th>
                <th rowspan="2">
                    Deal Average Daily Per Rep
                </th>
            </tr>
            <tr class="bg-2">
                <th>
                    Inbound Calls
                </th>
                <th>
                    Inbound Duration
                </th>
                <th>
                    Outbound Calls
                </th>
                <th>
                    Outbound Duration
                </th>
            </tr>
            <tbody>
                <tr class="bg-3">
                    <td><strong>Lyra</strong></td>
                    <td>293</td>
                    <td>478</td>
                    <td>1599</td>
                    <td>777</td>
                    <td>267</td>
                    <td>199</td>
                    <td>2 min</td>
                    <td>3</td>
                    <td>0.19 h</td>
                    <td>520</td>
                    <td>69.96 h</td>
                    <td>77</td>
                    <td>17</td>
                    <td>4.53</td>
                </tr>
                <tr>
                    <td><strong>Erill</strong></td>
                    <td>722</td>
                    <td>797</td>
                    <td>1649</td>
                    <td>953</td>
                    <td>690</td>
                    <td>239</td>
                    <td>2 min</td>
                    <td>17</td>
                    <td>1.98 h</td>
                    <td>1413</td>
                    <td>118.88 h</td>
                    <td>70</td>
                    <td>21</td>
                    <td>3.33</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
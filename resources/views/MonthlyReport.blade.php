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

    .bg-3 {
        background-color: #f2f2f2;
    }
    .bg-4 {
        background-color: #c5e0b3;
    }
    .bg-5 {
        background-color: #f7caac;
    }
    .bg-highlight-green {
        background-color: #a8d08d;
    }
    .bg-highlight-red {
        background-color: #ff7979;
    }

    th {
        font-weight: 400;
    }

    td,
    th {
        vertical-align: middle !important;
        min-width: 120px;
    }
</style>

<body>
    <div class="container-fluid">


        <div class="d-flex">

            <div class="text-center col-6 p-4 d-none" >
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
                <form method="GET" action="/date">
                    <p>Select By Date</p>
                    @csrf
                    <div>
                        <strong>
                            <label for="">From</label>
                        </strong>
                        <input type="date" name="from_date" class="px-2 mx-2">

                        <strong>
                            <label>To</label>
                        </strong>
                        <input type="date" name="to_date" class="px-2 mx-2">
                        <input type="submit" name="">
                    </div>
                </form>
            </div>
        </div>
    @isset($projects)
       
        <table class="table table-responsive table-bordered text-center">
            <tr class="">
                <th colspan="15" class="bg-1 text-center"><strong>Activity Report</strong></th>
                <th colspan="40" class="bg-4 text-center"><strong>Payroll & Accounting</strong></th>
                <th colspan="20" class="bg-5 text-center"><strong>Reports & Accounting Summary</strong></th>
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
                <th rowspan="2">Per Rep Cost</th>
                <th rowspan="2">Seat Cost</th>
                <th rowspan="2">Total Rep Cost</th>
                <th rowspan="2">Total # of Payments</th>
                <th rowspan="2">Total # of Payments Cleared</th>
                <th rowspan="2">Total # of Payments NOT Cleared</th>
                <th rowspan="2">Total Amount Scheduled</th>
                <th colspan="3"><strong>October</strong></th>
                <th colspan="3"><strong>November</strong></th>
                <th colspan="3"><strong>December</strong></th>
                <th colspan="3"><strong>January 2021</strong></th>
                <th colspan="3"><strong>February 2021</strong></th>
                <th colspan="3"><strong>March 2021</strong></th>
                <th colspan="3"><strong>April 2021</strong></th>
                <th rowspan="2"><strong>Total Money In</strong></th>
                <th rowspan="2">Average Payment</th>
                <th rowspan="2">Total Transaction Cost</th>
                <th rowspan="2">Break Even Per Rep</th>
                <th rowspan="2">Break Even Per rep not considering breakage</th>
                <th rowspan="2">Att. Breakage deduction on breakeven</th>
                <th rowspan="2">Erill's att. breakage distribution</th>
                <th rowspan="2">Jocel's att. breakage distribution</th>
                <th rowspan="2">Ivan's att. breakage distribution</th>
                <th rowspan="2">Mike's att. breakage distribution</th>
                <th rowspan="2">Radney's att. breakage distribution</th>
						
                <th rowspan="2"><strong>Profit & Loss</strong></th>


                <th rowspan="2">Average Files Touched Daily</th>
                <th rowspan="2">Attendance Average</th>
                <th rowspan="2">Attendance Breakage</th>
                <th rowspan="2">Potential Lost Sales</th>
                <th rowspan="2">Potential Lost Gains from Attendance</th>
                <th rowspan="2">Percentage of files signed vs. touched = Closing Percentage</th>
                <th rowspan="2">Percentage of payment cleared vs Total Number of Payments</th>
                <th rowspan="2">Actual Closed Deals based on Money In</th>
                <th rowspan="2">Lost Earnings From NSF, Decline, or Error</th>
                <th rowspan="2">Percentage of Files Closed vs. Loans pulled</th>
                <th rowspan="2">Percentage of SMS and Emails to Closes</th>
                <th rowspan="2">Average Calls per day</th>
                <th rowspan="2">Percentage of Calls vs signed daily</th>
                <th rowspan="2">Average number of  hours on the phone to close a deal</th>
                <th rowspan="2">Time spent on the phone closing in one day</th>
                <th rowspan="2">Hours worked outside of the phone</th>
                <th rowspan="2">Non Productive Hours in a day</th>
                <th rowspan="2">Non Productive hours in a month</th>
                <th rowspan="2">Possible Signings lost due to non-productive hours In June</th>
                <th rowspan="2">Potential Revenue Lost Based on non-productive hours</th>

                
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
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
                <th>Payments Scheduled</th>
                <th>Scheduled Amount</th>
                <th>Percentage of Money Scheduled</th>
            </tr>
            <tbody>
                @foreach ($projects as $project)
                <tr class="bg-3">
                    <td><strong>{{$project->user}}</strong></td>
                    <td>{{$project->user}}</td>
                    <td>{{$project->File_Count}}</td>
                    <td>{{$project->Email}}</td>
                    <td>{{$project->SMS}}</td>
                    <td>{{$project->Notes}}</td>
                    <td>{{$project->Status_Changes}}</td>
                    <td>{{$project->Debts}}</td>
                    <td>3</td>
                    <td>0.19 h</td>
                    <td>520</td>
                    <td>69.96 h</td>
                    <td>77</td>
                    <td>17</td>
                    <td>4.53</td>
                    <td>$ 1,317.57</td>
                    <td>$ 370.53</td>
                    <td>$ 1,688.10</td>
                    <td>166</td>
                    <td>138</td>
                    <td>28</td>
                    <td>$ 30,222.50</td>
                    <td>49</td>
                    <td>$ 10,508.75</td>
                    <td>34.77%</td>
                    <td>44</td>
                    <td>$ 7,495.00</td>
                    <td>24.80%</td>
                    <td>17</td>
                    <td>$ 2,553.75</td>
                    <td>8.45%</td>
                    <td>0</td>
                    <td>$ -  </td>
                    <td>0.00%</td>
                    <td>12</td>
                    <td>$ 2,883.75</td>
                    <td>9.54%</td>
                    <td>1</td>
                    <td>$ 147.50</td>
                    <td>0.49%</td>
                    <td>5</td>
                    <td>$ 540.00</td>
                    <td>1.79%</td>
                    <td class="bg-highlight-green">$ 26,394.00</td>
                    <td>$ 191.26</td>
                    <td class="text-danger">$ 690.00</td>
                    <td>$ 15,652.51</td>
                    <td>$ 15,387.69</td>
                    <td>$ -  </td>
                    <td>$ 77.69</td>
                    <td>$ 75.12</td>
                    <td>$ 659.25</td>
                    <td>$ 74.96</td>
                    <td>$ 7.36</td>
                    <td class="bg-highlight-green">$10,051.49</td>
                    <td>15.41</td>
                    <td>100.00%</td>
                    <td>0.00%</td>
                    <td>0.00</td>
                    <td>$ -  </td>
                    <td>25.07%</td>
                    <td>83.13%</td>
                    <td>70.66</td>
                    <td class="text-danger">$5,355.30</td>
                    <td>35.56%</td>
                    <td>3.31%</td>
                    <td>35.91</td>
                    <td>10.76%</td>
                    <td>1.26 h</td>
                    <td>4.87 h</td>
                    <td>2.63 h</td>
                    <td>0.63 h</td>
                    <td>13.83 h</td>
                    <td>10.97</td>
                    <td class="text-danger">$ 3,235.49 </td>
                </tr>
        @endforeach
            </tbody>
        </table>
        @endisset
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Cut-off Scores</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 20px; /* Space between tables */
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th:first-child, td:first-child {
            width: 100vw;
        }

        th:not(:first-child), td:not(:first-child) {
            width: 10vw;
        }

        /* Background colors for first two rows of each table */
        .table1 tr:nth-child(1),
        .table1 tr:nth-child(2) {
            background-color: orange;
        }

        .table2 tr:nth-child(1),
        .table2 tr:nth-child(2) {
            background-color: green;
        }

        .table3 tr:nth-child(1),
        .table3 tr:nth-child(2) {
            background-color: maroon;
        }

        .table4 tr:nth-child(1),
        .table4 tr:nth-child(2) {
            background-color: yellow;
        }

        .table5 tr:nth-child(1),
        .table5 tr:nth-child(2) {
            background-color: purple;
        }

        .table6 tr:nth-child(1),
        .table6 tr:nth-child(2) {
            background-color: blue;
        }

        .top-tables, .bottom-tables {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .top-tables > div, .bottom-tables > div {
            flex: 1;
            margin-right: 20px; /* Space between tables */
        }

        .top-tables > div:last-child, .bottom-tables > div:last-child {
            margin-right: 0; /* Remove margin from last table in row */
        }

        .top-tables table, .bottom-tables table {
            width: 100%;
        }

    </style>
</head>
<body>
    <h1>Cut-off Scores</h1>
    <div class="top-tables">
        <div>
            <table class="table1">
                <tr>
                    <th colspan="6">CAS</th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th>LU</th>
                    <th>MA</th>
                    <th>SC</th>
                    <th>AP</th>
                    <th>GR</th>
                </tr>
                <tr>
                    <td>AB English Language</td>
                    <td>40</td>
                    <td>25</td>
                    <td>20</td>
                    <td>30</td>
                    <td>115</td>
                </tr>
                <tr>
                    <td>AB Political Science</td>
                    <td>35</td>
                    <td>20</td>
                    <td>15</td>
                    <td>25</td>
                    <td>95</td>
                </tr>
                <tr>
                    <td>AB Filipino</td>
                    <td>45</td>
                    <td>20</td>
                    <td>15</td>
                    <td>25</td>
                    <td>105</td>
                </tr>
            </table>
        </div>
        <div>
            <table class="table2">
                <tr>
                    <th colspan="6">CCS</th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th>LU</th>
                    <th>MA</th>
                    <th>SC</th>
                    <th>AP</th>
                    <th>GR</th>
                </tr>
                <tr>
                    <td>BS Computer Science</td>
                    <td>25</td>
                    <td>45</td>
                    <td>40</td>
                    <td>35</td>
                    <td>145</td>
                </tr>
                <tr>
                    <td>BS Information Technology</td>
                    <td>30</td>
                    <td>40</td>
                    <td>35</td>
                    <td>30</td>
                    <td>135</td>
                </tr>
            </table>
        </div>
        <div>
			<table class="table3">
                <tr>
                    <th colspan="6">COC</th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th>LU</th>
                    <th>MA</th>
                    <th>SC</th>
                    <th>AP</th>
                    <th>GR</th>
                </tr>
                <tr>
                    <td>BS Criminology</td>
                    <td>20</td>
                    <td>25</td>
                    <td>30</td>
                    <td>40</td>
                    <td>115</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="bottom-tables">
        <div>
			<table class="table4">
                <tr>
                    <th colspan="6">CED</th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th>LU</th>
                    <th>MA</th>
                    <th>SC</th>
                    <th>AP</th>
                    <th>GR</th>
                </tr>
                <tr>
                    <td>BSED Mathematics</td>
                    <td>15</td>
                    <td>45</td>
                    <td>25</td>
                    <td>35</td>
                    <td>120</td>
                </tr>
                <tr>
                    <td>BSED English</td>
                    <td>40</td>
                    <td>20</td>
                    <td>20</td>
                    <td>30</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td>BSED Filipino</td>
                    <td>45</td>
                    <td>15</td>
                    <td>15</td>
                    <td>25</td>
                    <td>100</td>
                </tr>
                <tr>
                    <td>Bachelor in Elem. Education</td>
                    <td>35</td>
                    <td>20</td>
                    <td>20</td>
                    <td>25</td>
                    <td>100</td>
                </tr>
            </table>
        </div>
        <div>
            <table class="table5">
                <tr>
                    <th colspan="6">COE</th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th>LU</th>
                    <th>MA</th>
                    <th>SC</th>
                    <th>AP</th>
                    <th>GR</th>
                </tr>
                <tr>
                    <td>BS Mechanical Engineering</td>
                    <td>25</td>
                    <td>45</td>
                    <td>45</td>
                    <td>40</td>
                    <td>155</td>
                </tr>
                <tr>
                    <td>BS Electrical Engineering</td>
                    <td>20</td>
                    <td>40</td>
                    <td>45</td>
                    <td>35</td>
                    <td>140</td>
                </tr>
                <tr>
                    <td>BS Civil Engineering</td>
                    <td>20</td>
                    <td>40</td>
                    <td>45</td>
                    <td>35</td>
                    <td>140</td>
                </tr>
                <tr>
                    <td>BS Electronics Engineering</td>
                    <td>25</td>
                    <td>45</td>
                    <td>45</td>
                    <td>40</td>
                    <td>155</td>
                </tr>
                <tr>
                    <td>BS Computer Engineering</td>
                    <td>30</td>
                    <td>45</td>
                    <td>40</td>
                    <td>35</td>
                    <td>150</td>
                </tr>
            </table>
        </div>
        <div>
            <table class="table6">
                <tr>
                    <th colspan="6">CBA</th>
                </tr>
                <tr>
                    <th>Course</th>
                    <th>LU</th>
                    <th>MA</th>
                    <th>SC</th>
                    <th>AP</th>
                    <th>GR</th>
                </tr>
                <tr>
                    <td>BSBA Marketing Management</td>
                    <td>35</td>
                    <td>25</td>
                    <td>20</td>
                    <td>30</td>
                    <td>110</td>
                </tr>
                <tr>
                    <td>BSBA Operation Management</td>
                    <td>30</td>
                    <td>20</td>
                    <td>15</td>
                    <td>25</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>BSBA Financial Management</td>
                    <td>25</td>
                    <td>30</td>
                    <td>20</td>
                    <td>25</td>
                    <td>100</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>

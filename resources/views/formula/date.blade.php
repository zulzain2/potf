<h2 class="text-center m-4">
    DATE
</h2>
<div class="table-responsive">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Function</th>
                <th>Example call</th>
                <th>Expected result</th>
            </tr>
        </thead>
        <tbody>
            <tr class="function">
                <td><code class="function-name">DATE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="DATE(2008, 7, 8)">DATE(2008, 7,
                            8)</code>
                    </div>
                </td>
                <td>
                    Tue Jul 08 2008 00:00:00 GMT-0700 (PDT)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DATEVALUE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DATEVALUE('8/22/2011')">DATEVALUE('8/22/2011')</code>
                    </div>
                </td>
                <td>
                    Mon Aug 22 2011 00:00:00 GMT-0700 (PDT)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DAY</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DAY('15-Apr-11')">DAY('15-Apr-11')</code>
                    </div>
                </td>
                <td>
                    15
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DAYS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DAYS('3/15/11', '2/1/11')">DAYS('3/15/11', '2/1/11')</code>
                    </div>
                </td>
                <td>
                    42
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DAYS360</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DAYS360('1-Jan-11', '31-Dec-11')">DAYS360('1-Jan-11',
                            '31-Dec-11')</code>
                    </div>
                </td>
                <td>
                    360
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">EDATE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="EDATE('1/15/11', -1)">EDATE('1/15/11', -1)</code>
                    </div>
                </td>
                <td>
                    Wed Dec 15 2010 00:00:00 GMT-0800 (PST)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">EOMONTH</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="EOMONTH('1/1/11', -3)">EOMONTH('1/1/11', -3)</code>
                    </div>
                </td>
                <td>
                    Sun Oct 31 2010 00:00:00 GMT-0700 (PDT)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">HOUR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="HOUR('7/18/2011 7:45:00 AM')">HOUR('7/18/2011 7:45:00
                            AM')</code>
                    </div>
                </td>
                <td>
                    7
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MINUTE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MINUTE('2/1/2011 12:45:00 PM')">MINUTE('2/1/2011 12:45:00
                            PM')</code>
                    </div>
                </td>
                <td>
                    45
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">ISOWEEKNUM</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="ISOWEEKNUM('3/9/2012')">ISOWEEKNUM('3/9/2012')</code>
                    </div>
                </td>
                <td>
                    10
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MONTH</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MONTH('15-Apr-11')">MONTH('15-Apr-11')</code>
                    </div>
                </td>
                <td>
                    4
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NETWORKDAYS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NETWORKDAYS('10/1/2012', '3/1/2013', ['11/22/2012'])">NETWORKDAYS('10/1/2012',
                            '3/1/2013', ['11/22/2012'])</code>
                    </div>
                </td>
                <td>
                    109
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NETWORKDAYSINTL</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NETWORKDAYSINTL('1/1/2006', '2/1/2006', 7, ['1/2/2006'])">NETWORKDAYSINTL('1/1/2006',
                            '2/1/2006', 7, ['1/2/2006'])</code>
                    </div>
                </td>
                <td>
                    23
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NOW</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="NOW()">NOW()</code>
                    </div>
                </td>
                <td>
                    Thu Feb 20 2020 23:02:55 GMT+0100 (Central European Standard Time)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SECOND</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SECOND('2/1/2011 4:48:18 PM')">SECOND('2/1/2011 4:48:18
                            PM')</code>
                    </div>
                </td>
                <td>
                    18
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TIME</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="TIME(16, 48, 10)">TIME(16, 48,
                            10)</code>
                    </div>
                </td>
                <td>
                    0.7001157407407408
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TIMEVALUE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="TIMEVALUE('22-Aug-2011 6:35 AM')">TIMEVALUE('22-Aug-2011
                            6:35 AM')</code>
                    </div>
                </td>
                <td>
                    0.2743055555555556
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TODAY</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="TODAY()">TODAY()</code>
                    </div>
                </td>
                <td>
                    Thu Feb 20 2020 23:02:55 GMT+0100 (Central European Standard Time)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">WEEKDAY</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="WEEKDAY('2/14/2008', 3)">WEEKDAY('2/14/2008', 3)</code>
                    </div>
                </td>
                <td>
                    3
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">YEAR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="YEAR('7/5/2008')">YEAR('7/5/2008')</code>
                    </div>
                </td>
                <td>
                    2008
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">WEEKNUM</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="WEEKNUM('3/9/2012', 2)">WEEKNUM('3/9/2012', 2)</code>
                    </div>
                </td>
                <td>
                    11
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">WORKDAY</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="WORKDAY('10/1/2008', 151, ['11/26/2008', '12/4/2008'])">WORKDAY('10/1/2008',
                            151, ['11/26/2008', '12/4/2008'])</code>
                    </div>
                </td>
                <td>
                    Mon May 04 2009 00:00:00 GMT-0700 (PDT)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">WORKDAYINTL</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="WORKDAYINTL('1/1/2012', 30, 17)">WORKDAYINTL('1/1/2012', 30,
                            17)</code>
                    </div>
                </td>
                <td>
                    Sun Feb 05 2012 00:00:00 GMT-0800 (PST)
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">YEARFRAC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="YEARFRAC('1/1/2012', '7/30/2012', 3)">YEARFRAC('1/1/2012',
                            '7/30/2012', 3)</code>
                    </div>
                </td>
                <td>
                    0.5780821917808219
                </td>
            </tr>
        </tbody>
    </table>
</div>
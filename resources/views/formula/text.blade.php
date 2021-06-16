<h2 class="text-center m-4">
    TEXT
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
                <td><code class="function-name">CHAR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="CHAR(65)">CHAR(65)</code>
                    </div>
                </td>
                <td>
                    A
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">CLEAN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="CLEAN('Monthly report')">CLEAN('Monthly report')</code>
                    </div>
                </td>
                <td>
                    Monthly report
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">CODE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="CODE('A')">CODE('A')</code>
                    </div>
                </td>
                <td>
                    65
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">CONCATENATE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="CONCATENATE('Andreas', ' ', 'Hauser')">CONCATENATE('Andreas',
                            ' ', 'Hauser')</code>
                    </div>
                </td>
                <td>
                    Andreas Hauser
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">EXACT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="EXACT('Word', 'word')">EXACT('Word',
                            'word')</code>
                    </div>
                </td>
                <td>
                    false
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FIND</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FIND('M', 'Miriam McGovern', 3)">FIND('M', 'Miriam
                            McGovern', 3)</code>
                    </div>
                </td>
                <td>
                    8
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LEFT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="LEFT('Sale Price', 4)">LEFT('Sale
                            Price', 4)</code>
                    </div>
                </td>
                <td>
                    Sale
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LEN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="LEN('Phoenix, AZ')">LEN('Phoenix,
                            AZ')</code>
                    </div>
                </td>
                <td>
                    11
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LOWER</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="LOWER('E. E. Cummings')">LOWER('E.
                            E. Cummings')</code>
                    </div>
                </td>
                <td>
                    e. e. cummings
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MID</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="MID('Fluid Flow', 7, 20)">MID('Fluid
                            Flow', 7, 20)</code>
                    </div>
                </td>
                <td>
                    Flow
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NUMBERVALUE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NUMBERVALUE('2.500,27', ',', '.')">NUMBERVALUE('2.500,27',
                            ',', '.')</code>
                    </div>
                </td>
                <td>
                    2500.27
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PROPER</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PROPER('this is a TITLE')">PROPER('this is a TITLE')</code>
                    </div>
                </td>
                <td>
                    This Is A Title
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">REGEXEXTRACT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="REGEXEXTRACT('Palo Alto', 'Alto')">REGEXEXTRACT('Palo Alto',
                            'Alto')</code>
                    </div>
                </td>
                <td>
                    Alto
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">REGEXMATCH</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="REGEXMATCH('Palo Alto', 'Alto')">REGEXMATCH('Palo Alto',
                            'Alto')</code>
                    </div>
                </td>
                <td>
                    true
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">REGEXREPLACE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="REGEXREPLACE('Sutoiku', 'utoiku', 'TOIC')">REGEXREPLACE('Sutoiku',
                            'utoiku', 'TOIC')</code>
                    </div>
                </td>
                <td>
                    STOIC
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">REPLACE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="REPLACE('abcdefghijk', 6, 5, '*')">REPLACE('abcdefghijk', 6,
                            5, '*')</code>
                    </div>
                </td>
                <td>
                    abcde*k
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">REPT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="REPT('*-', 3)">REPT('*-', 3)</code>
                    </div>
                </td>
                <td>
                    *-*-*-
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">RIGHT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="RIGHT('Sale Price', 5)">RIGHT('Sale
                            Price', 5)</code>
                    </div>
                </td>
                <td>
                    Price
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">ROMAN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="ROMAN(499)">ROMAN(499)</code>
                    </div>
                </td>
                <td>
                    CDXCIX
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SEARCH</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SEARCH('margin', 'Profit Margin')">SEARCH('margin', 'Profit
                            Margin')</code>
                    </div>
                </td>
                <td>
                    8
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SPLIT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="SPLIT('A,B,C', ',')">SPLIT('A,B,C',
                            ',')</code>
                    </div>
                </td>
                <td>
                    A,B,C
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SUBSTITUTE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SUBSTITUTE('Quarter 1, 2011', '1', '2', 3)">SUBSTITUTE('Quarter
                            1, 2011', '1', '2', 3)</code>
                    </div>
                </td>
                <td>
                    Quarter 1, 2012
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">T</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="T('Rainfall')">T('Rainfall')</code>
                    </div>
                </td>
                <td>
                    Rainfall
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TRIM</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="TRIM(' First Quarter Earnings ')">TRIM(' First Quarter
                            Earnings ')</code>
                    </div>
                </td>
                <td>
                    First Quarter Earnings
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">UNICHAR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="UNICHAR(66)">UNICHAR(66)</code>
                    </div>
                </td>
                <td>
                    B
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">UNICODE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="UNICODE('B')">UNICODE('B')</code>
                    </div>
                </td>
                <td>
                    66
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">UPPER</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="UPPER('total')">UPPER('total')</code>
                    </div>
                </td>
                <td>
                    TOTAL
                </td>
            </tr>
        </tbody>
    </table>
</div>
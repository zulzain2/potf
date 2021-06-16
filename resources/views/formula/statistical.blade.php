<h2 class="text-center m-4">
    STATISTICAL
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
                <td><code class="function-name">AVEDEV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="AVEDEV([2,4], [8,16])">AVEDEV([2,4],
                            [8,16])</code>
                    </div>
                </td>
                <td>
                    4.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">AVERAGE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="AVERAGE([2,4], [8,16])">AVERAGE([2,4], [8,16])</code>
                    </div>
                </td>
                <td>
                    7.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">AVERAGEA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="AVERAGEA([2,4], [8,16])">AVERAGEA([2,4], [8,16])</code>
                    </div>
                </td>
                <td>
                    7.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">AVERAGEIF</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="AVERAGEIF([2,4,8,16], '>5', [1, 2, 3, 4])">AVERAGEIF([2,4,8,16],
                            '>5', [1, 2, 3, 4])</code>
                    </div>
                </td>
                <td>
                    3.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">AVERAGEIFS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="AVERAGEIFS([2,4,8,16], [1,2,3,4], '>=2', [1,2,4,8], '<=4')">AVERAGEIFS([2,4,8,16],
                            [1,2,3,4], '>=2', [1,2,4,8], '<=4')< /code>
                    </div>
                </td>
                <td>
                    6
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">BETADIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="BETADIST(2, 8, 10, true, 1, 3)">BETADIST(2, 8, 10, true, 1,
                            3)</code>
                    </div>
                </td>
                <td>
                    0.6854705810117458
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">BETAINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="BETAINV(0.6854705810117458, 8, 10, 1, 3)">BETAINV(0.6854705810117458,
                            8, 10, 1, 3)</code>
                    </div>
                </td>
                <td>
                    1.9999999999999998
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">BINOMDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="BINOMDIST(6, 10, 0.5, false)">BINOMDIST(6, 10, 0.5,
                            false)</code>
                    </div>
                </td>
                <td>
                    0.205078125
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">CORREL</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="CORREL([3,2,4,5,6], [9,7,12,15,17])">CORREL([3,2,4,5,6],
                            [9,7,12,15,17])</code>
                    </div>
                </td>
                <td>
                    0.9970544855015815
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COUNT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="COUNT([1,2], [3,4])">COUNT([1,2],
                            [3,4])</code>
                    </div>
                </td>
                <td>
                    4
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COUNTA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COUNTA([1, null, 3, 'a', '', 'c'])">COUNTA([1, null, 3, 'a',
                            '', 'c'])</code>
                    </div>
                </td>
                <td>
                    4
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COUNTBLANK</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COUNTBLANK([1, null, 3, 'a', '', 'c'])">COUNTBLANK([1, null,
                            3, 'a', '', 'c'])</code>
                    </div>
                </td>
                <td>
                    2
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COUNTIF</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COUNTIF(['Caen', 'Melbourne', 'Palo Alto', 'Singapore'], 'a')">COUNTIF(['Caen',
                            'Melbourne', 'Palo Alto', 'Singapore'], 'a')</code>
                    </div>
                </td>
                <td>
                    3
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COUNTIFS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COUNTIFS([2,4,8,16], [1,2,3,4], '>=2', [1,2,4,8], '<=4')">COUNTIFS([2,4,8,16],
                            [1,2,3,4], '>=2', [1,2,4,8], '<=4')< /code>
                    </div>
                </td>
                <td>
                    2
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COUNTUNIQUE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COUNTUNIQUE([1,1,2,2,3,3])">COUNTUNIQUE([1,1,2,2,3,3])</code>
                    </div>
                </td>
                <td>
                    3
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COVARIANCEP</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COVARIANCEP([3,2,4,5,6], [9,7,12,15,17])">COVARIANCEP([3,2,4,5,6],
                            [9,7,12,15,17])</code>
                    </div>
                </td>
                <td>
                    5.2
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">COVARIANCES</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="COVARIANCES([2,4,8], [5,11,12])">COVARIANCES([2,4,8],
                            [5,11,12])</code>
                    </div>
                </td>
                <td>
                    9.666666666666668
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DEVSQ</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DEVSQ([2,4,8,16])">DEVSQ([2,4,8,16])</code>
                    </div>
                </td>
                <td>
                    115
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">EXPONDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="EXPONDIST(0.2, 10, true)">EXPONDIST(0.2, 10, true)</code>
                    </div>
                </td>
                <td>
                    0.8646647167633873
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FDIST(15.2069, 6, 4, false)">FDIST(15.2069, 6, 4,
                            false)</code>
                    </div>
                </td>
                <td>
                    0.0012237917087831735
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="FINV(0.01, 6, 4)">FINV(0.01, 6,
                            4)</code>
                    </div>
                </td>
                <td>
                    0.10930991412457851
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FISHER</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="FISHER(0.75)">FISHER(0.75)</code>
                    </div>
                </td>
                <td>
                    0.9729550745276566
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FISHERINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FISHERINV(0.9729550745276566)">FISHERINV(0.9729550745276566)</code>
                    </div>
                </td>
                <td>
                    0.75
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FORECAST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FORECAST(30, [6,7,9,15,21], [20,28,31,38,40])">FORECAST(30,
                            [6,7,9,15,21], [20,28,31,38,40])</code>
                    </div>
                </td>
                <td>
                    10.607253086419755
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FREQUENCY</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FREQUENCY([79,85,78,85,50,81,95,88,97], [70,79,89])">FREQUENCY([79,85,78,85,50,81,95,88,97],
                            [70,79,89])</code>
                    </div>
                </td>
                <td>
                    1,2,4,2
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">GAMMA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="GAMMA(2.5)">GAMMA(2.5)</code>
                    </div>
                </td>
                <td>
                    1.3293403919101043
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">GAMMALN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="GAMMALN(10)">GAMMALN(10)</code>
                    </div>
                </td>
                <td>
                    12.801827480081961
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">GAUSS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="GAUSS(2)">GAUSS(2)</code>
                    </div>
                </td>
                <td>
                    0.4772498680518208
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">GEOMEAN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="GEOMEAN([2,4], [8,16])">GEOMEAN([2,4], [8,16])</code>
                    </div>
                </td>
                <td>
                    5.656854249492381
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">GROWTH</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="GROWTH([2,4,8,16], [1,2,3,4], [5])">GROWTH([2,4,8,16],
                            [1,2,3,4], [5])</code>
                    </div>
                </td>
                <td>
                    32.00000000000003
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">HARMEAN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="HARMEAN([2,4], [8,16])">HARMEAN([2,4], [8,16])</code>
                    </div>
                </td>
                <td>
                    4.266666666666667
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">HYPGEOMDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="HYPGEOMDIST(1, 4, 8, 20, false)">HYPGEOMDIST(1, 4, 8, 20,
                            false)</code>
                    </div>
                </td>
                <td>
                    0.3632610939112487
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">INTERCEPT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="INTERCEPT([2,3,9,1,8], [6,5,11,7,5])">INTERCEPT([2,3,9,1,8],
                            [6,5,11,7,5])</code>
                    </div>
                </td>
                <td>
                    0.04838709677419217
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">KURT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="KURT([3,4,5,2,3,4,5,6,4,7])">KURT([3,4,5,2,3,4,5,6,4,7])</code>
                    </div>
                </td>
                <td>
                    -0.15179963720841627
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LARGE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="LARGE([3,5,3,5,4,4,2,4,6,7], 3)">LARGE([3,5,3,5,4,4,2,4,6,7],
                            3)</code>
                    </div>
                </td>
                <td>
                    5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LINEST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="LINEST([1,9,5,7], [0,4,2,3], true, true)">LINEST([1,9,5,7],
                            [0,4,2,3], true, true)</code>
                    </div>
                </td>
                <td>
                    2,1
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LOGNORMDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="LOGNORMDIST(4, 3.5, 1.2, true)">LOGNORMDIST(4, 3.5, 1.2,
                            true)</code>
                    </div>
                </td>
                <td>
                    0.0390835557068005
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">LOGNORMINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="LOGNORMINV(0.0390835557068005, 3.5, 1.2, true)">LOGNORMINV(0.0390835557068005,
                            3.5, 1.2, true)</code>
                    </div>
                </td>
                <td>
                    4.000000000000001
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MAX</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MAX([0.1,0.2], [0.4,0.8], [true, false])">MAX([0.1,0.2],
                            [0.4,0.8], [true, false])</code>
                    </div>
                </td>
                <td>
                    0.8
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MAXA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MAXA([0.1,0.2], [0.4,0.8], [true, false])">MAXA([0.1,0.2],
                            [0.4,0.8], [true, false])</code>
                    </div>
                </td>
                <td>
                    1
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MEDIAN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MEDIAN([1,2,3], [4,5,6])">MEDIAN([1,2,3], [4,5,6])</code>
                    </div>
                </td>
                <td>
                    3.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MIN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MIN([0.1,0.2], [0.4,0.8], [true, false])">MIN([0.1,0.2],
                            [0.4,0.8], [true, false])</code>
                    </div>
                </td>
                <td>
                    0.1
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MINA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MINA([0.1,0.2], [0.4,0.8], [true, false])">MINA([0.1,0.2],
                            [0.4,0.8], [true, false])</code>
                    </div>
                </td>
                <td>
                    0
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MODEMULT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MODEMULT([1,2,3,4,3,2,1,2,3])">MODEMULT([1,2,3,4,3,2,1,2,3])</code>
                    </div>
                </td>
                <td>
                    2,3
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MODESNGL</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MODESNGL([1,2,3,4,3,2,1,2,3])">MODESNGL([1,2,3,4,3,2,1,2,3])</code>
                    </div>
                </td>
                <td>
                    2
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NORMDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NORMDIST(42, 40, 1.5, true)">NORMDIST(42, 40, 1.5,
                            true)</code>
                    </div>
                </td>
                <td>
                    0.9087887802741321
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NORMINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NORMINV(0.9087887802741321, 40, 1.5)">NORMINV(0.9087887802741321,
                            40, 1.5)</code>
                    </div>
                </td>
                <td>
                    42
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NORMSDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="NORMSDIST(1, true)">NORMSDIST(1,
                            true)</code>
                    </div>
                </td>
                <td>
                    0.8413447460685429
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NORMSINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NORMSINV(0.8413447460685429)">NORMSINV(0.8413447460685429)</code>
                    </div>
                </td>
                <td>
                    1.0000000000000002
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PEARSON</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PEARSON([9,7,5,3,1], [10,6,1,5,3])">PEARSON([9,7,5,3,1],
                            [10,6,1,5,3])</code>
                    </div>
                </td>
                <td>
                    0.6993786061802354
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PERCENTILEEXC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PERCENTILEEXC([1,2,3,4], 0.3)">PERCENTILEEXC([1,2,3,4],
                            0.3)</code>
                    </div>
                </td>
                <td>
                    1.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PERCENTILEINC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PERCENTILEINC([1,2,3,4], 0.3)">PERCENTILEINC([1,2,3,4],
                            0.3)</code>
                    </div>
                </td>
                <td>
                    1.9
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PERCENTRANKEXC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PERCENTRANKEXC([1,2,3,4], 2, 2)">PERCENTRANKEXC([1,2,3,4],
                            2, 2)</code>
                    </div>
                </td>
                <td>
                    0.4
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PERCENTRANKINC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PERCENTRANKINC([1,2,3,4], 2, 2)">PERCENTRANKINC([1,2,3,4],
                            2, 2)</code>
                    </div>
                </td>
                <td>
                    0.33
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PERMUT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="PERMUT(100, 3)">PERMUT(100,
                            3)</code>
                    </div>
                </td>
                <td>
                    970200
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PERMUTATIONA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="PERMUTATIONA(4, 3)">PERMUTATIONA(4,
                            3)</code>
                    </div>
                </td>
                <td>
                    64
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PHI</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="PHI(0.75)">PHI(0.75)</code>
                    </div>
                </td>
                <td>
                    0.30113743215480443
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">POISSONDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="POISSONDIST(2, 5, true)">POISSONDIST(2, 5, true)</code>
                    </div>
                </td>
                <td>
                    0.12465201948308113
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PROB</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PROB([1,2,3,4], [0.1,0.2,0.2,0.1], 2, 3)">PROB([1,2,3,4],
                            [0.1,0.2,0.2,0.1], 2, 3)</code>
                    </div>
                </td>
                <td>
                    0.4
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">QUARTILEEXC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="QUARTILEEXC([1,2,3,4], 1)">QUARTILEEXC([1,2,3,4], 1)</code>
                    </div>
                </td>
                <td>
                    1.25
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">QUARTILEINC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="QUARTILEINC([1,2,3,4], 1)">QUARTILEINC([1,2,3,4], 1)</code>
                    </div>
                </td>
                <td>
                    1.75
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">RANKAVG</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="RANKAVG(4, [2,4,4,8,8,16], false)">RANKAVG(4,
                            [2,4,4,8,8,16], false)</code>
                    </div>
                </td>
                <td>
                    4.5
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">RANKEQ</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="RANKEQ(4, [2,4,4,8,8,16], false)">RANKEQ(4, [2,4,4,8,8,16],
                            false)</code>
                    </div>
                </td>
                <td>
                    4
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">RSQ</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="RSQ([9,7,5,3,1], [10,6,1,5,3])">RSQ([9,7,5,3,1],
                            [10,6,1,5,3])</code>
                    </div>
                </td>
                <td>
                    0.4891304347826088
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SKEW</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SKEW([3,4,5,2,3,4,5,6,4,7])">SKEW([3,4,5,2,3,4,5,6,4,7])</code>
                    </div>
                </td>
                <td>
                    0.3595430714067974
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SKEWP</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SKEWP([3,4,5,2,3,4,5,6,4,7])">SKEWP([3,4,5,2,3,4,5,6,4,7])</code>
                    </div>
                </td>
                <td>
                    0.303193339354144
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SLOPE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SLOPE([1,9,5,7], [0,4,2,3])">SLOPE([1,9,5,7],
                            [0,4,2,3])</code>
                    </div>
                </td>
                <td>
                    2
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SMALL</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SMALL([3,5,3,5,4,4,2,4,6,7], 3)">SMALL([3,5,3,5,4,4,2,4,6,7],
                            3)</code>
                    </div>
                </td>
                <td>
                    3
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">STANDARDIZE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="STANDARDIZE(42, 40, 1.5)">STANDARDIZE(42, 40, 1.5)</code>
                    </div>
                </td>
                <td>
                    1.3333333333333333
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">STDEVA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="STDEVA([2,4], [8,16], [true, false])">STDEVA([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    6.013872850889572
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">STDEVP</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="STDEVP([2,4], [8,16], [true, false])">STDEVP([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    5.361902647381804
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">STDEVPA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="STDEVPA([2,4], [8,16], [true, false])">STDEVPA([2,4],
                            [8,16], [true, false])</code>
                    </div>
                </td>
                <td>
                    5.489889697333535
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">STDEVS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="STDEVS([2,4], [8,16], [true, false])">STDEVS([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    6.191391873668904
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">STEYX</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="STEYX([2,3,9,1,8,7,5], [6,5,11,7,5,4,4])">STEYX([2,3,9,1,8,7,5],
                            [6,5,11,7,5,4,4])</code>
                    </div>
                </td>
                <td>
                    3.305718950210041
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="TDIST(60, 1, true)">TDIST(60, 1,
                            true)</code>
                    </div>
                </td>
                <td>
                    0.9946953263673741
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TINV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="TINV(0.9946953263673741, 1)">TINV(0.9946953263673741,
                            1)</code>
                    </div>
                </td>
                <td>
                    59.99999999996535
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">TRIMMEAN</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="TRIMMEAN([4,5,6,7,2,3,4,5,1,2,3], 0.2)">TRIMMEAN([4,5,6,7,2,3,4,5,1,2,3],
                            0.2)</code>
                    </div>
                </td>
                <td>
                    3.7777777777777777
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">VARA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="VARA([2,4], [8,16], [true, false])">VARA([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    36.16666666666667
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">VARP</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="VARP([2,4], [8,16], [true, false])">VARP([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    28.75
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">VARPA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="VARPA([2,4], [8,16], [true, false])">VARPA([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    30.13888888888889
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">VARS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="VARS([2,4], [8,16], [true, false])">VARS([2,4], [8,16],
                            [true, false])</code>
                    </div>
                </td>
                <td>
                    38.333333333333336
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">WEIBULLDIST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="WEIBULLDIST(105, 20, 100, true)">WEIBULLDIST(105, 20, 100,
                            true)</code>
                    </div>
                </td>
                <td>
                    0.9295813900692769
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">ZTEST</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="ZTEST([3,6,7,8,6,5,4,2,1,9], 4)">ZTEST([3,6,7,8,6,5,4,2,1,9],
                            4)</code>
                    </div>
                </td>
                <td>
                    0.09057419685136381
                </td>
            </tr>
        </tbody>
    </table>
</div>
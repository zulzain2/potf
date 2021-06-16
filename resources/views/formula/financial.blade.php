<h2 class="text-center m-4">
    FINANCIAL
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
                <td><code class="function-name">ACCRINT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="ACCRINT('01/01/2011', '02/01/2011', '07/01/2014', 0.1, 1000, 1, 0)">ACCRINT('01/01/2011',
                            '02/01/2011', '07/01/2014', 0.1, 1000, 1, 0)</code>
                    </div>
                </td>
                <td>
                    350
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">CUMIPMT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="CUMIPMT(0.1/12, 30*12, 100000, 13, 24, 0)">CUMIPMT(0.1/12,
                            30*12, 100000, 13, 24, 0)</code>
                    </div>
                </td>
                <td>
                    -9916.77251395708
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">CUMPRINC</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="CUMPRINC(0.1/12, 30*12, 100000, 13, 24, 0)">CUMPRINC(0.1/12,
                            30*12, 100000, 13, 24, 0)</code>
                    </div>
                </td>
                <td>
                    -614.0863271085149
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DB</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DB(1000000, 100000, 6, 1, 6)">DB(1000000, 100000, 6, 1,
                            6)</code>
                    </div>
                </td>
                <td>
                    159500
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DDB</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="DDB(1000000, 100000, 6, 1, 1.5)">DDB(1000000, 100000, 6, 1,
                            1.5)</code>
                    </div>
                </td>
                <td>
                    250000
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DOLLARDE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="DOLLARDE(1.1, 16)">DOLLARDE(1.1,
                            16)</code>
                    </div>
                </td>
                <td>
                    1.625
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">DOLLARFR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="DOLLARFR(1.625, 16)">DOLLARFR(1.625,
                            16)</code>
                    </div>
                </td>
                <td>
                    1.1
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">EFFECT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="EFFECT(0.1, 4)">EFFECT(0.1,
                            4)</code>
                    </div>
                </td>
                <td>
                    0.10381289062499977
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FV(0.1/12, 10, -100, -1000, 0)">FV(0.1/12, 10, -100, -1000,
                            0)</code>
                    </div>
                </td>
                <td>
                    2124.874409194097
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">FVSCHEDULE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="FVSCHEDULE(100, [0.09,0.1,0.11])">FVSCHEDULE(100,
                            [0.09,0.1,0.11])</code>
                    </div>
                </td>
                <td>
                    133.08900000000003
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">IPMT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="IPMT(0.1/12, 6, 2*12, 100000, 1000000, 0)">IPMT(0.1/12, 6,
                            2*12, 100000, 1000000, 0)</code>
                    </div>
                </td>
                <td>
                    928.8235718400465
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">IRR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="IRR([-75000,12000,15000,18000,21000,24000], 0.075)">IRR([-75000,12000,15000,18000,21000,24000],
                            0.075)</code>
                    </div>
                </td>
                <td>
                    0.05715142887178447
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">ISPMT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="ISPMT(0.1/12, 6, 2*12, 100000)">ISPMT(0.1/12, 6, 2*12,
                            100000)</code>
                    </div>
                </td>
                <td>
                    -625
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">MIRR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="MIRR([-75000,12000,15000,18000,21000,24000], 0.1, 0.12)">MIRR([-75000,12000,15000,18000,21000,24000],
                            0.1, 0.12)</code>
                    </div>
                </td>
                <td>
                    0.07971710360838036
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NOMINAL</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="NOMINAL(0.1, 4)">NOMINAL(0.1,
                            4)</code>
                    </div>
                </td>
                <td>
                    0.09645475633778045
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NPER</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NPER(0.1/12, -100, -1000, 10000, 0)">NPER(0.1/12, -100,
                            -1000, 10000, 0)</code>
                    </div>
                </td>
                <td>
                    63.39385422740764
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NPV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="NPV(0.1, -10000, 2000, 4000, 8000)">NPV(0.1, -10000, 2000,
                            4000, 8000)</code>
                    </div>
                </td>
                <td>
                    1031.3503176012546
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PDURATION</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PDURATION(0.1, 1000, 2000)">PDURATION(0.1, 1000,
                            2000)</code>
                    </div>
                </td>
                <td>
                    7.272540897341714
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PMT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PMT(0.1/12, 2*12, 100000, 1000000, 0)">PMT(0.1/12, 2*12,
                            100000, 1000000, 0)</code>
                    </div>
                </td>
                <td>
                    -42426.08563793503
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PPMT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PPMT(0.1/12, 6, 2*12, 100000, 1000000, 0)">PPMT(0.1/12, 6,
                            2*12, 100000, 1000000, 0)</code>
                    </div>
                </td>
                <td>
                    -43354.909209775076
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">PV</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="PV(0.1/12, 2*12, 1000, 10000, 0)">PV(0.1/12, 2*12, 1000,
                            10000, 0)</code>
                    </div>
                </td>
                <td>
                    -29864.950264779152
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">RATE</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="RATE(2*12, -1000, -10000, 100000, 0, 0.1)">RATE(2*12, -1000,
                            -10000, 100000, 0, 0.1)</code>
                    </div>
                </td>
                <td>
                    0.06517891177181533
                </td>
            </tr>
        </tbody>
    </table>
</div>
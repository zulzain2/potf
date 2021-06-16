<h2 class="text-center m-4">
    LOGICAL
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
                <td><code class="function-name">AND</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="AND(true, false, true)">AND(true,
                            false, true)</code>
                    </div>
                </td>
                <td>
                    false
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">false</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="FALSE()">FALSE()</code>
                    </div>
                </td>
                <td>
                    false
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">IF</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="IF(true, 'Hello!', 'Goodbye!')">IF(true, 'Hello!',
                            'Goodbye!')</code>
                    </div>
                </td>
                <td>
                    Hello!
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">IFS</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="IFS(false, 'Hello!', true, 'Goodbye!')">IFS(false, 'Hello!',
                            true, 'Goodbye!')</code>
                    </div>
                </td>
                <td>
                    Goodbye!
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">IFERROR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="IFERROR('#DIV/0!', 'Error')">IFERROR('#DIV/0!',
                            'Error')</code>
                    </div>
                </td>
                <td>
                    Error
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">IFNA</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="IFNA('#N/A', 'Error')">IFNA('#N/A',
                            'Error')</code>
                    </div>
                </td>
                <td>
                    Error
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">NOT</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="NOT(true)">NOT(true)</code>
                    </div>
                </td>
                <td>
                    false
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">OR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="OR(true, false, true)">OR(true,
                            false, true)</code>
                    </div>
                </td>
                <td>
                    true
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">SWITCH</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call"
                            data-function-call="SWITCH(7, 9, 'Nine', 7, 'Seven')">SWITCH(7, 9, 'Nine', 7,
                            'Seven')</code>
                    </div>
                </td>
                <td>
                    Seven
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">true</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="TRUE()">TRUE()</code>
                    </div>
                </td>
                <td>
                    true
                </td>
            </tr>
            <tr class="function">
                <td><code class="function-name">XOR</code></td>
                <td>
                    <div class="clickable" role="button">
                        <code class="function-call" data-function-call="XOR(true, false, true)">XOR(true,
                            false, true)</code>
                    </div>
                </td>
                <td>
                    false
                </td>
            </tr>
        </tbody>
    </table>
</div>
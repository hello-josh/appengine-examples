<?php
/**
 * The MIT License (MIT)
 *
 * Copyright (c) 2014 Joshua Johnston
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

use google\appengine\api\taskqueue\PushTask;

$host = 'fakehost'; // does not matter if it is in /etc/hosts or not
if ($_SERVER['SERVER_PORT'] != 80) {
    $host .= ':' . $_SERVER['SERVER_PORT'];
}

$options = ['header' => 'Host: ' . $host];
$task = new PushTask( '/worker.php', [], $options);

$task->add();
?>
<p>
Enqueueing Task for /worker.php with data
<?php var_dump($options); ?>
</p>
<p><a href="error.txt" target="logs">View the log</a> for worker.php.
HTTP_HOST is set to <?=$_SERVER['HTTP_HOST'];?> instead of the expected <?=$host;?> </p>

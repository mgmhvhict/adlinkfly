<?php
$withdrawal_methods = array_column(get_withdrawal_methods(), 'name', 'id');

$method = (isset($withdrawal_methods[$withdraw->method])) ?
    $withdrawal_methods[$withdraw->method] : $withdraw->method;

$amount = display_price_currency($withdraw->amount);
?>

<p><?= __('Hello') ?> <?= $user->username ?>,</p>

<p><?= __('Your withdrawal request #{0} has been approved for amount {1} and will be sent via {2}',
        $withdraw->id, $amount, $method) ?></p>

<p><?= __('Your request will be processed as part of our normal schedule. ' .
        'You will receive an email when your withdrawal has been processed.') ?></p>

<p>
    <?= __('Thanks,') ?><br>
    <?= h(get_option('site_name')) ?>
</p>

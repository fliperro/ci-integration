
<?php if(!empty($notice)): ?>
    <script>
        $(document).ready(function() {
            new PNotify({
                title: 'Komunikat',
                text: '<?php echo $notice['message']; ?>',
                styling: 'bootstrap3'
            });
        });
    </script>
<?php endif; ?>

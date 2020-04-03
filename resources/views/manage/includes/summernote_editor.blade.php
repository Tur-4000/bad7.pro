<script>
    $(document).ready(function() {
        $('.description').summernote({
            lang: 'ru-RU',
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ],
            styleTags: [
                'p',
                { title: 'Подзаголовок', tag: 'p', className: 'card__subtitle', value: 'p' },
                { title: 'Цитата', tag: 'p', className: 'card__blockquote', value: 'p' }
            ],
        });
    });
</script>

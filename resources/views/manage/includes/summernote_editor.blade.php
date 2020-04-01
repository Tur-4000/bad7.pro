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
                { title: 'Подзаголовок', tag: 'h4', className: 'card__subtitle', value: 'p' },
                'pre', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6'
            ],
        });
    });
</script>
